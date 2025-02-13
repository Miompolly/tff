<?php
// Start session for message display
session_start();

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    $donation_id = $_GET['id'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'tff');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to delete the donation record
    $sql = "DELETE FROM donations WHERE id = ?";

    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $donation_id); // 'i' means the parameter is an integer

    // Execute the statement and check if the deletion was successful
    if ($stmt->execute()) {
        // Set session message and type for success
        $_SESSION['message'] = 'Donation record deleted successfully.';
        $_SESSION['msg_type'] = 'success';
    } else {
        // Set session message and type for failure
        $_SESSION['message'] = 'Error deleting the donation record.';
        $_SESSION['msg_type'] = 'danger';
    }

    // Close connection
    $stmt->close();
    $conn->close();

    // Redirect back to the donation list page (or any other page)
    header("Location: donate.php"); // Adjust the URL to your page
    exit();
} else {
    // If no ID is passed in the URL, redirect to donation list page
    header("Location: donate.php"); // Adjust the URL to your page
    exit();
}
?>
