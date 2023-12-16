<?php
session_start();

// Establish a database connection
$conn = new mysqli('localhost', 'root', '', 'logind');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["policy"])) {

    $response = array(); // Initialize the response array

    $email = $conn->real_escape_string($_POST["email"]);
    $username = $conn->real_escape_string($_POST["username"]);
    $password = $conn->real_escape_string($_POST["password"]);

    $checkDuplicateSql = "SELECT * FROM logint WHERE username = ?";
    $stmt = $conn->prepare($checkDuplicateSql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $duplicateResult = $stmt->get_result();

    if ($duplicateResult->num_rows > 0) {
        $response['success'] = false;
        $response['message'] = "User with username '$username' already exists.";
    } else {
        $insertSql = "INSERT INTO logint (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insertSql);
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            $response['success'] = true;
            $_SESSION['msg'] = "You successfully created an account. Now login to your account";
        } else {
            $response['success'] = false;
            $response['message'] = "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
}

// Return the JSON response
echo json_encode($response);
