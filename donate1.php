<?php
session_start();
require 'db_connect.php'; // Include database connection

$donationType = isset($_GET['type']) ? $_GET['type'] : '';

if (!$donationType) {
    header("Location: index.php");
    exit();
}

$donationDetails = [
    "Students" => [
        "title" => "Support Students",
        "description" => "Your donation helps provide essential education tools and materials for students in need."
    ],
    "Pastors" => [
        "title" => "Support Retired Pastors",
        "description" => "Help retired pastors live with dignity by contributing to their pension and daily needs."
    ],
    "HospitalVisit" => [
        "title" => "Hospital Visit Support",
        "description" => "Your help provides nutritious meals, basic necessities, and comfort for hospital patients."
    ],
    "Insurance" => [
        "title" => "Medical Insurance Support",
        "description" => "Your donation helps cover annual insurance fees, emergency expenses, and basic healthcare."
    ]
];

if (!array_key_exists($donationType, $donationDetails)) {
    header("Location: index.php");
    exit();
}

$title = $donationDetails[$donationType]['title'];
$description = $donationDetails[$donationType]['description'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - <?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center"><?php echo $title; ?></h2>
        <p class="text-center"><?php echo $description; ?></p>
        <hr>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="process_donation.php" method="POST">
                    <input type="hidden" name="donationType" value="<?php echo htmlspecialchars($donationType); ?>">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="whatsapp" class="form-label">WhatsApp Number</label>
                        <input type="tel" class="form-control" id="whatsapp" name="whatsapp" required>
                    </div>

                    <div class="mb-3">
                        <label for="donationDetails" class="form-label">What would you like to donate?</label>
                        <textarea class="form-control" id="donationDetails" name="donationDetails" rows="3"
                            required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit Donation</button>
                </form>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>

</body>

</html>