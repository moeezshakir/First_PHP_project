<?php
session_start(); // Start the session

$conn = mysqli_connect('localhost', 'root', '', 'Logind');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    // Sanitize user input
    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    // Query the database
    $sql = "SELECT * FROM logint WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $response['success'] = true;
        // $response['password'] = $row['password']; // Add the password to the response
        $response['message'] = "Your password is '" . $row['password'] . "'."; // Set a success message
    } else {
        $response['success'] = false;
        $response['message'] = "Invalid email"; // Set a failure message
    }
} else {
    $response['success'] = false;
    $response['message'] = "Invalid request";
}

echo json_encode($response);
