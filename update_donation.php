<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['donation_id']) && !empty($_POST['status'])) {
    $donation_id = intval($_POST['donation_id']); // Ensure it's an integer
    $status = trim($_POST['status']); // Remove unwanted spaces

    // Only allow valid statuses
    $allowed_statuses = ['Pending', 'Approved', 'Rejected'];
    if (!in_array($status, $allowed_statuses)) {
        $_SESSION['message'] = 'Invalid status selected.';
        $_SESSION['msg_type'] = 'danger';
        header("Location: donate.php");
        exit();
    }

    // Connect to database
    $conn = new mysqli('localhost', 'root', '', 'tff');
    if ($conn->connect_error) {
        $_SESSION['message'] = 'Database connection failed.';
        $_SESSION['msg_type'] = 'danger';
        header("Location: donate.php");
        exit();
    }

    // Update status
    $sql = "UPDATE donations SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $status, $donation_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = 'Donation status updated successfully.';
        $_SESSION['msg_type'] = 'success';
    } else {
        $_SESSION['message'] = 'Error updating donation status.';
        $_SESSION['msg_type'] = 'danger';
    }

    // Close connection and redirect
    $stmt->close();
    $conn->close();
    header("Location: donate.php");
    exit();
} else {
    $_SESSION['message'] = 'Invalid request.';
    $_SESSION['msg_type'] = 'danger';
    header("Location: donate.php");
    exit();
}

?>
