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
    <title>Card Details</title>

    <!-- Fav icon -->
    <link rel="Fav icon" href="./Images/favicon-3.png" type="image/x-icon">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="./CSS Files/bhmf.css">
    <!-- <link rel="stylesheet" href="./CSS Files/productcards.css"> -->
    <link rel="stylesheet" href="./CSS Files/showcarddetail.css">


    <!-- jquery file -->
    <script src="./jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
    require  'header.php';
    ?>
    <!-- main work -->
    <section class="main">
        <h2 class="p-2 mb-0 w-100">See Product Detail</h2>
        <div class="cards">


            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'Productd');

            $showdetail = isset($_GET['showdetail']) ? $_GET['showdetail'] : '';

            if (!empty($showdetail)) {
                $show = "SELECT * FROM prdtd WHERE ProductId = '$showdetail'";
                $result = $conn->query($show);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
            ?>
                        <div class="card">
                            <div class="fs">
                                <div class="image">
                                    <img src='Images/<?php echo $row["ProductProfile"]; ?>' height='190'>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo strtoupper($row['ProductName']); ?></h5>
                                    <div class="para">
                                        <h5>Description</h5>
                                        <p><?php echo $row['ProductDetails']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="para2">
                                <div class="itemDetail">
                                    <h5>Details</h5>
                                    <div class="row r1">
                                        <strong>Product Id: </strong>
                                        <span><?php echo $row['ProductId']; ?></span>
                                    </div>
                                    <div class="row r2">
                                        <strong>Product Name:</strong>
                                        <span><?php echo $row['ProductName']; ?></span>
                                    </div>
                                    <div class="row r3">
                                        <strong>Product Price:</strong>
                                        <span>Rs.<?php echo $row['ProductPrice']; ?></span>
                                    </div>
                                    <div class="row r4">
                                        <strong>Product Code:</strong>
                                        <span><?php echo $row['ProductCode']; ?></span>
                                    </div>
                                    <div class="row r6">
                                        <strong>Product Discount:</strong>
                                        <span><?php echo $row['ProductDiscount']; ?>%</span>
                                    </div>
                                    <div class="row r7">
                                        <strong>Product Sizes:</strong>
                                        <span><?php echo $row['ProductSizes']; ?></span>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary order-button" data-product-id="<?php echo $row['ProductId']; ?>">Order</button>
                            </div>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </section>
    <?php
    include 'msg.php';
    require  'footer.php';
    ?>
    <!-- btn for scroll from bottom to top -->
    <div id="scrollToTopButton" class="scrollup" onclick="scrollToTop()"><i class="bi bi-arrow-up"></i></div>
</body>
<!-- page script -->
<script src="./JS Files/showmsg.js"> </script>
<script src="./JS Files/menu.js"></script>
<script src="./JS Files/addintoOrder.js"></script>
<!-- <script src="./JS Files/openDetails.js"></script> -->
<!-- Bootstrap Script -->
<!-- <script src="./bootstrap-5.3.2-dist/js/bootstrap.min.js"></script> -->
<script src="./bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

</html>