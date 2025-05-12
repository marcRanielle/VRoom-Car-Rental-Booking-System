<?php
session_start();

$carName = $_SESSION['car_name'] ?? 'N/A';
$carPricePerDay = isset($_SESSION['car_price']) ? (float)$_SESSION['car_price'] : 0;

$startDateTime = $_SESSION['start_date'] ?? 'N/A';
$endDateTime = $_SESSION['end_date'] ?? 'N/A';
$pickup = $_SESSION['pickup_location'] ?? 'N/A';
$dropoff = $_SESSION['return_location'] ?? 'N/A';

$start = new DateTime($startDateTime);
$end = new DateTime($endDateTime);
$interval = $start->diff($end);

$days = (int)$interval->format('%a');

$hasExtraTime = ($interval->h > 0 || $interval->i > 0 || $interval->s > 0);

if ($hasExtraTime || $days === 0) {
    $days += 1; 
}

$dailyRate = $_SESSION['car_price'];
$total = $days * $dailyRate;

$extras = $_SESSION['extras'] ?? [];
$extraTotal = 0;
$extrasList = [];

if (in_array('driver', $extras)) {
  $extraTotal += 500;
  $extrasList[] = "Driver (+₱500)";
}
if (in_array('childSeat', $extras)) {
  $extraTotal += 200;
  $extrasList[] = "Child Seat (+₱200)";
}
if (in_array('insurance', $extras)) {
  $extraTotal += 300;
  $extrasList[] = "Insurance (+₱300)";
}

$name = $_SESSION['full_name'] ?? 'N/A';
$email = $_SESSION['email_address'] ?? 'N/A';
$contact = $_SESSION['contact_number'] ?? 'N/A';
$totalPrice = $total + $extraTotal;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>VRoom Car Rental: Rental Review</title>
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

  <div class="container" id="container">
    <h2>Rental Summary Review</h2>

    <h4>Car Details</h4>
    <p><strong>Car:</strong> <?= htmlspecialchars($carName) ?></p>
    <p><strong>Rate per Day:</strong> ₱<?= number_format($carPricePerDay, 2) ?></p>

    <h4>Booking Details</h4>
    <p><strong>Start Date & Time:</strong> <?= htmlspecialchars($startDateTime) ?></p>
    <p><strong>End Date & Time:</strong> <?= htmlspecialchars($endDateTime) ?></p>
    <p><strong>Pickup Location:</strong> <?= htmlspecialchars($pickup) ?></p>
    <p><strong>Drop-off Location:</strong> <?= htmlspecialchars($dropoff) ?></p>

    <p><strong>Rental Duration:</strong> <?= $days ?> day(s) <?= $hasExtraTime ? 'extra time count as 1 day' : '' ?></p>
<p><strong>Total Cost:</strong> ₱<?= number_format($total) ?></p>
</p>

    <h4>Extras</h4>
    <?php if (!empty($extrasList)): ?>
      <ul>
        <?php foreach ($extrasList as $extra): ?>
          <li id="extrasprice"><?= $extra ?></li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>No extras selected.</p>
    <?php endif; ?>

    <h4>Customer Information</h4>
    <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Contact Number:</strong> <?= htmlspecialchars($contact) ?></p>

    <h4>Total Price</h4>
    <p id="totalprice"><strong>₱<?= number_format($totalPrice, 2) ?></strong></p>

    <a href="confirm.php" class="btn btn-primary">Confirm and Pay</a>
    <a href="../Rent/booking.php" class="btn btn-secondary">Edit Information</a>
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