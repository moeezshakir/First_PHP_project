<?php
// Establish a database connection
$conn = mysqli_connect('localhost', 'root', '', 'Productd');

// Check connection
if ($conn) {
    // echo "Database is connected";
} else {
    // echo "Database is not connected";
}
// echo "<br>";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle image upload
    if (isset($_POST["submit"])) {
        $targetDir = "Images/";
        $targetFile = $targetDir . basename($_FILES["productProfile"]["name"]);
        $check = $_FILES["productProfile"]["tmp_name"];

        if (move_uploaded_file($check, $targetFile)) {
            // echo "File uploaded successfully.";
        } else {
            // echo "Error uploading file.";
        }
    }
    // echo "<br>";

    // Sanitize and get form data
    $productid = mysqli_real_escape_string($conn, $_POST["productId"]);
    $productName = mysqli_real_escape_string($conn, $_POST["productName"]);
    $productPrice = floatval($_POST["productPrice"]);
    $productCode = mysqli_real_escape_string($conn, $_POST["productCode"]);
    // $productInstock = strtoupper(mysqli_real_escape_string($conn, $_POST["productInstock"] == 'Y' || $_POST["productInstock"]) == 1) ? true : false;
    $productInstock = strtoupper(mysqli_real_escape_string($conn, $_POST["productInstock"])) == 'Y' || $_POST["productInstock"] == 1 ? true : false;
    $productDiscount = floatval($_POST["productDiscount"]);
    $productSizes = mysqli_real_escape_string($conn, $_POST["productSizes"]);
    $productDetails = mysqli_real_escape_string($conn, $_POST["productDetails"]);
    $productProfile = basename($_FILES["productProfile"]["name"]);
    $categories = isset($_POST['categories']) ? $_POST['categories'] : '';

    if (isset($_GET['update'])) {
        $updateProductId = mysqli_real_escape_string($conn, $_GET["update"]);
        $updateSql = "UPDATE prdtd SET 
            ProductId = '$productid', 
            ProductName = '$productName', 
            ProductPrice = $productPrice, 
            ProductCode = '$productCode', 
            ProductInstock = '$productInstock', 
            ProductDiscount = $productDiscount, 
            ProductSizes = '$productSizes', 
            ProductDetails = '$productDetails',
            ProductProfile = '$productProfile',
            ProductCategories = '$categories'
            WHERE ProductId = '$updateProductId'";

        if ($conn->query($updateSql) === TRUE) {
            echo "Product updated successfully";
        } else {
            echo "Error updating product: " . $conn->error;
        }
        echo "<br>";
    } else {
        $checkDuplicateSql = "SELECT * FROM prdtd WHERE ProductId = '$productid'";
        $duplicateResult = $conn->query($checkDuplicateSql);

        if ($duplicateResult->num_rows > 0) {
            echo "Product with ID $productid already exists.";
        } else {
            $insertSql = "INSERT INTO prdtd VALUES ('$productid', '$productName', $productPrice, '$productCode', '$productInstock', $productDiscount, '$productSizes', '$productDetails', '$productProfile', '$categories')";
            if ($conn->query($insertSql) === TRUE) {
                echo "Record created successfully<br>";
            } else {
                echo "Error: " . $insertSql . "<br>" . $conn->error;
            }
            echo "<br>";
        }
    }
}

// Close the database connection
if (isset($_GET['de'])) {
    // Use $_GET instead of $_POST since you are expecting data from the URL parameters
    $productIdToDelete = mysqli_real_escape_string($conn, $_GET["de"]);
    $deleteSql = "DELETE FROM prdtd WHERE ProductId = '$productIdToDelete'";

    if ($conn->query($deleteSql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // echo "Product ID not provided for deletion.";
}
// echo "<br>";
?>

<?php
if (isset($_GET['update'])) {
    $updateProductId = mysqli_real_escape_string($conn, $_GET["update"]);
    $fetchSql = "SELECT * FROM prdtd WHERE ProductId = '$updateProductId'";
    $fetchResult = $conn->query($fetchSql);

    if ($fetchResult->num_rows == 1) {
        $row = $fetchResult->fetch_assoc();
    } else {
        // echo "Error fetching product data for update.";
    }
} else {
    $row = array(
        'ProductId' => '',
        'ProductName' => '',
        'ProductPrice' => '',
        'ProductCode' => '',
        'ProductInstock' => '',
        'ProductDiscount' => '',
        'ProductSizes' => '',
        'ProductDetails' => '',
        'ProductProfile' => '',
        'ProductCategories' => ''
    );
}
?>