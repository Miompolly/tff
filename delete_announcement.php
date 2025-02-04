<?php
// Start session to show success/error messages
session_start();

// Check if ID is provided
if (isset($_GET['id'])) {
    $announcement_id = $_GET['id'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'tff');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement to delete the announcement
    $sql = "DELETE FROM announcements WHERE announcement_id = ?";

    // Prepare statement and bind parameter
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $announcement_id); // "i" means the type is integer

        // Execute the statement
        if ($stmt->execute()) {
            $_SESSION['message'] = "Announcement deleted successfully.";
            $_SESSION['msg_type'] = "success";
        } else {
            $_SESSION['message'] = "Error deleting announcement.";
            $_SESSION['msg_type'] = "danger";
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $conn->close();
}

// Redirect back to the announcements list page
header("Location: announcement.php"); // Redirect to the page showing the list of announcements
exit;
?>
