<?php
$servername = "localhost";  // Change if hosted elsewhere
$username = "root";         // MySQL username
$password = "";             // MySQL password (leave empty if using XAMPP)
$database = "tff"; // Replace with your actual database name

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create connection
try {
    $conn = new mysqli($servername, $username, $password, $database, 3306);

    $conn->set_charset("utf8mb4"); // Set charset for security
} catch (Exception $e) {
    error_log($e->getMessage()); // Log error
    die("Database connection error. Please try again later."); // Generic message
}
?>