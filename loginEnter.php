<?php
session_start(); // Start the session

$conn = mysqli_connect('localhost', 'root', '', 'Logind');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["password"])) {
    // Sanitize user input
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Query the database
    $sql = "SELECT * FROM logint WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $response['success'] = true;
            $_SESSION["username"] = $row['username'];
        } else {
            $response['success'] = false;
            $response['message'] = "Invalid email or password";
        }
    } else {
        $response['success'] = false;
        $response['message'] = "Invalid email or password";
    }
} else {
    $response['success'] = false;
    $response['message'] = "Invalid request";
}

echo json_encode($response);
