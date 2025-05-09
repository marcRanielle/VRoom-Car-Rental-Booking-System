<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu: Sandy Grain Glimmers</title>
  <link rel="stylesheet" href="menustyles.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
</head>

<body>
  <aside class="sidebar">
    <header class="sidebar-header">
      <a href="../Assets/img/logo.png" class="header-logo">
        <img src="../Assets/img/logo.png" alt="" />
      </a>
      <h3>Main Menu</h3>
    </header>
    <nav class="sidebar-nav">
      <ul class="nav-list primary-nav">
        <li class="nav-item">
          <a href="menu1.php" class="nav-link">
            <img src="../Assets/img/cassavacake.jpg" alt="" id="menuimg">
            <span class="nav-label">Dune Bakes</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="menu2.php" class="nav-link">
            <img src="../Assets/img/mangofloat.jpg" alt="" id="menuimg">
            <span class="nav-label">Oasis Creams</span>
          </a>

        </li>
        <li class="nav-item">
          <a href="menu3.php" class="nav-link">
            <img src="../Assets/img/halohalo.jpg" alt="" id="menuimg">
            <span class="nav-label">Polar Desert Bites</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="menu4.php" class="nav-link">
            <img src="../Assets/img/biko.jpg" alt="" id="menuimg">
            <span class="nav-label">Sandy Grain Glimmers</span>
          </a>

        <li class="nav-item">
          <a href="menu5.php" class="nav-link">
            <img src="../Assets/img/calamansijuice.jpg" alt="" id="menuimg">
            <span class="nav-label">Chill Sips & Gulps</span>
          </a>
        </li>
      </ul>

      <ul class="nav-list secondary-nav">
        <li class="nav-item">
          <a href="../Cart/cart.php" class="nav-link">
            <span class="material-symbols-rounded">shopping_cart</span>
            <span class="nav-label">Cart</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="../Homepage/homepage.php" class="nav-link">
            <span class="material-symbols-rounded">home</span>
            <span class="nav-label">Home</span>
          </a>
        </li>
      </ul>

    </nav>
  </aside>

  <div class="container" id="titllemenu">
    <h4>Sandy Grain Glimmers</h4>
  </div>

  <div class="dashboard-container">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/biko.jpg" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Caramel Dune Biko</p>
              <p class="card-price">₱29.00</p>
              <div class="row" id="row">
                <a href="#" class="btn button" id="button">Add to cart</a>
                <a href="../Order/payment.php" class="btn button" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/putobumbong.jpg" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Twilight Grain Sticks (Puto Bumbong)</p>
              <p class="card-price">₱59.00</p>
              <div class="row" id="row">
                <a href="#" class="btn button" id="button">Add to cart</a>
                <a href="../Order/payment.php" class="btn button" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/champorado.jpg" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Cocoa Sand Champorado</p>
              <p class="card-price">₱40.00</p>
              <div class="row" id="row">
                <a href="#" class="btn button" id="button">Add to cart</a>
                <a href="../Order/payment.php" class="btn button" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="dashboard-container">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/bibingka.jpg" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Golden Ember Bibingka</p>
              <p class="card-price">₱70.00</p>
              <div class="row" id="row">
                <a href="#" class="btn button" id="button">Add to cart</a>
                <a href="../Order/payment.php" class="btn button" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/palitaw1.jpg" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Sugar Dune Palitaw</p>
              <p class="card-price">₱65.00</p>
              <div class="row" id="row">
                <a href="#" class="btn button" id="button">Add to cart</a>
                <a href="../Order/payment.php" class="btn button" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer text-black py-3 text-center">
    <div class="container">
      <p class="mb-0">&copy; 2025 Oasis Dessert. All rights reserved.</p>
      <p class="mb-0"><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>