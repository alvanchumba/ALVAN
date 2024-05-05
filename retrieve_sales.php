<?php
// Database credentials
$servername = "localhost";
$username = "alvan";
$password = "@Akc15064";
$database = "project";

// Create connection
$conn = new mysqli("localhost","alvan","@Akc15064","project" );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve sales data
$sql = "SELECT *FROM sales ";

// Execute the query
$result = $conn->query($sql);

// Initialize an empty array to store the fetched data
$salesData = [];

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Fetch each row and add it to the salesData array
    while ($row = $result->fetch_assoc()) {
        $salesData[] = $row;
    }
}

// Close the database connection
$conn->close();

// Output the sales data as JSON
echo json_encode($salesData);



