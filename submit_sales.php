<?php
// Database credentials
$servername = "localhost";
$username = "chumba";
$password = "Landscape45";
$database = "project";

// Create connection
$conn = new mysqli("localhost", "chumba", "Landscape45 ", "project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$daily_sales = isset($_POST['daily_sales']) ?? '';
$total_remaining = $_POST['total_remaining'] ?? '';
$sale_date = $_POST['sale_date'] ?? '';
$sale_time = $_POST['sale_time'] ?? '';

// SQL query to insert sales data into the database
$sql = "INSERT INTO sales (daily_sales, total_remaining, sale_date, sale_time)
VALUES ('$daily_sales', '$total_remaining', '$sale_date', '$sale_time')";

if ($conn->query($sql) === TRUE) {
    echo "Sales data submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();


