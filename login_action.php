<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start(); 
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT user_id, FullName, email, password, role FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['FullName'] = $user['FullName'];
            $_SESSION['role'] = $user['role'];

            // Redirect based on role
            if ($user['role'] == 'admin') {
                header("Location: dashboard.php"); // Redirect admins to dashboard
                exit();
            } else {
                header("Location: index.php"); // Stay on index.php for normal users
                exit();
            }
        } else {
            echo "<script>alert('Invalid password!'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('No account found with that email!'); window.location.href='index.php';</script>";
    }
}
?>
