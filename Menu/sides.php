<?php

include '../dbcon.php'; 

session_start();

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product'])) {
  $product = $_POST['product'];
  $price = floatval($_POST['price']);

  // Limit: Only 1 free side (₱0) allowed
  $hasFreeSide = false;
  foreach ($_SESSION['cart'] as $item) {
    if ($item['price'] == 0) {
      $hasFreeSide = true;
      break;
    }
  }

  if ($price == 0 && $hasFreeSide) {
    echo "<script>alert('You can only choose one free side.'); window.location.href='../Cart/cart.php';</script>";
    exit();
  }

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
  <title>Menu: Free Sides</title>
  <link rel="stylesheet" href="menustyles.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
</head>

<body>

  <div class="container" id="titllemenu">
    <h4>Free Sides</h4>
    <p>Choose 1 Free Side Dish</p>
  </div>

  <div class="dashboard-container">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/cassavacake.jpg" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Desert Cassava Delight</p>
              <p class="card-price">₱119.00</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Desert Cassava Delight">
                  <input type="hidden" name="price" value="119.00">
                  <button type="submit" class="btn button" id="button">Add to cart</button>
                </form>
                <a href="../Order/payment.php" class="btn button col" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/ubecake.jpg" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Ube Dune Cake</p>
              <p class="card-price">₱189.00</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Ube Dune Cake">
                  <input type="hidden" name="price" value="189.00">
                  <button type="submit" class="btn button" id="button">Add to cart</button>
                </form>
                <a href="../Order/payment.php" class="btn button col" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/lecheflancake.JPG" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Leche Flan Mirage Cake</p>
              <p class="card-price">₱140.00</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Leche Flan Mirage Cake">
                  <input type="hidden" name="price" value="140.00">
                  <button type="submit" class="btn button" id="button">Add to cart</button>
                </form>
                <a href="../Order/payment.php" class="btn button col" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/eggpie.png" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Golden Sun Egg Pie</p>
              <p class="card-price">₱120.00</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Golden Sun Egg Pie">
                  <input type="hidden" name="price" value="120.00">
                  <button type="submit" class="btn button" id="button">Add to cart</button>
                </form>
                <a href="../Order/payment.php" class="btn button col" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/ensaymada.jpg" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Sandy Swirl Ensaymada</p>
              <p class="card-price">₱69.00</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Sandy Swirl Ensaymada">
                  <input type="hidden" name="price" value="69.00">
                  <button type="submit" class="btn button" id="button">Add to cart</button>
                </form>
                <a href="../Order/payment.php" class="btn button col" id="button">Buy now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card custom-card">
            <img src="../Assets/img/mongobeanhopia.jpg" class="card-img-top" alt="" id="img">
            <div class="card-body">
              <p class="card-text">Golden Hopia Monggo</p>
              <p class="card-price">₱45.00</p>
              <div class="row" id="row">
                <form method="POST" class="col">
                  <input type="hidden" name="product" value="Golden Hopia Monggo">
                  <input type="hidden" name="price" value="45.00">
                  <button type="submit" class="btn button" id="button">Add to cart</button>
                </form>
                <a href="../Order/payment.php" class="btn button col" id="button">Buy now</a>
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