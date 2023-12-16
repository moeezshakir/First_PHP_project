 <?php
    session_start();
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>

     <!-- Fav icon -->
     <link rel="Fav icon" href="./Images/favicon-3.png" type="image/x-icon">
     <!-- Bootstrap icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
     <!-- Bootstrap CSS Files -->
     <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">

     <!-- Page CSS -->
     <link rel="stylesheet" href="./CSS Files/bhmf.css">
     <link rel="stylesheet" href="./CSS Files/homeMain.css">
     <link rel="stylesheet" href="./CSS Files/productcards.css">
     <link rel="stylesheet" href="./CSS Files/homeProductscard.css">

     <!-- jquery file -->
     <script src="./jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
 </head>

 <body>
     <?php
        require  'header.php';
        ?>
     <!-- main work -->
     <section class="main">
         <!-- Carousel(Slider) -->
         <div id="carouselExampleCaptions" class="carousel slide w-set m-auto">
             <div class="carousel-indicators">
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
             </div>
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <img src="./Images/img5.jpg" class="d-block w-100 hi-set" alt="..." width="800" height="540">

                     <div class="carousel-caption d-none d-md-block">
                         <h5 class="text-info">Mountain bicycle (MTB)</h5>
                         <p>It was designed for traversing
                             forests and rougher or mountainous.</p>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img src="./Images/img7.jpg" class="d-block w-100 hi-set" alt="..." width="800" height="540">
                     <div class="carousel-caption d-none d-md-block">
                         <h5 class="text-info">Cyclocross Bike</h5>
                         <p>Designed to be raced around a dirt trail that consists of
                             different obstacles.</p>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img src="./Images/img8.jpg" class="d-block w-100 hi-set" alt="..." width="800" height="540">
                     <div class="carousel-caption d-none d-md-block">
                         <h5 class="text-info">Road Bike</h5>
                         <p>Frames are usually lightweight aluminum or carbon, with aggressive geometry.</p>
                     </div>
                 </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
         <!-- featureDetails Cards -->
         <?php
            // Establish a database connection
            $conn = mysqli_connect('localhost', 'root', '', 'Productd');

            if ($conn) {
                // Show featureDetails data from the database
            ?>
             <!-- featureDetails Cards -->
             <div class="featureDetails">
                 <h2>Featured Categories</h2>
                 <div class="cards">

                     <?Php
                        $show = "SELECT * FROM prdtd";
                        $result = $conn->query($show);
                        $chk = 0;
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                                if ($row['ProductCategories'] == 'FeaturedCategories' && $row['ProductInstock'] == 1) {
                                    $chk++;

                        ?>
                                 <div class="card">
                                     <div class="image">
                                         <img src='Images/<?php echo $row["ProductProfile"]; ?>' height='190'>
                                     </div>
                                     <div class="card-body">
                                         <h5 class="card-title"><?php echo strtoupper($row['ProductName']); ?></h5>
                                     </div>
                                     <div class="buttons d-flex">
                                         <button type="button" class="btn btn-info seeMore m-2">Description</button>
                                         <?php
                                            if (isset($_SESSION["username"])) {
                                                echo '<button type="button" class="btn btn-info seeDetail m-2">See Detail</button>';
                                            }
                                            ?>
                                     </div>
                                     <div class="para">
                                         <p><?php echo $row['ProductDetails'];  ?></p>
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
                                             <button type="button" class="btn btn-info order-button w-100" data-product-id="<?php echo $row['ProductId']; ?>">Order</button>
                                         </div>
                                     </div>
                                 </div>
                         <?php
                                }
                            }
                        }
                        if ($chk == 0) {
                            ?>
                         <div style="background-color: #e5e5e5; padding: 20px; font-size: 18px; color: #333; text-align: center">
                             No products Added yet.
                         </div>
                     <?php
                        }
                        ?>
                 </div>
             </div>

             <!-- Sales -->
             <div class="salebox d-flex">
                 <div class="row r1 col-md-5 d-flex">
                     <div class="blr p-3">
                         <h3 class="text-info">New Model 6A.4C</h3>
                         <p>Get Upto 30% Off</p>
                         <button type="button" class="btn btn-primary" onclick="showalert()">Shop Now</button>
                     </div>
                 </div>
                 <div class="row r2 col-md-5 d-flex">
                     <div class="blr p-3">
                         <h3 class="text-info">Parts Available</h3>
                         <p>Get Upto 40% Off</p>
                         <button type="button" class="btn btn-primary" onclick="showalert()">Shop Now</button>
                     </div>
                 </div>
             </div>
             <!-- Free shipping tag -->
             <div class="col-md-12 freeShipping">
                 <h2 class="text-info">Free Shipping</h2>
                 <p>Enjoy <strong class="text-info">FREE SHIPPING</strong> within Lahore on purchases over $120</p>
             </div>

             <!-- PopularProduct Cards -->
             <div class="PopularProduct">
                 <h2>Popular Products</h2>
                 <div class="cards">
                     <?php
                        $show = "SELECT * FROM prdtd";
                        $result = $conn->query($show);
                        $chk1 = 0;
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                                if ($row['ProductCategories'] == 'PopularProduct' && $row["ProductInstock"] == 1) {
                                    $chk1++;
                        ?>
                                 <div class="card">
                                     <div class="content">
                                         <div class="front">
                                             <div class="image">
                                                 <img src='Images/<?php echo $row["ProductProfile"]; ?>' height='190'>
                                             </div>
                                             <div class="card-body">
                                                 <h5 class="card-title"><?php echo strtoupper($row['ProductName']); ?></h5>
                                             </div>
                                         </div>
                                         <div class="back">
                                             <p><?php echo $row['ProductDetails']; ?></p>
                                             <?php
                                                if (isset($_SESSION["username"])) {
                                                    echo "<a href='showCardDetail.php?showdetail=" . $row['ProductId'] . "' class='btn btn-primary'>See Detail</a>";
                                                }
                                                ?>
                                             <button type="button" class="btn btn-primary m-2"><a href="Description.php">Description</a></button>
                                         </div>
                                     </div>
                                 </div>
                         <?php
                                }
                            }
                        }
                        if ($chk1 == 0) {
                            ?>
                         <div style="background-color: #e5e5e5; padding: 20px; font-size: 18px; color: #333; text-align: center">
                             No products Added yet.
                         </div>
                 <?php
                        }
                    }
                    // Close the database connection
                    $conn->close();
                    ?>
                 </div>
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
 <script>
     function showalert() {
         alert('Not available now!');
     }
 </script>
 <script src="./JS Files/menu.js"></script>
 <script src="./JS Files/eventCall.js"></script>
 <script src="./JS Files/showmsg.js"> </script>
 <script src="./JS Files/addintoOrder.js"></script>

 <!-- Bootstrap Script -->
 <!-- <script src="./bootstrap-5.3.2-dist/js/bootstrap.min.js"></script> -->
 <script src="./bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

 </html>