<?php
session_start();

function format_price($price)
{
    return '₱' . number_format($price, 2);
}

// Generate random order code
$order_code = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));
$_SESSION['last_order_code'] = $order_code;

// Prepare cart
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total = 0;

// QR code content (you can include more order details if you want)
$qr_content = "Order Code: $order_code";
// Using QuickChart API for QR code generation
$qr_url = "https://quickchart.io/chart?cht=qr&chs=200x200&chl=" . urlencode($qr_content);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Receipt</title>
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            font-family: 'Courier New', Courier, monospace;
        }

        .receipt {
            max-width: 400px;
            margin: auto;
            border: 1px dashed #000;
            padding: 15px;
            background-color: #f4f4f4;
            text-align: center;
        }

        .receipt h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .table {
            margin: 0 auto;
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }

        .order-code {
            font-size: 16px;
            font-weight: normal;
            margin-top: 10px;
        }

        .qr-code {
            margin-top: 15px;
        }

        .receipt-footer {
            font-size: 12px;
            margin-top: 15px;
            color: #555;
        }

        .receipt-footer p {
            margin: 5px 0;
        }
    </style>
</head>

<body>

    <?php if (!empty($cart)):
    ?>
        <div class="receipt">
            <h3>Order Receipt</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $item): ?>
                        <?php
                        $addon_total = 0;
                        if (isset($item['add_ons'])) {
                            foreach ($item['add_ons'] as $add_on) {
                                $addon_total += $add_on['price'];
                            }
                        }
                        $subtotal = ($item['price'] + $addon_total) * $item['quantity'];
                        $total += $subtotal;
                        ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($item['name']); ?>
                                <?php if (isset($item['add_ons'])): ?>
                                    <br><small>Add-ons:
                                        <?php foreach ($item['add_ons'] as $add_on): ?>
                                            <?php echo htmlspecialchars($add_on['name']) . ' (₱' . $add_on['price'] . ')'; ?>,
                                        <?php endforeach; ?>
                                    </small>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td><?php echo format_price($item['price'] + $addon_total); ?></td>
                            <td><?php echo format_price($subtotal); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Total:</strong></td>
                        <td class="total"><?php echo format_price($total); ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="qr-code">
                <img src="<?php echo $qr_url; ?>" alt="QR Code">
                <div class="order-code">Order Code: <?php echo $order_code; ?></div>
            </div>

            <div class="receipt-footer">
                <p>Thank you for your order!</p>
                <p>Visit again soon.</p>
                <p>www.yourwebsite.com</p>
            </div>
        </div>
    <?php else: ?>
        <div class="text-center">
            <p>Your cart is empty. Please add items to your cart to generate a receipt.</p>
        </div>
    <?php endif; ?>

</body>

</html>

<?php
// Clear cart after generating receipt
unset($_SESSION['cart']);
?>