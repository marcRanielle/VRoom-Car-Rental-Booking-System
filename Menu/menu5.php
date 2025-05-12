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
  <title>Selection: Minivan</title>
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
    <h4>Minivan</h4>
  </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/toyotainnova.jpg">
            <img src="../Assets/img/toyotainnova.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Toyota Innova</p>
              <p class="card-price">₱3,500.00 <br>For 24 Hours Minimum</p>
              <p>7-seater MPV. Reliable and comfortable. Ideal for family trips and group travels.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Desert Cassava Delight">
                  <input type="hidden" name="price" value="119.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=Toyota%20Innova&price=3500" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/hyundaistarex.jpg">
            <img src="../Assets/img/hyundaistarex.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Hyundai Starex</p>
              <p class="card-price">₱5,949.00 <br>For 24 Hours Minimum</p>
              <p>Minivan with ample room for passengers and luggage. Suitable for city drives and long-distance travel.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=Hyundai%20Starex&price=5949" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/toyotagrandia.jpg">
            <img src="../Assets/img/toyotagrandia.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Toyota Grandia</p>
              <p class="card-price">₱5,299.00 <br>For 24 Hours Minimum</p>
              <p>Premium van with higher seating capacity. Perfect for larger groups or corporate outings.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=Toyota%20Grandia&price=5299" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/hondabry.jpg">
            <img src="../Assets/img/hondabry.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Honda BR-V</p>
              <p class="card-price">₱4,500.00 <br>For 24 Hours Minimum</p>
              <p>Compact SUV with 7-seater capacity, blending style and functionality. Great for urban and out-of-town trips.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=Honda%20BR-V&price=4500" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/opelzapira.jpg">
            <img src="../Assets/img/opelzapira.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Opel Zafira</p>
              <p class="card-price">₱3,500.00 <br>For 24 Hours Minimum</p>
              <p>European minivan with comfort and efficiency, suitable for family vacations and group tours.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="menu1.php?car=Opel%20Zafira&price=3500" class="btn button col" id="button">Rent now</a>
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