<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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
    <link rel="stylesheet" href="./CSS Files/contactbox.css">
</head>

<body>
    <?php
    require  'header.php';
    ?>
    <!-- main work -->
    <section class="main df">
        <!-- Contact box -->
        <div class="box df" id="box">
            <div class="left-side df">
                <h3>Let's talk about everything!</h3>
                <p>Tell us your opinion and what you are looking according to you pashion and what you want from us?
                </p>
                <div class="img">
                    <img src="./Images/Contact-us-img-removebg-preview.png" alt="Image">
                </div>
            </div>
            <div class="right-side df">
                <div class="right-side-fs">
                    <h3>Let's talk about everything!</h3>
                </div>

                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'contactForm');

                // Check if the form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Check if the submit button is set
                    if (isset($_POST['Submit'])) {
                        // Collect and sanitize form data
                        $name = mysqli_real_escape_string($conn, $_POST['name']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $gender = isset($_POST['flexRadioDefault']) ? mysqli_real_escape_string($conn, $_POST['flexRadioDefault']) : '';
                        $city = isset($_POST['city']) ? mysqli_real_escape_string($conn, $_POST['city']) : '';
                        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
                        $message = mysqli_real_escape_string($conn, $_POST['message']);

                        // Store data in the database
                        $query = "INSERT INTO contact VALUES ('$name', '$email', '$gender', '$city', '$subject', '$message')";

                        // Perform the query
                        $row = mysqli_query($conn, $query);
                        if ($row) {
                            echo '<script>window.location.href = window.location.href="Contact.php";</script>';
                        } else {
                            echo 'Error in submit form.';
                        }
                    }
                }
                ?>
                <form method="POST" action="Contact.php" class="contactForm df" id="contactForm" name="contactForm">
                    <div class="row">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name" autocomplete="off" required>
                    </div>
                    <div class="row">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" required>
                    </div>
                    <div class="row df bb">
                        <h5>Gender:</h5>
                        <div class="form-check">
                            <input class="form-check-input border-dark-subtle" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input border-dark-subtle" type="radio" name="flexRadioDefault" id="flexRadioDefault2" required value="Female">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="row df justify-content-between">
                        <h5>City:</h5>
                        <select class="form-select form-select-lg w-set" aria-label="Large select example" name="city" required>
                            <option selected="" hidden>Select</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Multan">Multan</option>
                            <option value="Peshawar">Peshawar</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Quetta">Quetta</option>
                        </select>
                    </div>
                    <div class="row">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" autocomplete="off" maxlength="80" required>
                    </div>
                    <div class="row">
                        <textarea class="form-control" name="message" id="message" placeholder="Write your message" required></textarea>
                    </div>
                    <div class="row df">
                        <input type="submit" value="Submit" class="btn" name="Submit">
                    </div>
                </form>
                <?php
                echo '<script>document.getElementById("contactForm").reset();</script>';
                ?>
            </div>
        </div>
        <!-- Info box -->
        <div class="Info df">
            <div class="Infofl">
                <h1>Main Head Office</h1>
                <div class="ol">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, dolorem?</p>
                </div>
            </div>
            <h2>Find Your Nearest Cyci Store</h2>
            <div class="location">
                <!-- Add map -->
                <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.6467465855953!2d-122.08373938553735!3d37.3860519798425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbbd7b1b1e8cb%3A0xb15c186b7b4969c9!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1567035601454!5m2!1sen!2sus" allowfullscreen></iframe>
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