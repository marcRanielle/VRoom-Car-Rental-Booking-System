<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oasis Dessert Table Number</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="orders.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <img src="../Assets/img/logo.png" alt="" id="navlogo">
            <a class="navbar-brand" href="#" id="brand">Oasis Dessert</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="../Homepage/homepage.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Deals</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Order/service.php">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero text-center">
    <h3 id="pagetitle">Table No.</h3>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="../Menu/menu1.php" method="POST">
                    <div class="mb-3">
                        <label for="tableNumber" class="form-label">Enter Your Table Number:</label>
                        <input type="number" id="table" class="form-control" min="1" max="50" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Next</button>
                </form>
            </div>
        </div>
    </div>
    </section>

    <div class="container mt-4">
        <div class="row justify-content-center g-3">

            <div class="col-md-6 col-lg-5">
                <div class="promo-card p-3">
                    <h5>🎉 Desert-Feels Deals</h5>
                    <p>Get a free <strong>Mango Shake</strong> with any dine-in meal</p>
                    <small class="text-muted">Available until May 30, 2025. Dine-in only.</small>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="promo-card p-3">
                    <h5>🎁 Hot Dunes Promo</h5>
                    <p>Order Takeout today and get <strong>10% off</strong> to your total bill!</p>
                    <small class="text-muted">Valid until 8 PM. Applies automatically.</small>
                </div>
            </div>

        </div>
    </div>

    <div class="container-mt-3" id="container">
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
        <h5 class="fw-bold">Oasis Dessert</h5>
        <p>Your sweet escape. Chill. Indulge. Repeat.</p>
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
      <small>&copy; 2025 Oasis Dessert. All rights reserved.</small>
    </div>
  </div>
</footer>

    <script src="../Assets/js/bootstrap.bundle.js"></script>

</body>

</html>