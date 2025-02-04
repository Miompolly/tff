<?php
session_start(); // Start the session

// Handle the form data (This is a basic example)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form inputs
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Raw password
    $role = $_POST['role'];

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'tff');

    // Check connection
    if ($conn->connect_error) {
        $_SESSION['message'] = "Connection failed: " . $conn->connect_error;
        header("Location: users.php"); // Redirect to the page where you want to display the message
        exit();
    }

    // SQL query to insert the new user
    $sql = "INSERT INTO users (FullName, email, password, role) VALUES ('$fullName', '$email', '$hashedPassword', '$role')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "New user added successfully.";
    } else {
        $_SESSION['message'] = "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();

    // Redirect to the page where you want to display the message
    header("Location: users.php");
    exit();
}
?>
