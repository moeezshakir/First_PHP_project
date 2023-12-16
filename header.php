        <?php
        // session_start();
        $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
        ?>
        <!-- Headers -->
        <!-- Header 1 -> "Logo + social platform links + logout button"-->
        <section class="header header1">
            <div class="Logo">
                <?php
                if (isset($_SESSION['username'])) {
                    echo strtoupper($_SESSION['username']) . ' welcome to';
                }
                ?>
                <a href="Home.php" class="hover-color">Cyci</a>
            </div>

            <div class="d-flex sciplgb">

                <div class="socialContacts">
                    <ul>
                        <li><a href="#" class="hover-color"><span class="socialPlatform-icon"><i class="bi bi-facebook"></i></span></a>
                        </li>
                        <li><a href="#" class="hover-color"><span class="socialPlatform-icon"><i class="bi bi-youtube"></i></span></a>
                        </li>
                        <li><a href="#" class="hover-color"><span class="socialPlatform-icon"><i class="bi bi-twitter"></i></span></a>
                        </li>
                        <li><a href="#" class="hover-color"><span class="socialPlatform-icon"><i class="bi bi-instagram"></i></span></a>
                        </li>
                    </ul>
                </div>
                <?php
                if (isset($_SESSION["username"])) {
                ?>
                    <div class="logoutbtn"><a href="logout.php" class="hover-color">Logout</a></div>
                <?php
                } else {
                }
                ?>
            </div>

        </section>
        <?php
        // Get the current page filename without the extension
        $current_page = basename($_SERVER['PHP_SELF'], '.php');
        ?>

        <!--  Header 1 -> menuitems + login button-->
        <section class="header header2 navbar navbar-expand-lg">
            <div class="currentpage" id="showCurrentOpenPage">
                <a href="<?php echo $current_page; ?>.php" class="hover-color active"><?php echo strtoupper($current_page); ?></a>

            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list"></span>
            </button>
            <nav class="collapse navbar-collapse menuopen" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="Home.php" class="hover-color <?php echo ($current_page == 'Home' || $current_page == 'home') ? 'active' : ''; ?>">Home</a>
                    </li>
                    <?php
                    if (isset($_SESSION["username"])) {
                    ?>
                        <li class="nav-item dropdown <?php echo ($current_page == 'Product' || $current_page == 'Addproduct' || $current_page == 'showProductList' || $current_page == 'orderedProduct') ? 'active' : 'non-active'; ?>">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Product Dropdown
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <?php
                        }
                            ?>
                            <li class="nav-item"><a href="Product.php" class="dropdown-item hover-color <?php echo ($current_page == 'Product') ? 'active' : ''; ?>">Product</a></li>
                            <?php
                            if (isset($_SESSION["username"])) {
                            ?>
                                <li class="nav-item"><a href="Addproduct.php" class="dropdown-item hover-color <?php echo ($current_page == 'Addproduct') ? 'active' : ''; ?>">Add Product</a></li>
                                <li class="nav-item"><a href="showProductList.php" class="dropdown-item hover-color <?php echo ($current_page == 'showProductList') ? 'active' : ''; ?>">Product List</a></li>
                                <li class="nav-item"><a href="orderedProduct.php" class="dropdown-item hover-color <?php echo ($current_page == 'orderedProduct') ? 'active' : ''; ?>">Ordered List</a></li>
                            </ul>
                        </li>
                    <?php
                            }
                    ?>
                    <?php
                    if (isset($_SESSION["username"])) {
                    ?>
                        <li class="nav-item dropdown <?php echo ($current_page == 'About' || $current_page == 'Services' || $current_page == 'Description') ? 'active' : 'non-active'; ?>">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <?php
                        }
                            ?>
                            <li class="nav-item"><a href="About.php" class="dropdown-item hover-color <?php echo ($current_page == 'About') ? 'active' : ''; ?>">About</a></li>
                            <?php
                            if (isset($_SESSION["username"])) {
                            ?>
                                <li class="nav-item"><a href="Services.php" class="dropdown-item hover-color <?php echo ($current_page == 'Services') ? 'active' : ''; ?>">Services</a></li>

                            <?php
                            }
                            ?>
                            <li class="nav-item"><a href="Description.php" class="dropdown-item hover-color <?php echo ($current_page == 'Description') ? 'active' : ''; ?>">Description</a></li>
                            <?php
                            if (isset($_SESSION["username"])) {
                            ?>
                            </ul>
                        </li>
                    <?php
                            }
                    ?>
                    <li class="nav-item">
                        <a href="Contact.php" class="hover-color <?php echo ($current_page == 'Contact') ? 'active' : ''; ?>">Contact</a>
                    </li>
                    <?php
                    if (!isset($_SESSION["username"])) {
                    ?>
                        <li class="nav-item">
                            <a href="Login.php" class="hover-color <?php echo ($current_page == 'Login') ? 'active' : ''; ?>">Login</a>
                            to explore more
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </section>