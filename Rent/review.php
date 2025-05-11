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

$rentTotal = $carPricePerDay * $days;
if ($hasExtraTime) {
    $rentTotal += 300;
}

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
$totalPrice = $rentTotal + $extraTotal;

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
  <div class="container" id="container">
    <h2>Rental Summary</h2>

    <h4>Car Details</h4>
    <p><strong>Car:</strong> <?= htmlspecialchars($carName) ?></p>
    <p><strong>Rate per Day:</strong> ₱<?= number_format($carPricePerDay, 2) ?></p>

    <h4>Booking Details</h4>
    <p><strong>Start Date & Time:</strong> <?= htmlspecialchars($startDateTime) ?></p>
    <p><strong>End Date & Time:</strong> <?= htmlspecialchars($endDateTime) ?></p>
    <p><strong>Pickup Location:</strong> <?= htmlspecialchars($pickup) ?></p>
    <p><strong>Drop-off Location:</strong> <?= htmlspecialchars($dropoff) ?></p>
    <p><strong>Rental Duration:</strong> <?= $days ?> day(s)<?= $hasExtraTime ? ' + extra time (₱300)' : '' ?></p>

    <h4>Extras</h4>
    <?php if (!empty($extrasList)): ?>
      <ul>
        <?php foreach ($extrasList as $extra): ?>
          <li><?= $extra ?></li>
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
    <p><strong>₱<?= number_format($totalPrice, 2) ?></strong></p>

    <a href="confirm.php" class="btn btn-primary">Confirm and Pay</a>
    <a href="../Menu/menu1.php" class="btn btn-secondary">Back to Menu</a>
  </div>
</body>
</html>
