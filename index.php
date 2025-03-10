<?php 
session_start(); 

if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TFIM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <section id="home">
        <div class="container-fluid position-relative nav-bar p-0">
            <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
                <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/Logo Png.png" alt="Logo" class="img-fluid" style="height: 60px; width: auto;">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                            <a href="#home" class="nav-item nav-link active">Home</a>
                            <a href="#prayer-time" class="nav-item nav-link">Prayer Time</a>
                            <a href="#donate" class="nav-item nav-link">Donate</a>
                            <a href="#service" class="nav-item nav-link">Services</a>
                            <a href="#about-us" class="nav-item nav-link">About Us</a>
                            <a href="#contact-us" class="nav-item nav-link">Contact Us</a>
                            <a href="#announcement" class="nav-item nav-link">Announcement</a>
                        </div>

                        <!-- Authentication Buttons -->
                        <div class="d-flex align-items-center">
                            <?php if (isset($_SESSION['email'])) : ?>
                            <a href="logout.php" class="btn btn-danger mx-2">Logout</a>
                            <?php else : ?>
                            <a href="login.php" class="btn btn-outline-primary mx-2">Login</a>
                            <a href="signup.php" class="btn btn-primary mx-2">Signup</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <!-- Navbar End -->



    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First Carousel Item -->
                <div class="carousel-item active">
                    <img class="w-100" src="img/Pixel fotoro.jpeg" alt="Prayer Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Unity in Prayer</h4>
                            <h1 class="display-3 text-white mb-md-4">Find Peace Through Worship</h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2" data-bs-toggle="modal"
                                data-bs-target="#signupModal">Join Us</a>
                        </div>
                    </div>
                </div>
                <!-- Second Carousel Item -->
                <div class="carousel-item">
                    <img class="w-100" src="img/Pixel -drf.jpeg" alt="Community Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Worship Together</h4>
                            <h1 class="display-3 text-white mb-md-4">Strengthen Your Faith in Community</h1>
                            <a href="#service" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Third Carousel Item -->
                <div class="carousel-item">
                    <img class="w-100" src="img/Pixel-fot.jpeg" alt="Spiritual Growth Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Grow Spiritually</h4>
                            <h1 class="display-3 text-white mb-md-4">Deepen Your Connection with God</h1>
                            <a href="events.html" class="btn btn-primary py-md-3 px-md-5 mt-2">Explore Events</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <a class="carousel-control-prev" href="#header-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#header-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>


    <!-- Carousel End -->


    <!-- Contact Info Start -->

    <section id="contact-us">
        <div class="container-fluid contact-info mt-5 mb-4">
            <div class="container" style="padding: 0 30px;">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0"
                        style="height: 100px;">
                        <div class="d-inline-flex">
                            <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-white font-weight-medium">Our Location</h5>
                                <p class="m-0 text-white">Rwanda/Kigali, Kicukiro, Kanombe</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0"
                        style="height: 100px;">
                        <div class="d-inline-flex text-left">
                            <i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-white font-weight-medium">Email Us</h5>
                                <p class="m-0 text-white">tabithafamilyfellowship@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0"
                        style="height: 100px;">
                        <div class="d-inline-flex text-left">
                            <i class="fa fa-2x fa-phone-alt text-white m-0 mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-white font-weight-medium">Call Us</h5>
                                <p class="m-0 text-white">+(250)783654685/784646208</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Info End -->

    <section id="about-us">


        <!-- About Start -->

        <div class="container-fluid py-5">
            <div class="container pt-0 pt-lg-4">
                <h1 class="mb-4">We Are a Community of Faith and Worship</h1>
                <hr>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img class="img-fluid" src="img/Pixel -drf (1).jpeg" alt="Prayer and Worship">
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">

                        <h5 class="font-weight-medium font-italic mb-4">A Vision of Spiritual Growth and Support for the
                            Elderly and the Less Fortunate</h5>
                        <p class="mb-2">This initiative, led by Missionary Bishop Gilbert Muvandimwe, aims to support
                            the elderly and vulnerable individuals who are in need of assistance, providing them with
                            spiritual growth and care. We seek to help those who are facing hardships and offer a hand
                            of support to those who need it the most.</p>

                        <h5 class="font-weight-medium font-italic mb-4 mt-4">Our Values (Indangaciro):</h5>
                        <ul>
                            <li>Respect and mutual respect</li>
                            <li>Love and compassion</li>
                            <li>Sacrifice</li>
                            <li>Zeal</li>
                            <li>Sensibility</li>
                        </ul>

                        <h5 class="font-weight-medium font-italic mb-4 mt-4">Our Vision (Ibyerekezo):</h5>
                        <p>We aim to be companions and guides for orphans and vulnerable people, offering them support
                            and rest during their later years. We rejoice in their journey knowing that God acknowledges
                            their work.</p>

                        <h5 class="font-weight-medium font-italic mb-4 mt-4">Our Mission (Misiyo):</h5>
                        <ul>
                            <li>Upholding the principles of the missionary calling: improving the lives of groups
                                through support and restoring hope for the present and the future.</li>
                            <li>Helping orphans without caregivers</li>
                            <li>Providing assistance for the elderly who need support in their later years</li>
                            <li>Preaching the gospel to bring people of all nations to Christ</li>
                        </ul>

                        <h5 class="font-weight-medium font-italic mb-4 mt-4">Our Goal (Intego):</h5>
                        <p>"It became known all over Joppa, and many believed in the Lord." (Acts 9:42)</p>
                        <p>We strive to do good works (providing food, clothing, school supplies, household items,
                            medical coverage, livestock, etc.) to encourage faith in Jesus Christ.</p>

                        <div class="row">
                            <div class="col-sm-6 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary mr-2"></i>
                                    <p class="text-secondary font-weight-medium m-0">Empowering Vulnerable Communities
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary mr-2"></i>
                                    <p class="text-secondary font-weight-medium m-0">Spiritual Support for the Elderly
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary mr-2"></i>
                                    <p class="text-secondary font-weight-medium m-0">Strengthening the Faith of the Less
                                        Fortunate</p>
                                </div>
                            </div>
                            <div class="col-sm-6 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary mr-2"></i>
                                    <p class="text-secondary font-weight-medium m-0">A Collaborative Effort for Positive
                                        Change</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About End -->


    <!-- Services Start -->
    <!-- Services Start -->
    <section id="service">
        <div class="container-fluid pt-5 pb-3">
            <div class="container">

                <h1 class="display-4 text-center mb-5">Our Services</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-3 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-3x fa-praying-hands text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">International Missions</h4>
                            <p>Empowering communities worldwide through faith and service.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-3x fa-church text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">Sunday Services</h4>
                            <p>Experience powerful worship and teaching in our Sunday services.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-3x fa-bible text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">Bible Study</h4>
                            <p>Deepen your understanding of God's word with our weekly Bible study groups.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-3x fa-pray text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">Prayer Meetings</h4>
                            <p>Gather with fellow believers for heartfelt prayer and intercession.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-3x fa-meditation text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">Silent Meditation</h4>
                            <p>Find inner peace through quiet meditation and reflection.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-3x fa-hands-helping text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">Strength Health Services</h4>
                            <p>Support through mutual insurance contributions for health needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-3x fa-graduation-cap text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">Education Program</h4>
                            <p>Providing school fees and materials to orphans for brighter futures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->

    <section id="donate" class="container-fluid py-5">
        <div class="container">
            <h1 class="display-4 text-center mb-5">Donate</h1>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-4">
                    <!-- Donation for Students -->
                    <div class="donation-card p-4 border rounded shadow h-100">
                        <h3 class="mb-4">Support Students</h3>
                        <p>Your donations provide students with essential education tools and materials.</p>
                        <p><strong>Ways you can help:</strong></p>
                        <ul>
                            <li>School supplies and tools</li>
                            <li>Uniforms and clothes</li>
                            <li>Support low-income students</li>
                        </ul>
                        <div class="text-center mt-4">
                            <a href="donate1.php?type=Students" class="btn btn-primary btn-lg">Donate</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 mb-4">
                    <!-- Donation for Pastors -->
                    <div class="donation-card p-4 border rounded shadow h-100">
                        <h3 class="mb-4">Retired Pastors</h3>
                        <p>Help ensure pastors can live with dignity in their later years.</p>
                        <p><strong>Your impact:</strong></p>
                        <ul>
                            <li>Retirement security</li>
                            <li>Family support</li>
                            <li>Peace of mind</li>
                        </ul>
                        <div class="text-center mt-4">
                            <a href="donate1.php?type=Pastors" class="btn btn-success btn-lg">Donate</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 mb-4">
                    <!-- Hospital Visitation Support -->
                    <div class="donation-card p-4 border rounded shadow h-100">
                        <h3 class="mb-4">Hospital Visit Support</h3>
                        <p>Help provide comfort to those in hospital.</p>
                        <p><strong>Your help provides:</strong></p>
                        <ul>
                            <li>Nutritious meals</li>
                            <li>Basic necessities</li>
                            <li>Care packages</li>
                        </ul>
                        <div class="text-center mt-4">
                            <a href="donate1.php?type=HospitalVisit" class="btn btn-info btn-lg">Donate</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 mb-4">
                    <!-- Medical Insurance Support -->
                    <div class="donation-card p-4 border rounded shadow h-100">
                        <h3 class="mb-4">Medical Insurance</h3>
                        <p>Help provide healthcare coverage for those in need.</p>
                        <p><strong>Coverage includes:</strong></p>
                        <ul>
                            <li>Annual insurance fees</li>
                            <li>Emergency coverage</li>
                            <li>Basic healthcare</li>
                        </ul>
                        <div class="text-center mt-4">
                            <a href="donate1.php?type=Insurance" class="btn btn-warning btn-lg">Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Donation Section End -->

    <!-- Donation Section End -->


    <!-- Prayer Time Section Start -->
    <section id="prayer-time" class="container-fluid py-5">
        <div class="container">
            <h1 class="display-4 text-center mb-5">Prayer Times (Monday - Sunday)</h1>
            <hr>
            <div class="row align-items-center">
                <!-- Prayer Image Section -->
                <div class="col-md-6">
                    <div class="prayer-image"
                        style="background-image: url('img/t1 (1).jpeg'); background-size: cover; height: 400px;">
                        <!-- Image can be replaced with a <img> tag instead of background-image if you prefer -->
                        <h2 class="text-white text-center d-flex align-items-center justify-content-center"
                            style="height: 100%;">Prayer Time</h2>
                    </div>
                </div>

                <!-- Prayer Time Table Section -->
                <div class="col-md-6">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Monday</td>
                                <td>18:30 - 20:00</td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>18:30 - 20:00</td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>18:30 - 20:00</td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>18:30 - 20:00</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>18:30 - 20:00</td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>18:30 - 20:00</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>18:30 - 20:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Prayer Time Section End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">

            <h1 class="display-4 text-center mb-5">Meet the Members of TFF</h1>
            <hr>

            <div class="row">
                <!-- Testimonial 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-item text-center">
                        <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/t1 (1).jpeg"
                            style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;"
                            alt="Bishop Gilbert Muvandimwe">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">International Missionary Bishop MUVANDIMWE Gilbert</h5>
                            <p class="text-muted font-italic">Visionary</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-item text-center">
                        <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/muho.jpeg"
                            style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;"
                            alt="Jeannette Umuhoza">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">International Missionary Reverend Pastor Janet UMUHOZA
                            </h5>
                            <p class="text-muted font-italic">Managing Director</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-item text-center">
                        <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/t2.jpeg"
                            style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;"
                            alt="Aimee Mukeshimana">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">Bishop Dr Joseph MBANZA RUZIMA</h5>
                            <p>Director in charge of missionary studies and evangelism</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
 require_once 'db_connection.php';


