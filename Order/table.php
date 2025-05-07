<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oasis Dessert Dining Reference</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="orderstyles.css">
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
    <h3 id="pagetitle">Help Us Deliver Your Orders</h3>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <a href="tablenumber.php" class="text-decoration-none">
                        <div class="card custom-card">
                            <img src="../Assets/img/tablenumber.jpg" class="card-img-top" alt="" id="cardimg">
                            <div class="card-body">
                                <h5 class="card-title">Table No.</h5>
                            </div>
                        </div>
                    </a>
                    <div class="card service-option text-center p-3">
                        <div class="card-body">
                            <p class="card-text">Already seated? Enter your table number so we can deliver your food directly to you.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <a href="../Menu/menu1.php" class="text-decoration-none">
                        <div class="card custom-card">
                            <img src="../Assets/img/ordercard.jpg" class="card-img-top" alt="" id="cardimg">
                            <div class="card-body">
                                <h5 class="card-title"> Order No. Card</h5>
                            </div>
                        </div>
                    </a>
                    <div class="card service-option text-center p-3">
                        <div class="card-body">
                            <p class="card-text">No table yet? Don’t worry — We will provide you with an order number card to ensure your food is delivered to your table.</p>
                        </div>
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