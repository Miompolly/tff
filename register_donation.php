<?php
// Database connection
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "tff";  

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donationType = $conn->real_escape_string($_POST['donationType']);
    $email = $conn->real_escape_string($_POST['email']);
    $whatsapp = $conn->real_escape_string($_POST['whatsapp']);
    $donationDetails = $conn->real_escape_string($_POST['donationDetails']);

    // Insert into database
    $sql = "INSERT INTO donations (donation_type, email, whatsapp, donation_details) 
            VALUES ('$donationType', '$email', '$whatsapp', '$donationDetails')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Donation submitted successfully!');
                window.location.href = 'index.php'; // Redirect to home page
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.history.back();
              </script>";
    }

    $conn->close();
} else {
    echo "<script>
            alert('Invalid Request!');
            window.location.href = 'index.php';
          </script>";
}
?>
