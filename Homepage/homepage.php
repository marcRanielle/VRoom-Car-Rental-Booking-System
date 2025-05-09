<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Oasis Dessert - Homepage</title>
  <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
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
          <li class="nav-item"><a class="nav-link active" href="homepage.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Deals</a></li>
          <li class="nav-item"><a class="nav-link" href="../Order/service.php">Order</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Feedback</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
        </ul>
        <a class="nav-link active" id="login" href="#">Login</a>
      </div>
    </div>
  </nav>

  <section class="hero text-center text-white">
    <div class="container">
      <div class="slider-card">
        <div class="slider-images" id="slider">
          <img src="../Assets/img/logo.png" alt="" />
          <img src="../Assets/img/mangofloat.jpg" alt="Image 2" />
          <img src="../Assets/img/biko.jpg" alt="" />
          <img src="../Assets/img/cassavacake.jpg" alt="" />
          <img src="../Assets/img/halohalo.jpg" alt="" />
        </div>
      </div>
    </div>

    <div class="container" id="tagline">
      <h1 class="display-4">Order Easier. Enhance Your Dine-in Experience.</h1>
      <p class="lead">Order here for dine-in or takeout in any <strong>Oasis Dessert</strong> restaurants and indulge in delicious Filipino desserts.</p>
      <p class="lead">Enjoy a hassle-free experience with exclusive deals, promos, and discounts!</p>
      <a href="../Order/service.php" class="btn btn-warning btn-lg mt-3" id="ordernow">Order Now</a>
    </div>
  </section>

  <section class="features py-5" id="infos">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <div class="card feature-card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Dine-In or Take-Out</h5>
              <p class="card-text">"Quickly place your order for dine-in or take-out—your food, your way, right when you want it."</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="card feature-card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Fresh Ingredients</h5>
              <p class="card-text">"Every dish is made with fresh, high-quality ingredients prepared just for you."</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="card feature-card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Easy Ordering</h5>
              <p class="card-text">"Our streamlined ordering system makes it simple to order food you want—fast and hassle-free."</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-5 text-center">
  <div class="row justify-content-center">
    
  <div class="col-6 col-sm-6 col-md-4 cards">
    <div class="card custom-card mb-4" >
        <img src="../Assets/img/signupdiscount.jpg" class="card-img-top" alt=""></a>
        <div class="card-body">
        <h5 class="card-title" >Sign up now</h5>
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
          <p class="card-text text-center">Trusted by thousands. Read our customer reviews.</p>
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

  <footer class="footer text-white py-3 text-center">
    <div class="container">
      <p class="mb-0">&copy; 2025 Oasis Dessert. All rights reserved.</p>
      <p class="mb-0"><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
  </footer>

  <script src="../Assets/js/bootstrap.bundle.js"></script>
  <script src="script.js"></script>
</body>

</html>