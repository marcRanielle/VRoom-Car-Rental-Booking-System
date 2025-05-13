<?php

session_start();

$totalPrice = $_SESSION['total_price'] ?? 'N/A';
$pickup = $_SESSION['pickup_location'] ?? 'N/A';
$dropoff = $_SESSION['return_location'] ?? 'N/A';
$startDateTime = $_SESSION['start_date'] ?? 'N/A';
$endDateTime = $_SESSION['end_date'] ?? 'N/A';
$carName = $_SESSION['car_name'] ?? 'N/A';
$dailyRate = $_SESSION['car_price'];
$extras = $_SESSION['extras'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VRoom Car Rental: Payment Process</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="payment.css">
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
                    <li class="nav-item"><a class="nav-link" href="../Menu/menu1.php">Rent</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
                </ul>
                <a class="nav-link active" id="login" href="#">Login</a>
            </div>
        </div>
    </nav>

    <div class="container" id="payprocess">
        <h2>Select Payment Method</h2>

    <form method="post">
        <label><input type="radio" name="payment_method" value="cash" required> Cash (Pay on Pickup)</label><br>
        <label><input type="radio" name="payment_method" value="cashless" required> Cashless</label><br><br>

        <div id="cashless-options" style="display: none;">
            <label><input type="radio" name="cashless_option" value="gcash"> GCash</label><br>
            <label><input type="radio" name="cashless_option" value="maya"> Maya</label><br>
            <label><input type="radio" name="cashless_option" value="paypal"> PayPal</label><br><br>
        </div>

        <button type="submit" name="submit">Confirm Payment</button>
    </form>

    <?php if (isset($_POST['submit'])): ?>
        <?php
        $paymentMethod = $_POST['payment_method'];
        $cashlessOption = $_POST['cashless_option'] ?? '';

        if ($paymentMethod === 'cash') {
            $rentalCode = substr(str_shuffle('0123456789'), 0, 10);
        }
        ?>

        <hr>
        <h3>Rental Receipt</h3>
        <p><strong>Car:</strong> <?= htmlspecialchars($carName) ?></p>
        <p><strong>Pickup:</strong> <?= htmlspecialchars($pickup) ?></p>
        <p><strong>Drop-off:</strong> <?= htmlspecialchars($dropoff) ?></p>
        <p><strong>Start:</strong> <?= htmlspecialchars($startDateTime) ?></p>
        <p><strong>End:</strong> <?= htmlspecialchars($endDateTime) ?></p>
        <p><strong>Total:</strong> ₱<?= number_format($totalPrice) ?></p>
        <p><strong>Payment Method:</strong>
            <?= $paymentMethod === 'cash' ? 'Cash (pay on pickup)' : ucfirst($cashlessOption) ?>
        </p>

        <?php if ($paymentMethod === 'cash'): ?>
            <p><strong>Rental Code:</strong> <?= $rentalCode ?></p>
        <?php endif; ?>

        <?php if ($paymentMethod === 'cashless' && $cashlessOption): ?>
            <?php
            $qrText = "Pay ₱$totalPrice via " . strtoupper($cashlessOption) . " to: CompanyName";
            $qrURL = "https://quickchart.io/qr?text=Pay%20%E2%82%B11500%20via%20GCASH%20to%3A%20CompanyName&size=200" . urlencode($qrText);
            ?>
            <p><strong>Scan to Pay:</strong></p>
            <img src="<?= $qrURL ?>" alt="QR Code for <?= htmlspecialchars($cashlessOption) ?>">

        <?php endif; ?>
    <?php endif; ?>
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
                        <li><a href="#">About Us</a></li>
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
    <script src="payment.js"></script>

</body>

</html>