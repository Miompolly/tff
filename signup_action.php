<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encrypt password
    $role = 'user'; // Default role

    // Check if email already exists
    $check_email = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $check_email->store_result();

    if ($check_email->num_rows > 0) {
        echo "<script>alert('Email already exists!'); window.history.back();</script>";
        exit();
    }

    // Insert user into the database
    $stmt = $conn->prepare("INSERT INTO users (FullName, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullname, $email, $password, $role);

    if ($stmt->execute()) {
        echo "<script>alert('Signup successful! Please log in.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error signing up.'); window.history.back();</script>";
    }
}
?>
