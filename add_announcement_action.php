<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = isset($_POST['title']) ? trim($_POST['title']) : NULL;
    $content = isset($_POST['content']) ? trim($_POST['content']) : NULL;
    $image = NULL; // Default NULL if no image is uploaded

    // Database Connection
    $conn = new mysqli('localhost', 'root', '', 'tff');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle Image Upload (Optional)
    if (!empty($_FILES['image']['tmp_name'])) {
        $image = file_get_contents($_FILES['image']['tmp_name']); // Read file as binary
    }

    // Use Prepared Statement to Prevent SQL Injection
    $stmt = $conn->prepare("INSERT INTO announcements (title, content, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $content, $image);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Announcement added successfully.";
        $_SESSION['msg_type'] = 'success';
    } else {
        $_SESSION['message'] = "Error adding announcement: " . $stmt->error;
        $_SESSION['msg_type'] = 'danger';
    }

    // Close Resources
    $stmt->close();
    $conn->close();

    header('Location: announcement.php');
    exit();
}
?>
