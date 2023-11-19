<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['IsLoggedIn']) && $_SESSION['IsLoggedIn']) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login form
    header("Location: loginForm.html");
    exit(); // Always exit after header to prevent further execution
}
