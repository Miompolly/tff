<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: index.php"); // Redirect if already logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tabitha Family Fellowship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 900px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .left-box {
        padding: 40px;
    }

    .right-box {
        background-color: #f4f4f4;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-control {
        padding-left: 2.5rem;
    }

    .input-group-text {
        position: absolute;
        padding-left: 5px;
    }

    .form-control::placeholder {
        color: #adb5bd;
        padding-left: 5px;
    }

    .btn-google {
        background-color: #fff;
        border: 1px solid #ddd;
    }

    .btn-google img {
        width: 20px;
        margin-right: 10px;
    }

    .brand-logo {
        max-width: 100px;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <div class="container row">
        <div class="col-md-6 left-box">
            <div class="text-center">

                <h2 class="mb-4">Welcome Back</h2>
            </div>
            <?php
            if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }
            ?>
            <form action="login_action.php" method="POST">
                <div class="mb-3 position-relative">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3 position-relative">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-dark w-100">Login</button>
                <p class="mt-3 text-center">
                    <a href="forgot_password.php">Forgot Password?</a>
                </p>
                <p class="mt-3 text-center">Don't have an account? <a href="signup.php">Register</a></p>
            </form>
        </div>
        <div class="col-md-6 right-box text-center">
            <h3>Tabitha Family Fellowship</h3>
            <p>Connecting believers through faith and worship.</p>
            <ul class="list-unstyled text-start mx-auto" style="max-width: 300px;">
                <li><i class="bi bi-check-circle"></i> Join a loving community of believers</li>
                <li><i class="bi bi-check-circle"></i> Engage in uplifting prayer and worship</li>
                <li><i class="bi bi-check-circle"></i> Stay updated with church events</li>
                <li><i class="bi bi-check-circle"></i> Grow spiritually with us</li>
            </ul>
            <a href="signup.php" class="btn btn-dark">Register Now</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>