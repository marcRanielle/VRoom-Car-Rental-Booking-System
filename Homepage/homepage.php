<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>VRoom - Homepage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
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
          <li class="nav-item"><a class="nav-link active" href="homepage.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Deals</a></li>
          <li class="nav-item"><a class="nav-link" href="../Menu/menu1.php">Rent</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Feedback</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
        </ul>
        <a class="nav-link active" id="login" href="#">Login</a>
      </div>
    </div>
  </nav>

  <section class="hero text-center text-white">
    <div class="container">
      <div class="slider-card">
        <div class="slider-images" id="slider">
          <img src="../Assets/img/logovroom.png" alt="" />
          <img src="../Assets/img/toyotacorolla.jpg" alt="" />
          <img src="../Assets/img/hyundaisantafe.jpg" alt="" />
          <img src="../Assets/img/fordmustangconvertible.jpg" alt="" />
          <img src="../Assets/img/rollsroycephantom.jpg" alt="" />
          <img src="../Assets/img/lexuslm.jpg" alt="" />
          <img src="../Assets/img/ensaymada.jpg" alt="" />
        </div>
      </div>
    </div>

    <div class="container" id="tagline">
      <h1 class="display-4">Wanna Go Anywhere? Go VRoom.</h1>
      <p class="lead">From City Streets to Scenic Routes — We’ve Got Your Keys.</p>
      <p class="lead">Drive What You Want. When You Want. Where You Want. With VRoom.</p>
      <a href="../Menu/menu1.php" class="btn btn-lg mt-3" id="ordernow">Rent Now</a>
    </div>
  </section>

  <section class="features py-5" id="infos">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <div class="card feature-card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Flexible Rentals</h5>
              <p class="card-text">"Choose your vehicle and book for a 24 hours or a days — perfect for any schedule."</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="card feature-card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Well-Maintained Cars</h5>
              <p class="card-text">"All our vehicles are clean, serviced regularly, and ready for a smooth ride."</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="card feature-card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Simple Booking</h5>
              <p class="card-text">"Reserve your car in minutes with our easy-to-use online system—no hassle, just drive."</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-5 text-center">
      <div class="row justify-content-center">

        <div class="col-6 col-sm-6 col-md-4 cards">
          <div class="card custom-card mb-4">
            <img src="../Assets/img/signupdiscount.jpg" class="card-img-top" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">Sign up now</h5>
              <p class="card-text text-center">Unlock your welcome discount.</p>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-4 cards">
          <div class="card custom-card mb-4">
            <a href=""><img src="../Assets/img/dealsandpromos.jpg" class="card-img-top" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">Deals & Promos</h5>
              <p class="card-text text-center">Claim exclusive discounts & deals</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container my-5 text-center" id="con-bottom">
      <div class="row justify-content-center">

        <div class="col-6 col-sm-6 col-md-4 cards">
          <div class="card custom-card mb-4">
            <a href=""><img src="../Assets/img/reviewand feedback.jpg" class="card-img-top" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">Feedbacks & Reviews</h5>
              <p class="card-text text-center">Read our customer reviews.</p>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-4 cards">
          <div class="card custom-card mb-4">
            <a href=""><img src="../Assets/img/about us.jpg" class="card-img-top" alt=""></a>
            <div class="card-body">
              <h5 class="card-title">About us</h5>
              <p class="card-text text-center">Learn more about us...</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <div class="container">
    <section id="about">
      <div id="aboutcon">
        <h2 id="abouttitle">About Us</h2>
        <p class="parag" id="parag">
          Welcome to <strong class="vroom">VRoom Car Rentals</strong>, a partner for convenient, reliable, and affordable car rental services. 
          <br>Whether you're planning a weekend getaway, a business trip, or simply need a vehicle for daily use, we offer a wide selection of vehicles to match your needs.
        </p>

        <h3 class="subtitle">Our Mission</h3>
        <p class="parag">
          Our mission is to make transportation more accessible by providing a seamless and user-friendly car rental experience. 
          We aim to deliver top-quality customer service, flexible rental options, and competitive pricing through our digital booking platform.
        </p>

        <h3 class="subtitle">What We Offer</h3>
        <ul class="list">
          <li>Wide range of well-maintained vehicles – sedans, SUVs, vans, and more</li>
          <li>Real-time availability and instant booking through our website</li>
          <li>Transparent pricing with no hidden charges</li>
          <li>Flexible pickup and drop-off schedules</li>
          <li>Optional add-ons like GPS, child seats, and insurance</li>
        </ul>

        <h3 class="subtitle">Why Use Our Website?</h3>
        <ul class="list">
          <li><strong>24/7 Access:</strong> Book anytime, anywhere around Pangasinan from your phone or computer</li>
          <li><strong>Easy to Use:</strong> Intuitive design for a fast and smooth booking experience</li>
          <li><strong>Instant Confirmation:</strong> Get your booking details immediately</li>
          <li><strong>Manage Your Rentals:</strong> View, modify, or cancel bookings easily</li>
          <li><strong>Customer Support:</strong> Live chat and contact options for your convenience</li>
        </ul>

        <h3 class="subtitle">Our Promise</h3>
        <p class="parag">
          At DriveNow, we believe in building long-term relationships with our customers by ensuring trust, safety, and satisfaction. We're committed to making every journey a smooth ride.
        </p>
        <p class="parag">We also ensure that all vehicle owners and their vehicles listed on our platform are fully compliant with legal requirements. 
          <br>Each vehicle is regularly inspected to maintain excellent condition, and we are committed to assuming responsibility where applicable.</p>
      </div>
    </section>
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
  <script src="script.js"></script>
</body>

</html>