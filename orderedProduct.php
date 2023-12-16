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
    <title>Order Product List</title>

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
        if (isset($_GET['delo'])) {

            // Use $_GET instead of $_POST since you are expecting data from the URL parameters
            $productIdToDelete = mysqli_real_escape_string($conn, $_GET["delo"]);
            $deleteSql = "DELETE FROM orderproductt WHERE ProductId = '$productIdToDelete'";

            if ($conn->query($deleteSql) === TRUE) {
                // echo "Deleted successfully";
                echo '<script>window.location.href = window.location.href="orderedProduct.php";</script>';
            } else {
                echo "Error deleting: " . $conn->error;
            }
        } else {
            // echo "Product ID not provided for deletion.";
        }
        // echo "<br>";
        // Show data from the database
        $sqlFirstTable = "SELECT ProductId FROM orderproductt";
        $resultFirstTable = $conn->query($sqlFirstTable);

        if ($resultFirstTable->num_rows > 0) {
        ?>
            <h2>Product Data:</h2>
            <table border='1'>
                <tr>
                    <th>product no. </th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Code</th>
                    <th>Discount</th>
                    <th>Sizes</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                <?php
                $i = 1;
                $j = $resultFirstTable->num_rows;
                while ($rowFirstTable = $resultFirstTable->fetch_assoc()) {
                    // Loop through each id in the first table
                    $ProductId = $rowFirstTable["ProductId"];

                    // Query the second table for additional information based on the id
                    $sqlSecondTable = "SELECT * FROM prdtd WHERE ProductId = $ProductId";
                    $resultSecondTable = $conn->query($sqlSecondTable);

                    if ($resultSecondTable->num_rows > 0) {
                        $j--;
                        // Display information from the second table
                        while ($row2 = $resultSecondTable->fetch_assoc()) {

                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row2["ProductId"] . "</td>";
                            echo "<td>" . $row2["ProductName"] . "</td>";
                            echo "<td>Rs." . $row2["ProductPrice"] . "</td>";
                            echo "<td>" . $row2["ProductCode"] . "</td>";
                            echo "<td>" . $row2["ProductDiscount"] . "%</td>";
                            echo "<td>" . $row2["ProductSizes"] . "</td>";
                            echo "<td>" . $row2["ProductDetails"] . "</td>";
                            echo "<td><img src='Images/" . $row2["ProductProfile"] . "'  width='50' height='50'></td>";
                            echo "<td>";
                            echo "<a href='orderedProduct.php?delo=" . $row2['ProductId'] . "'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                            $i++;
                        }
                    } else {

                        if ($j == $resultFirstTable->num_rows) {

                            // echo "No information found for ID: $id<br>";
                ?>
                            <div style="background-color: #e5e5e5; padding: 20px; font-size: 18px; color: #333; text-align: center">
                                <?php echo "You have $resultFirstTable->num_rows ordered items but not information found of product.
                           <br>We will be add soon." ?>
                            </div>
                <?php
                        }
                    }
                }
                if ($j > 0) {
                    echo "<tr>
                    <td colspan='10' style='text-align: center;'>
                    There is $j items more for order but we have not add information yet, So we will be add soon.
                    </td>
                    </tr>";
                }
                ?>
            </table>
        <?php
        } else {
        ?>
            <div style="background-color: #e5e5e5; padding: 20px; font-size: 18px; color: #333; text-align: center">
                Ordered products List will be appear here.
            </div>
        <?php
            echo '<br>';
            echo '<br>';
            echo '<br>';
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