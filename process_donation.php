<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'db_connection.php';

$successMessage = '';
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donationType = $_POST['donationType'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $donationDetails = $_POST['donationDetails'];

    if (!empty($donationType) && !empty($email) && !empty($whatsapp) && !empty($donationDetails)) {
        $sql = "INSERT INTO donations (donation_type, email, whatsapp, donation_details, created_at, status) 
                VALUES (?, ?, ?, ?, NOW(), 'Pending')";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssss", $donationType, $email, $whatsapp, $donationDetails);

            if ($stmt->execute()) {
                header("Location: index.php");
                exit;
            } else {
                $errorMessage = "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $errorMessage = "Error preparing query: " . $conn->error;
        }
    } else {
        $errorMessage = "Please fill in all the fields.";
    }
}

$conn->close();
?>