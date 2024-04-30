<?php
// Start the session (if not already started)
session_start();

// Database credentials
$servername = "kipruto";
$username = "root";
$password = "@Akc15064";
$database = "project";

// Create connection

$conn = new mysqli("localhost", "kipruto", "@Akc15064", "project");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the form submission
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to retrieve user data based on username and password
$sql = "SELECT * FROM signup WHERE Username = '$username' AND Password = '$password'";

// Execute the query
$result = $conn->query($sql);

// Check if a row was returned
if ($result->num_rows > 0) {
    // Set session variables or any other actions you need to perform upon successful login
    $_SESSION['username'] = $username; // Example of setting a session variable
    
    // Redirect to the home page or any other desired location
    header("Location: sales.html");
    exit(); // Important to exit after redirection to prevent further execution
} else {
    // Redirect back to the login page with an error message
    header("Location: login.html?error=1");
    exit();
}

// Close the database connection
$conn->close();
?>



