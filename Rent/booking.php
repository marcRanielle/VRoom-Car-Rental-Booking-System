<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['car_name'] = $_SESSION['car_name'] ?? $_GET['car'] ?? 'N/A';
    $_SESSION['car_price'] = $_SESSION['car_price'] ?? $_GET['price'] ?? 0;

    $_SESSION['start_date'] = $_POST['startDateTime'];
    $_SESSION['end_date'] = $_POST['endDateTime'];
    $_SESSION['pickup_location'] = $_POST['pickupLocation'];
    $_SESSION['return_location'] = $_POST['returnLocation'];

    $extras = isset($_POST['extras']) ? $_POST['extras'] : [];
    $_SESSION['extras'] = $extras;

    $extra_fees = 0;
    foreach ($extras as $extra) {
        if ($extra == 'driver') $extra_fees += 500;
        if ($extra == 'childSeat') $extra_fees += 200;
        if ($extra == 'insurance') $extra_fees += 300;
    }

    $car_price = $_SESSION['car_price'];
    $_SESSION['total_price'] = $car_price + $extra_fees;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['full_name'] = $_POST['fullName'];
    $_SESSION['contact_number'] = $_POST['contactNumber'];
    $_SESSION['email_address'] = $_POST['emailAddress'];

    header("Location: review.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VRoom Car Rental: Booking Details</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="rent.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <img src="../Assets/img/logov.png" alt="" id="navlogo">
            <a class="navbar-brand" href="#" id="brand">VRoom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="../Homepage/homepage.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Deals</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Order/service.php">Rent</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Homepage/homepage.php#about">About us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="booking-card">
        <h3 id="pagetitle">Booking Details</h3>
        <form action="booking.php" enctype="multipart/form-data" method="POST">

            <div class="reminder">
                    <p>The minimum rental time is <strong>1 day (24 hours)</strong>.</li>
                    <p>If the start and end time is less than 24 hours, it will be <strong>charged as 1 full day</strong>.</p>
                    <p>If you exceed the time limit for a 1-day rental, <strong>you will still be charged for 1 day</strong>.</p>
                    <p>If you need additional time, please <strong>contact the owner</strong> to discuss possible <strong>overtime fees</strong>.</p>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="startDateTime" class="form-label">Start Date & Time<b>*</b></label>
                    <input type="datetime-local" class="form-control" id="startDateTime" name="startDateTime" required>

                </div>
                <div class="col-md-6">
                    <label for="endDateTime" class="form-label">End Date & Time<b>*</b></label>
                    <input type="datetime-local" class="form-control" id="endDateTime" name="endDateTime" required>
                </div>
            </div>

            <div class="reminder">
                <p>The pickup and return location is only accepted inside Pangasinan. After confirmation, we will call you for the exact location.</p>
            </div>

            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="pickupLocation" class="form-label">Pickup Location<b>*</b></label>
                    <input type="text" class="form-control" id="pickupLocation" placeholder="Enter pickup location" name="pickupLocation" required>
                </div>
                <div class="col-md-6">
                    <label for="returnLocation" class="form-label">Return Location<b>*</b></label>
                    <input type="text" class="form-control" id="returnLocation" placeholder="Enter return location" name="returnLocation" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Add Extras (Additional Fee)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="extras[]" value="driver" id="driver">
                    <label class="form-check-label" for="driver">Driver (+₱500/day)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="extras[]" value="childSeat" id="childSeat">
                    <label class="form-check-label" for="childSeat">Child Seat (+₱200)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="extras[]" value="insurance" id="insurance">
                    <label class="form-check-label" for="insurance">Insurance (+₱300)</label>
                </div>
            </div>

            <h3 id="pagetitle">Customer Information</h3>

            <div class="reminder">
                <p>Please enter complete and correct details and information for us to accept your booking.</p>
            </div>

            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name<b>*</b></label>
                <input type="text" class="form-control" id="fullName" placeholder="Last Name, First Name, Middle Name" name="fullName" required>
            </div>

            <div class="mb-3">
                <label for="contactNumber" class="form-label">Contact Number<b>*</b></label>
                <input type="tel" class="form-control" id="contactNumber" placeholder="e.g., 09XXXXXXXXX" name="contactNumber" required>
            </div>

            <div class="mb-3">
                <label for="emailAddress" class="form-label">Email Address<b>*</b></label>
                <input type="email" class="form-control" id="emailAddress" placeholder="you@example.com" name="emailAddress" required>
            </div>

            <div class="reminder">
                <p>To accept your booking, please upload clear images of your driver's license to ensure security and verification.</p>
            </div>

            <div class="mb-3">
                <label for="licenseUpload" class="form-label">Driver’s License (Upload image)<b>*</b></label>
                <input type="file" class="form-control" id="licenseUpload" accept=".jpg,.jpeg,.png,.pdf" name="licenseUpload" required>
            </div>

            <div class="mt-4" id="btncon">
                <button type="submit" class="btn" id="submitbtn">Continue</button>
            </div>

        </form>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center g-3">

            <div class="col-md-6 col-lg-5">
                <div class="promo-card p-3">
                    <h5>🎉 Corporate Deals</h5>
                    <p>Get a <strong>₱500.00</strong> off for every minivan you rent.</p>
                    <small class="text-muted">Available until May 30, 2025.</small>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="promo-card p-3">
                    <h5>🎁 Hours Promo</h5>
                    <p>Rent Any Sedan and get additional<strong> 3 hours </strong>for you to drive.</p>
                    <small class="text-muted">Valid until 8 PM tomorrow. Applies automatically.</small>
                </div>
            </div>

        </div>
    </div>

    <div class="container-mt-3" id="containerdeals">
        <div class="col-md-6 col-lg-5">
            <a href="" id="moredeals">
                <div class="promo-card p-3">
                    <h5>Check this out, even more amazing deals available today!</h5>
                    <p>Don't miss out, today’s deals just got even better!</p>
                </div>
            </a>
        </div>
    </div>

    <footer class="footer text-white pt-5 pb-3">
        <div class="container">
            <div class="row text-center text-md-start">

                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold">VRoom Car Rental</h5>
                    <p>From City Streets to Scenic Routes — We’ve Got Your Keys.</p>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="fw-semibold">Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="../Homepage/homepage.php#about">About Us</a></li>
                        <li><a href="#">Business Plan</a></li>
                        <li><a href="#">In-store Ordering System</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="fw-semibold">Support</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Status</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="fw-semibold">Legal</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Settings</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center mb-3">
                <a href="#" class="mx-2"><i class="fab fa-facebook-f text-white"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-instagram text-white"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-twitter text-white"></i></a>
            </div>

            <div class="text-center">
                <small>&copy; 2025 VRoom Car Rental. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <script src="../Assets/js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>