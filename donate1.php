<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - Support a Cause</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
    /* Flexbox to make both sections equal height */
    .row {
        display: flex;
    }

    .col-md-6 {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .form-section,
    .description-section {
        flex: 1;
    }

    .description-section {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .form-section {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <!-- Title Section -->
        <div class="text-center mb-5">
            <h2>Support a Cause</h2>
            <p>Your donation helps support various causes that make a difference in the community.</p>
            <hr>
        </div>

        <!-- Row with two Divs: One for the Form, the other for Description and Image -->
        <div class="row">
            <!-- Description Section with Image -->
            <div class="col-md-6 description-section mb-4">
                <h4>Make a Difference Today</h4>
                <p>Your contribution to any of these causes will have a lasting impact. Please fill out the form below
                    to make your donation.</p>
                <img src="img/Screenshot from 2025-03-10 17-08-30.png" alt="Support a Cause" class="img-fluid">
            </div>

            <!-- Donation Form Section -->
            <div class="col-md-6 form-section">
                <form action="process_donation.php" method="POST">
                    <div class="mb-3">
                        <label for="donationTypeSelect" class="form-label">Select Donation Type</label>
                        <select class="form-select" id="donationTypeSelect" name="donationType" required>
                            <option value="Students" selected>Support Students</option>
                            <option value="Pastors">Support Retired Pastors</option>
                            <option value="HospitalVisit">Hospital Visit Support</option>
                            <option value="Insurance">Medical Insurance Support</option>
                        </select>
                    </div>

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