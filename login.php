<?php
session_start();

// Hardcoded username and password for demonstration purposes
$valid_username = "admin";
$valid_password = "admin";

// Check if username and password are submitted via POST
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the submitted credentials match the valid ones
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header("Location: sales.html"); // Redirect to sales.html upon successful login
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?>

