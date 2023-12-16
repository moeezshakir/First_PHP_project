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
    <title>Services</title>

    <!-- Fav icon -->
    <link rel="Fav icon" href="./Images/favicon-3.png" type="image/x-icon">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="./CSS Files/bhmf.css">
    <link rel="stylesheet" href="./CSS Files/services.css">

    <!-- jquery file -->
    <script src="./jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
    require  'header.php';
    ?>
    <!-- main work -->
    <section class="main">
        <!-- Service divs as needed -->
        <div class="service">
            <h2>Cycle Sales</h2>
            <p>We offer a wide range of high-quality bicycles for sale, including mountain bikes, road bikes, and
                city bikes. Explore our selection and find the perfect bike for your needs.</p>
        </div>
        <div class="service">
            <h2>Cycle Rentals</h2>
            <p>Need a bike for a day or a weekend adventure? Rent one of our well-maintained bicycles and explore
                the local trails and paths. We have affordable rental options available.</p>
        </div>
        <div class="service">
            <h2>Maintenance and Repairs</h2>
            <p>Our experienced technicians can handle all your bike maintenance and repair needs. From simple
                tune-ups to complex repairs, we've got you covered.</p>
        </div>
        <div class="service">
            <h2>Customization Services</h2>
            <p>Personalize your cycle with our customization services. Choose from a variety of components and
                accessories to create a unique riding experience.</p>
        </div>
        <div class="service">
            <h2>Accessories and Parts</h2>
            <p>Explore our selection of high-quality bike accessories and replacement parts. From helmets to tires,
                we have what you need to enhance your ride.</p>
        </div>
        <div class="service">
            <h2>Service Packages</h2>
            <p>Save on maintenance and repairs with our service packages. Choose a package that suits your needs
                and
                enjoy additional benefits as our valued customer.</p>
        </div>
    </section>
    <?php
    require  'footer.php';
    ?>
    <!-- btn for scroll from bottom to top -->
    <div id="scrollToTopButton" class="scrollup" onclick="scrollToTop()"><i class="bi bi-arrow-up"></i></div>
</body>
<!-- page script -->
<script src="./JS Files/menu.js"></script>
<script src="./JS Files/eventCall.js"></script>

<!-- Bootstrap Script -->
<!-- <script src="./bootstrap-5.3.2-dist/js/bootstrap.min.js"></script> -->
<script src="./bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

</html>