<?php
// Start the session to store messages
session_start();

// Connect to the database
require_once 'db_connection.php';
// Check if 'id' parameter is provided in the URL
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Prepare the SQL delete query
    $sql = "DELETE FROM users WHERE user_id = ?";
    
    // Prepare statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("i", $user_id);
        
        // Execute the query
        if ($stmt->execute()) {
            // Set success message
            $_SESSION['message'] = "User deleted successfully!";
            $_SESSION['msg_type'] = "success"; // You can use this for styling

            // Redirect to the user listing page or show a success message
            header("Location: users.php"); // Redirects to the page with the user list
            exit;
        } else {
            // Set error message
            $_SESSION['message'] = "Error: Could not delete the user.";
            $_SESSION['msg_type'] = "error"; // You can use this for styling
        }

        // Close statement
        $stmt->close();
    } else {
        $_SESSION['message'] = "Error preparing query: " . $conn->error;
        $_SESSION['msg_type'] = "error"; // You can use this for styling
    }
}

// Close connection
$conn->close();
?>