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
     <title>Add Product</title>

     <!-- Fav icon -->
     <link rel="Fav icon" href="./Images/favicon-3.png" type="image/x-icon">
     <!-- Bootstrap icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
     <!-- Bootstrap CSS Files -->
     <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">

     <!-- Page CSS -->
     <link rel="stylesheet" href="./CSS Files/bhmf.css">
     <!-- jquery file -->
     <script src="./jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
     <style>
         form {
             max-width: 550px;
             margin: 20px auto;
             padding: 8px;
             background: #FAFAFA;
             box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
             border-radius: 10px;
             border: 5px solid #305A72;
         }

         h2 {
             margin: 5px 0;
         }

         label {
             display: block;
             margin-bottom: 4px;
         }

         input,
         textarea,
         select {
             width: 100%;
             padding: 5px;
             margin-bottom: 4px;
             box-sizing: border-box;
             border: 1px solid #B0CFE0;
             outline: none;
         }

         input:hover,
         textarea:hover,
         select:hover {
             box-shadow: 0 0 6px #B0CFE0;
             border: 1px solid #B0CFE0;
         }

         textarea {
             height: 150px;
             resize: none;
         }

         select {
             width: 100%;
             padding: 8px;
             margin-bottom: 15px;
             box-sizing: border-box;
         }

         input:focus,
         textarea:focus,
         select:focus {
             border: 2px solid #305A72;
             border-radius: 3px;
         }

         input[type="submit"] {
             box-shadow: inset 0px 1px 0px 0px #3985B1;
             background-color: #216288;
             /* border: 1px solid #17445E; */
             color: #ffffff;
         }

         input[type="submit"]:hover {
             /* background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%); */
             background-color: #28739E;
         }

         /* input[type="submit"]:hover {
            background: linear-gradient(180deg, #333438, #1b1e25);
            color: white;
        } */
     </style>
 </head>

 <body>
     <?php
        require  'header.php';
        ?>
     <?php
        require 'PrdAdd&del.php';
        ?>
     <!-- main work -->
     <section class="main">
         <form method="post" action="Addproduct.php<?php echo isset($_GET['update']) ? '?update=' . $_GET['update'] : ''; ?>" enctype="multipart/form-data">
             <h2>Fill Form</h2>
             <label for="productId">Product Id:</label>
             <input type="text" id="productId" name="productId" required value="<?php echo $row['ProductId']; ?>"><br>

             <label for="productName">Product Name:</label>
             <input type="text" id="productName" name="productName" required value="<?php echo $row["ProductName"]; ?>"><br>

             <label for="productPrice">Product Price:</label>
             <input type="number" step="0.01" id="productPrice" name="productPrice" required value="<?php echo $row["ProductPrice"]; ?>"><br>

             <label for="productCode">Product Code:</label>
             <input type="text" id="productCode" name="productCode" required value="<?php echo $row["ProductCode"]; ?>"><br>

             <label for="productInstock">In Stock (Y/N):</label>
             <input type="text" id="productInstock" name="productInstock" maxlength="1" required value="<?php
                                                                                                        if ($row["ProductInstock"] == 1) {
                                                                                                            echo "Y";
                                                                                                        } else if ($row["ProductInstock"] == 0) {
                                                                                                            echo "N";
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        } ?>"><br>

             <label for="productDiscount">Product Discount:</label>
             <input type="number" step="0.01" id="productDiscount" name="productDiscount" required value="<?php echo $row["ProductDiscount"]; ?>"><br>

             <label for="productSizes">Product Sizes:</label>
             <input type="text" id="productSizes" name="productSizes" required value="<?php echo $row["ProductSizes"]; ?>"><br>

             <label for="productDetails">Product Details:</label>
             <textarea id="productDetails" name="productDetails" rows="4" required><?php echo $row["ProductDetails"]; ?></textarea><br>

             <label for="productProfile">Product Image:</label>
             <div class="image">
                 <img src='Images/<?php echo $row["ProductProfile"]; ?>' height='190'>
             </div>
             <input type="file" id="productProfile" name="productProfile" accept="image/*" required><br>

             <label for="productProfile">Product Categories:</label>
             <select name="categories" value="<?php echo $row["ProductCategories"]; ?>" required>
                 <option value="" hidden></option>
                 <option value="FeaturedCategories">Featured Categories</option>
                 <option value="PopularProduct">Popular Product</option>
             </select>

             <input type="submit" name="submit" value="Submit">
         </form>
         <script>
             // Check if the form is in update mode by looking for the 'update' parameter in the URL
             <?php
                if (isset($_POST["submit"])) {
                ?>
                 var isUpdateMode = <?php echo isset($_GET['update']) ? 'true' : 'false'; ?>;
                 // Function to reset form fields
                 function resetForm() {
                     document.getElementById("productId").value = '';
                     document.getElementById("productName").value = '';
                     document.getElementById("productPrice").value = '';
                     document.getElementById("productCode").value = '';
                     document.getElementById("productInstock").value = '';
                     document.getElementById("productDiscount").value = '';
                     document.getElementById("productSizes").value = '';
                     document.getElementById("productDetails").value = '';
                     document.getElementById("productProfile").value = '';
                 }

                 // Reset the form if in update mode
                 if (isUpdateMode) {
                     window.onload = resetForm;
                 }
             <?php
                }
                ?>
             // 
         </script>
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