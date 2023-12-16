<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // If logged in, redirect to the home page or another appropriate page
    $redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'Home.php';

    // Clear the stored redirect URL
    unset($_SESSION['redirect_url']);

    // Redirect the user back to the original page or a default page
    header("Location: $redirect_url");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="./CSS Files/login.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="images/logo.jpg" alt="logo">
                <h2>Cyci</h2>
            </div>
            <div class="btns">
                <button class="login-btn">LOG IN</button>
                <button class="Signup-btn">SIGN UP</button>
            </div>
        </nav>
    </header>

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            <div class="form-details">
                <h2>Welcome Back</h2>
                <p>Please log in using your personal information to stay connected with us.</p>
            </div>
            <div class="form-content">
                <h2>LOGIN</h2>
                <form method="post" id="formlogin">
                    <div class="input-field">
                        <input type="email" id="email" name="email" required>
                        <label id="mv1">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" required><br>
                        <label>Password</label>
                    </div>
                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                    <!-- <button type="submit">Log In</button> -->
                    <!-- <input type="submit" class="btn" name="login" value="LogIn" onclick="login()"> -->
                    <button type="button" id="login-btnm" class="btn" onclick="login()">LogIn</button>
                </form>
                <div id="error-message" style="color: red; text-align: center;"></div>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Signup</a>
                </div>
            </div>
        </div>
        <div class="form-box forgot">
            <div class="form-details">
            </div>
            <div class="form-content">
                <h2>Don't Worry</h2>
                <form action="#">
                    <p>Enter your registered email and get your password.</p>
                    <div class="input-field">
                        <input type="email" id="email1" name="email" required>
                        <label>Email</label>
                    </div>
                    <!-- <button type="submit">Search</button> -->
                    <!-- <input type="submit" name="submit" class="btn" value="Search"> -->
                    <button type="button" id="forgot-btnm" class="btn" onclick="forgot()">Submit</button>
                </form>
                <div id="verifyAndShow" style="color: red; text-align: center;"></div>
                <div class="bottom-link">
                    <a href="#" id="logIn">Login</a><span>|</span>
                    <a href="#" id="signUp">Signup</a>
                </div>
            </div>
        </div>
        <div class="form-box signup">
            <div class="form-details">
                <h2>Create Account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>
            </div>
            <div class="form-content">
                <h2>SIGNUP</h2>
                <form method="post" action="userRegister.php">
                    <div class="input-field">
                        <input type="email" id="email2" name="email" required>
                        <label id="mv">Enter your email</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="username2" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password1" name="password" required><br>
                        <label>Create password</label>
                    </div>
                    <div class="policy-text">
                        <input type="checkbox" id="policy" name="policy" required>
                        <label for="policy">
                            I agree the
                            <a href="#" class="option">Terms & Conditions</a>
                        </label>
                    </div>
                    <!-- <button type="submit">Sign Up</button> -->
                    <!-- <input type="submit" name="submit" class="btn" value="SignUp"> -->
                    <button type="button" id="register-btnm" class="btn" onclick="register()">SignUp</button>
                </form>
                <div id="verify" style="color: red; text-align: center;"></div>
                <div class="bottom-link">
                    Already have an account?
                    <a href="#" id="login-link">Login</a>
                </div>
            </div>
        </div>
    </div>

    <div class="scrmsg">
        <?php
        // Check if the message is set
        if (isset($_SESSION['msg'])) {
            echo "<h1>" . $_SESSION['msg'] . "</h1>";
            // Unset or clear the message to avoid displaying it on subsequent visits
            unset($_SESSION['msg']);
        } else {
            echo "<h1>Welcome to Cyci</h1>";
        }
        ?>
    </div>
</body>

<script src="./JS Files/login.js" defer></script>
<script src="./JS Files/registerLoginAndForgotCall.js" defer></script>

</html>