<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

function format_price($price)
{
    return '₱' . number_format($price, 2);
}

if (isset($_GET['update']) && isset($_GET['index']) && isset($_GET['action'])) {
    $index = $_GET['index'];
    $action = $_GET['action'];

    if ($action == 'increase') {
        $_SESSION['cart'][$index]['quantity']++;
    } elseif ($action == 'decrease' && $_SESSION['cart'][$index]['quantity'] > 1) {
        $_SESSION['cart'][$index]['quantity']--;
    }
    header("Location: cart.php");
    exit();
}

if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    unset($_SESSION['cart'][$index]);
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Your Cart</title>
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css" />
    <style>
        body {
            padding: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .btn-danger {
            font-size: 14px;
        }

        .total {
            font-size: 20px;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="mb-4">Desert Cart</h2>

        <?php if (empty($cart)): ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php foreach ($cart as $index => $item): ?>
                        <?php $subtotal = $item['price'] * $item['quantity']; ?>
                        <?php $total += $subtotal; ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td><?php echo format_price($item['price']); ?></td>
                            <td>
                                <button onclick="window.location.href='cart.php?update=true&index=<?php echo $index; ?>&action=increase'" class="btn btn-primary btn-sm">+</button>
                                <?php echo $item['quantity']; ?>
                                <button onclick="window.location.href='cart.php?update=true&index=<?php echo $index; ?>&action=decrease'" class="btn btn-primary btn-sm">-</button>
                            </td>
                            <td><?php echo format_price($subtotal); ?></td>
                            <td>
                                <a href="cart.php?remove=<?php echo $index; ?>" class="btn btn-danger btn-sm">Remove</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Total</strong></td>
                        <td colspan="2"><?php echo format_price($total); ?></td>
                    </tr>
                </tbody>
            </table>

            <a href="../Order/payment.php" class="btn btn-success">Proceed to Checkout</a>
            <a href="../Menu/sides.php" class="btn btn-success">Add Side for Free</a>
        <?php endif; ?>
    </div>

</body>

</html>