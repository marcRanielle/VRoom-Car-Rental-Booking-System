<?php session_start(); ?>
<?php
if (isset($_GET['car']) && isset($_GET['price'])) {
    $_SESSION['car_name'] = $_GET['car'];
    $_SESSION['car_price'] = $_GET['price'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Selection: Sedan</title>
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
      <h4>Sedan</h4>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/hondacivic.jpg">
              <img src="../Assets/img/hondacivic.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Honda Civic</p>
              <p class="card-price">₱2,550.00 <br>For 24 Hours</p>
              <p>Reliable, fuel-efficient, and compact. Ideal for city driving and long trips.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/booking.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/hyundaielantra.jpg">
              <img src="../Assets/img/hyundaielantra.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Hyundai Elantra</p>
              <p class="card-price">₱2,500.00 <br>For 24 Hours</p>
              <p>Comes with modern features like Apple CarPlay and Android Auto.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/booking.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/mazda3.jpg">
              <img src="../Assets/img/mazda3.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Mazda 3</p>
              <p class="card-price">₱2,700.00 <br>For 24 Hours</p>
              <p>Sporty handling, stylish design, and comfortable interior.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/booking.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/nissanaltima.jpg">
              <img src="../Assets/img/nissanaltima.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Nissan Altima</p>
              <p class="card-price">₱2,250.00 <br>For 24 Hours</p>
              <p>With good fuel economy and spacious interior. Good for long-distance travel.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/booking.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/subaruimpreza.jpg">
              <img src="../Assets/img/subaruimpreza.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Subaru Impreza</p>
              <p class="card-price">₱2,800.00 <br>For 24 Hours</p>
              <p>A great option for varying weather conditions.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/booking.php" class="btn button col" id="button">Rent now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <a href="../Assets/img/toyotacorolla.jpg">
              <img src="../Assets/img/toyotacorolla.jpg" class="card-img-top" alt="" id="img">
            </a>
            <div class="card-body">
              <p class="card-text">Toyota Corolla</p>
              <p class="card-price">₱1,500.00 <br>For 24 Hours</p>
              <p>Reliable and fuel efficient. Compact, with a smooth and comfortable ride.</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to list</button>
                </form>
                <a href="../Rent/booking.php" class="btn button col" id="button">Rent now</a>
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