$query = "SELECT id, title, content, image, DATE_FORMAT(date, '%M %d, %Y') as formatted_date 
FROM announcements 
ORDER BY date DESC 
LIMIT 3";
$result = mysqli_query($conn, $query);
?>

    <section id="announcement" class="container-fluid py-5">
        <div class="container">
            <h1 class="display-4 text-center mb-5">Latest Announcements</h1>
            <hr>
            <div class="row">
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="col-md-4 mb-4">
                    <div class="announcement-item">
                        <?php if (!empty($row['image'])) : ?>
                        <img class="position-relative bg-white shadow mx-auto"
                            src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>"
                            style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;"
                            alt="<?php echo htmlspecialchars($row['title']); ?>">
                        <?php else : ?>
                        <img class="position-relative border-8 bg-white shadow mx-auto" src="img/default.png"
                            style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;"
                            alt="Default Image">
                        <?php endif; ?>
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">
                                <?php echo htmlspecialchars($row['title']); ?>
                            </h5>
                            <p><?php echo htmlspecialchars($row['content']); ?></p>
                            <p class="text-muted font-italic"><?php echo $row['formatted_date']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <?php
// Close the database connection
mysqli_close($conn);
?>


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5" id="aboutus">
        <div class="row pt-5">
            <!-- About Us -->
            <div class="col-lg-4 col-md-6 mb-5">
                <image src="img/Logo Png.png" alt="TFF Logo" class="img-fluid" style="height: 80px; width: auto;">
                    <p>Join us in heartfelt worship and prayer, seeking guidance and strength through faith and
                        devotion.</p>
                    <div class="d-flex mt-4">
                        <!-- Twitter Icon -->
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px;" href="https://twitter.com" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <!-- Facebook Icon -->
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px;"
                            href="https://www.facebook.com/profile.php?id=61572547690141" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <!-- Instagram Icon -->
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px;" href="https://instagram.com" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <!-- TikTok Icon -->
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px;" href="https://vm.tiktok.com/ZMB1mcbXb/" target="_blank">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <!-- YouTube Icon -->
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px;" href="https://www.youtube.com/@Tabithafamilyfelllowship"
                            target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                            style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
            </div>
            <!-- Contact Information -->
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-white mb-4">Get In Touch</h4>
                <p>Reach out for spiritual guidance or to join our prayer sessions.</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Rwanda/Kigali, Kicukiro, Kanombe</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+(250)783654685/784646208</p>
                <p><i class="fa fa-envelope mr-2"></i>tabithafamilyfellowship@gmail.com</p>
            </div>
            <!-- Quick Links -->
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Worship Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Prayer Requests</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">TABITHA FAMILY FELLOWSHIP</a>. All Rights Reserved.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed by <a class="text-white font-weight-medium" href="https://github.com/miompolly">bca code store</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Bootstrap CSS (Add inside <head>) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (Add before </body>) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".donate-btn").forEach(button => {
            button.addEventListener("click", function() {
                document.getElementById("donationType").value = this.getAttribute("data-type");
            });
        });


    });
    </script>
    <!-- Bootstrap JS from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>


</body>

</html>