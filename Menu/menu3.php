<?php
session_start();

if (isset($_GET['car'], $_GET['price'])) {
    $_SESSION['car_name']  = $_GET['car'];
    $_SESSION['car_price'] = $_GET['price'];

    header('Location: ../Rent/booking.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Selection: Convertible</title>
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
            <img src="../Assets/img/toyotagrandia.jpg" alt="" id="menuimg">
            <span class="nav-label">Minivan</span>
          </a>
        </li>
      </ul>
      <ul class="nav-list secondary-nav">
        <li class="nav-item"><a href="../Cart/cart.php" class="nav-link">
            <span class="material-symbols-rounded">Message</span>
            <span class="nav-label">Message Us</span>
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
    <h4>Convertible Vehicle</h4>
  </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/bmwz4roaster.jpg">
            <img src="../Assets/img/bmwz4roaster.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">BMW Z4 Roadster</p>
              <p class="card-price">₱24,000.00 <br>For 24 Hours Minimum</p>
              <p>Two-seater convertible, sporty drive and elegant design.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Desert Cassava Delight">
                  <input type="hidden" name="price" value="119.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=BMW%20Z4%20Roadster&price=24000" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/fordmustangconvertible.jpg">
            <img src="../Assets/img/fordmustangconvertible.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Ford Mustang Convertible</p>
              <p class="card-price">₱20,900.00 <br>For 24 Hours Minimum</p>
              <p>With a powerful engine and sleek design. Ideal for special occasions.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=Ford%20Mustang%20Convertible&price=20900" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/bentleycontinentalgtc.jpg">
            <img src="../Assets/img/bentleycontinentalgtc.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Bentley Continental GTC</p>
              <p class="card-price">₱11,000.00 <br>For 24 Hours Minimum</p>
              <p> High-end luxury convertible. Suitable for VIP events and luxury travel.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=Bentley%20Continental%20GTC&price=11000" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/lambhorginiaventorsraodster.jpg">
            <img src="../Assets/img/lambhorginiaventorsraodster.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Lamborghini Aventador S Roadster</p>
              <p class="card-price">₱25,000.00 <br>For 24 Hours Minimum</p>
              <p> A top-tier exotic convertible offering unmatched performance and design.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=Lamborghini%20Aventador%20S%20Roadster&price=25000" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/volkswagennewbeetle.jpg">
            <img src="../Assets/img/volkswagennewbeetle.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Volkswagen New Beetle (1975)</p>
              <p class="card-price">₱9,500.00 <br>For 24 Hours</p>
              <p>A classic convertible with vintage charm, ideal for themed events.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=Volkswagen%20New%20Beetle%20(1975)&price=9500" class="btn button col" id="button">Rent now</a>
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