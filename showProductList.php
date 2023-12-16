<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: Home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <!-- Fav icon -->
    <link rel="Fav icon" href="./Images/favicon-3.png" type="image/x-icon">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="./CSS Files/bhmf.css">
    <link rel="stylesheet" href="./CSS Files/showproductlist.css">
    <!-- jquery file -->
    <script src="./jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
    require  'header.php';
    ?>
    <!-- main work -->
    <section class="main">
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
        // Close the database connection
        if (isset($_GET['de'])) {
            // Use $_GET instead of $_POST since you are expecting data from the URL parameters
            $productIdToDelete = mysqli_real_escape_string($conn, $_GET["de"]);
            $deleteSql = "DELETE FROM prdtd WHERE ProductId = '$productIdToDelete'";

            if ($conn->query($deleteSql) === TRUE) {
                echo "Deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        } else {
            // echo "Product ID not provided for deletion.";
        }
        echo "<br>";
        // Show data from the database
        $show = "SELECT * FROM prdtd";
        $result = $conn->query($show);

        if ($result->num_rows > 0) {
        ?>
            <h2>Product Data:</h2>
            <table border='1'>
                <tr>
                    <th>product no. </th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Code</th>
                    <th>In Stock</th>
                    <th>Discount</th>
                    <th>Sizes</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th colspan="2">Actions</th>
                </tr>
                <?php
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row["ProductId"] . "</td>";
                    echo "<td>" . $row["ProductName"] . "</td>";
                    echo "<td>Rs." . $row["ProductPrice"] . "</td>";
                    echo "<td>" . $row["ProductCode"] . "</td>";
                    echo "<td>" . ($row["ProductInstock"] == 1 ? "Yes" : "No") . "</td>";
                    echo "<td>" . $row["ProductDiscount"] . "%</td>";
                    echo "<td>" . $row["ProductSizes"] . "</td>";
                    echo "<td class='detaild'>" . $row["ProductDetails"] . "</td>";
                    echo "<td><img src='Images/" . $row["ProductProfile"] . "'  width='50' height='50'></td>";
                    echo "<td>";
                    echo "<a href='showProductList.php?de=" . $row['ProductId'] . "'>Delete</a>";
                    echo "<a href='Addproduct.php?update=" . $row['ProductId'] . "'>Update</a>";
                    echo "</td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </table>
        <?php
        } else {
        ?>
            <div style="background-color: #e5e5e5; padding: 20px; font-size: 18px; color: #333; text-align: center">
                No products Added yet.
            </div>
        <?php
        }
        $conn->close();
        ?>
    </section>
    <?php
    require  'footer.php';
    ?>
    <!-- btn for scroll from bottom to top -->
    <div id="scrollToTopButton" class="scrollup" onclick="scrollToTop()"><i class="bi bi-arrow-up"></i></div>
</body>
<!-- page script -->
<script src="./JS Files/menu.js"></script>

<!-- Bootstrap Script -->
<!-- <script src="./bootstrap-5.3.2-dist/js/bootstrap.min.js"></script> -->
<script src="./bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

</html>