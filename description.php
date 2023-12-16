<?php
session_start();
// if (!isset($_SESSION['username'])) {
//     header("Location: Home.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description</title>

    <!-- Fav icon -->
    <link rel="Fav icon" href="./Images/favicon-3.png" type="image/x-icon">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="./CSS Files/bhmf.css">
    <link rel="stylesheet" href="./CSS Files/productcards.css">
    <link rel="stylesheet" href="./CSS Files/dc.css">

    <!-- jquery file -->
    <script src="./jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
    require  'header.php';
    ?>
    <!-- main work -->
    <section class="main">
        <!-- description paragraphs -->
        <div class="descriptionpara">
            <h3>Description</h3>
            <p class="p1">
                Welcome to our premier online destination for all your cycling needs! At our cycling emporium, we're
                passionate about
                helping riders of all levels find the perfect bike to match their unique preferences and
                aspirations. Whether you're a
                dedicated road warrior seeking the ultimate speed machine, an intrepid mountain biker craving rugged
                terrain adventures,
                or a casual cyclist looking for a reliable and stylish commuter, you've come to the right place. Our
                extensive
                collection features a wide array of top-quality bicycles designed by industry-leading brands. From
                cutting-edge carbon
                fiber frames for elite performance to durable aluminum options for everyday use, we have it all.
            </p><br>
            <p class="p2">
                We understand that choosing the right bicycle is a personal decision, which is why we provide
                comprehensive product
                descriptions and expert reviews for each model in our inventory. Our user-friendly interface makes
                it easy to compare
                specifications, read customer feedback, and make informed choices. Beyond bikes, we offer an
                impressive selection of
                cycling accessories, including helmets, gloves, pedals, and more, to enhance your safety and comfort
                on the road or
                trail. You'll also find a stylish range of cycling apparel, from jerseys to shorts, designed to keep
                you comfortable and
                looking sharp during your rides. Whether you're a seasoned cyclist or just starting, we've got you
                covered.
            </p><br>
            <p class="p3">
                But our website is more than just a marketplace; it's a hub for a vibrant and supportive cycling
                community. Connect with
                fellow enthusiasts through our forums, share your ride experiences, seek advice on maintenance and
                repairs, or simply
                revel in the joy of pedaling. We believe that cycling is more than a hobby; it's a lifestyle, a
                means of staying active,
                and a way to explore the world around us. Join us on this journey, discover new horizons, and
                experience the thrill of
                the open road or the tranquility of scenic trails. Start your cycling adventure today with our cycle
                selling website,
                where passion meets performance, and every ride is an opportunity for new discoveries.
            </p>
        </div>
        <!-- cards -->
        <div class="cards">
            <h3>See related...</h3>
            <div class="card">
                <div class="content">
                    <div class="front">
                        <div class="image">
                            <img src="./Images/img1.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cyclocross Bike</h5>
                        </div>
                    </div>
                    <div class="back">
                        <p>
                            It primarily designed to be raced around a dirt trail that consists of
                            different obstacles and
                            blockages placed at various intervals and purpose behind those barriers is that the
                            rider has to dismount mid-cycling.
                        </p>
                        <button type="button" class="btn btn-primary" onclick="window.location = 'Product.php'">Go to products</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="front">
                        <div class="image">
                            <img src="./Images/img5.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mountain bicycle (MTB)</h5>
                        </div>
                    </div>
                    <div class="back">
                        <p>
                            Mountain bicycle are the most widely used bicycle type. It was designed for traversing
                            forests and rougher or mountainous
                            terrains. Its construction differs from a typical bicycle in many ways.
                        </p>
                        <button type="button" class="btn btn-primary" onclick="window.location = 'Product.php'">Go to products</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="front">
                        <div class="image">
                            <img src="./Images/img8.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Road Bike</h5>
                        </div>
                    </div>
                    <div class="back">
                        <p>Frames are usually lightweight aluminum or carbon, with aggressive geometry that places
                            the rider’s legs far forward
                            almost horizontally over the pedals.
                        </p>
                        <button type="button" class="btn btn-primary" onclick="window.location = 'Product.php'">Go to products</button>
                    </div>
                </div>
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
<script src="./JS Files/menu.js"></script>
<script src="./JS Files/eventCall.js"></script>
<script src="./JS Files/showmsg.js"> </script>

<!-- Bootstrap Script -->
<!-- <script src="./bootstrap-5.3.2-dist/js/bootstrap.min.js"></script> -->
<script src="./bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

</html>