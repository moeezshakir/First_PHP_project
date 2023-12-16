<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- Fav icon -->
    <link rel="Fav icon" href="./Images/favicon-3.png" type="image/x-icon">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="./CSS Files/bhmf.css">
    <link rel="stylesheet" href="./CSS Files/about.css">

    <!-- jquery file -->
    <script src="./jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
    require  'header.php';
    ?>
    <!-- main work -->
    <section class="main">
        <!-- About Info -->
        <div class="About-box">
            <h2>Welcome to Cyci – Your Destination for Quality Bicycles!</h2>
            <!-- Info para-->
            <div class="para">
                <h3>Our Story:</h3>
                <p>At Your Company Name, we're more than just a bike shop; we're passionate about cycling and
                    committed
                    to
                    helping you find the perfect bike for your needs. Founded in [Year] in the heart of [Location],
                    our
                    journey began with a love for two wheels and a desire to share that passion with others.</p>
            </div>
            <!-- Info para-->
            <div class="para">
                <h3>Our Team:</h3>
                <p>Meet the dedicated individuals who make Your Company Name a trusted name in the cycling
                    community. From experienced riders to industry experts, our team is here to provide you with
                    expert
                    guidance and unparalleled service.</p>
            </div>
            <!-- Info para-->
            <div class="para">
                <h3>Our Values:</h3>
                <p>Integrity, quality, and customer satisfaction are at the core of everything we do. We take pride
                    in
                    offering a curated selection of top-notch bikes and accessories, carefully chosen to enhance
                    your riding experience.</p>
            </div>
            <!-- cards -->
            <div class="cards bd-example">
                <div class="card" style="width: 19rem;">
                    <img src="./Images/asimg1.jpeg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="180">
                    <div class="card-body">
                        <h5 class="card-title">Parts</h5>
                        <p class="card-text">With a diverse range of components available, enthusiasts can customize
                            and upgrade their bikes to enhance performance,
                            comfort, and aesthetics. From essential items like tires, chains, and brakes to
                            specialized components such as
                            derailleurs, handlebars, and saddles, the market offers a plethora of choices.</p>
                    </div>
                </div>
                <div class="card" style="width: 19rem;">
                    <img src="./Images/asimg2.jpeg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="180">
                    <div class="card-body">
                        <h5 class="card-title">Sale</h5>
                        <p class="card-text">The sale of bicycles has witnessed a significant surge in recent years,
                            driven by various factors. With a growing
                            emphasis on eco-friendly and healthy transportation alternatives, bicycles have become a
                            popular choice for commuters
                            and fitness enthusiasts alike</p>
                    </div>
                </div>
                <div class="card" style="width: 19rem;">
                    <img src="./Images/asimg3.png" alt="" class="bd-placeholder-img card-img-top" width="100%" height="180">
                    <div class="card-body">
                        <h5 class="card-title">Half Price</h5>
                        <p class="card-text">opportunity to score high-quality bikes at significantly reduced
                            prices, making cycling more accessible to a wider range
                            of people. Whether you're a casual rider looking for an affordable way to enjoy the
                            outdoors or a dedicated cyclist
                            seeking an upgrade, half-price bicycle offers can provide a budget-friendly solution.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Info para-->
            <div class="para">
                <h3>Get in Touch:</h3>
                <p>Ready to start your cycling journey with us? Visit our store at [Address], call us at
                    [Phone
                    Number],
                    or
                    drop us an email at <a href="mailto:[Email Address]">[Email Address]</a>. We're here to
                    answer
                    your
                    questions and help you find the bike of your dreams.</p>
            </div>
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