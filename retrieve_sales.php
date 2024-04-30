<?php
// Database credentials
$servername = "localhost";
$username = "kipruto";
$password = "@Akc15064";
$database = "project";

// Create connection
$conn = new mysqli("localhost", "kipruto", "@Akc15064", "project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve sales data
$sql = "SELECT * FROM sales";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["daily_sales"] . "</td>";
        echo "<td>" . $row["total_remaining"] . "</td>";
        echo "<td>" . $row["sale_date"] . "</td>";
        echo "<td>" . $row["sale_time"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>

