<?php
$servername = "localhost";
$username = "root";
$password = "Yawhey@123";
$database = "tff";

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    // Display an error message if the connection fails
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4 (for handling Unicode characters)
$conn->set_charset("utf8mb4");

// Don't close the connection here, because you want to use it later
?>
// this the connectionsof db