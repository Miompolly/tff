<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn = new mysqli('localhost', 'root', '', 'tff');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO announcements (title, content) VALUES ('$title', '$content')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Announcement added successfully.";
        $_SESSION['msg_type'] = 'success';
    } else {
        $_SESSION['message'] = "Error adding announcement: " . $conn->error;
        $_SESSION['msg_type'] = 'danger';
    }

    $conn->close();
    header('Location: announcement.php');
}
?>
