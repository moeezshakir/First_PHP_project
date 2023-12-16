<?php
// Retrieve productId from the AJAX request
if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    $conn = mysqli_connect('localhost', 'root', '', 'Productd');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $checkDuplicateSql = "SELECT * FROM orderproductt WHERE ProductId = '$productId'";
    $duplicateResult = $conn->query($checkDuplicateSql);

    if ($duplicateResult->num_rows > 0) {
        echo "already_ordered";
    } else {
        // Use prepared statements to prevent SQL injection
        $insertSql = "INSERT INTO orderproductt VALUES ('$productId')";

        if ($conn->query($insertSql) === TRUE) {
            echo "order_placed";
        } else {
            echo "order_error";
        }
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
