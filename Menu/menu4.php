<?php

include '../dbcon.php';

session_start();

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product'])) {
  $product = $_POST['product'];
  $price = floatval($_POST['price']);

  if (isset($_SESSION['cart'][$product])) {
    $_SESSION['cart'][$product]['quantity'] += 1;
  } else {
    $_SESSION['cart'][$product] = [
      'name' => $product,
      'price' => $price,
      'quantity' => 1
    ];
  }

  header("Location: ../Cart/cart.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Selection: Luxury Car</title>
  <link rel="stylesheet" href="menustyles.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
</head>

<body>
  <aside class="sidebar">
    <header class="sidebar-header">
      <a href="../Assets/img/logo.png" class="header-logo">
        <img src="../Assets/img/logov.png" alt="" />
      </a>
      <h3>Car Selection</h3>
    </header>
    <nav class="sidebar-nav">
      <ul class="nav-list primary-nav">
        <li class="nav-item">
          <a href="menu1.php" class="nav-link">
            <img src="../Assets/img/toyotacorolla.jpg" alt="" id="menuimg">
            <span class="nav-label">Sedan</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="menu2.php" class="nav-link">
            <img src="../Assets/img/fordeverest.jpg" alt="" id="menuimg">
            <span class="nav-label">SUV</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="menu3.php" class="nav-link">
            <img src="../Assets/img/lambhorginiaventorsraodster.jpg" alt="" id="menuimg">
            <span class="nav-label">Convertible</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="menu4.php" class="nav-link">
            <img src="../Assets/img/lexuslm.jpg" alt="" id="menuimg">
            <span class="nav-label">Luxury Car</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="menu5.php" class="nav-link">
            <img src="../Assets/img/calamansijuice.jpg" alt="" id="menuimg">
            <span class="nav-label">Minivan</span>
          </a>
        </li>
      </ul>
      <ul class="nav-list secondary-nav">
        <li class="nav-item"><a href="../Cart/cart.php" class="nav-link">
            <span class="material-symbols-rounded">directions_car</span>
            <span class="nav-label">My Car List</span>
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

  <div class="dashboard-container">
    <div class="container-lg" id="titlemenu">
    <h4>Luxury Car</h4>
  </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/rollsroycephantom.jpg">
            <img src="../Assets/img/rollsroycephantom.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Rolls-Royce Phantom</p>
              <p class="card-price">₱27,500.00 <br>For 1 hour Minimum</p>
              <p>Ideal for weddings, VIP transfers, and prestigious corporate events. Comes with a professional chauffeur.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Desert Cassava Delight">
                  <input type="hidden" name="price" value="119.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/payment.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/rollsroyceghost.jpg">
            <img src="../Assets/img/rollsroyceghost.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Rolls-Royce Ghost</p>
              <p class="card-price">₱25,000.00 <br>For 1 hour Minimum</p>
              <p>perfect for making a grand entrance at any event. Features a plush interior and is chauffeur-driven.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/payment.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/ferrari458italia.jpg">
            <img src="../Assets/img/ferrari458italia.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Ferrari 458 Italia</p>
              <p class="card-price">₱35,000.00 <br>For 1 Hour Minimum</p>
              <p>Experience the thrill of driving a Ferrari 458 Italia. Perfect for special occasions and comes with a professional driver.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/payment.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/lamborghiniaventador.jpg">
            <img src="../Assets/img/lamborghiniaventador.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Lamborghini Aventador</p>
              <p class="card-price">₱35,000.00 <br>For 1 Hour Minimum</p>
              <p>Make a statement with the Lamborghini Aventador. Perfect for city tours, weddings, or unique arrivals. Comes with a professional driver.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/payment.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/mercedesbenzeclass.jpg">
            <img src="../Assets/img/mercedesbenzeclass.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Mercedes-Benz E-Class</p>
              <p class="card-price">₱1,700.00 <br>For 1 hour Minimum</p>
              <p>The Mercedes-Benz E-Class offers a comfortable ride with a sleek design. Suitable for business trips and special occasions. Chauffeur-driven.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/payment.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/lexuslm.jpg">
            <img src="../Assets/img/lexuslm.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Lexus LM</p>
              <p class="card-price">₱2,500.00 <br>For 1 hour Minimum</p>
              <p>Luxurious ride with elite interiors and advanced features. Perfect for VIP transport and special events. Comes with a professional driver.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/payment.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="footer text-black py-3 text-center">
    <div class="container">
      <p class="mb-0">&copy; 2025 VRoom Car Rental. All rights reserved.</p>
      <p class="mb-0"><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>