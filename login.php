<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "alvan"; // Replace with your database username
$password = "@Akc15064"; // Replace with your database password
$database = "project"; // Replace with your database name

// Create connection
$conn = new mysqli("localhost","alvan","@Akc15064", "project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if username and password are submitted via POST
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to fetch user with matching credentials
    $stmt = $conn->prepare("SELECT * FROM signup WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user with matching credentials exists
    if ($result->num_rows == 1) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header("Location: sales.html"); // Redirect to sales.html upon successful login
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}



