<?php
session_start();

// Store the current page URL before destroying the session
$redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'Home.php';
unset($_SESSION['redirect_url']);

// Unset and destroy the session
session_unset();
session_destroy();

// Redirect back to the original page
header("Location: $redirect_url");
exit();
