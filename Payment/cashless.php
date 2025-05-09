<?php
session_start();

function format_price($price) {
    return '₱' . number_format($price, 2);
}

$cart = $_SESSION['cart'] ?? [];
$total = 0;

// Random order code
$order_code = strtoupper(substr(md5(uniqid()), 0, 8));
$_SESSION['last_order_code'] = $order_code;

// Default fake QR code link (changes with selection using JS)
$default_qr = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=Payment+via+GCash';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cashless Payment Receipt</title>
  <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
  <style>
    body { padding: 20px; font-family: 'Arial', sans-serif; background-color: #f4f4f4; }
    .receipt { max-width: 450px; margin: auto; border: 1px dashed #333; padding: 20px; background: #fff; }
    .payment-options img { width: 100px; margin: 10px; cursor: pointer; transition: transform 0.2s; }
    .payment-options img:hover { transform: scale(1.05); }
    .qr-code { text-align: center; margin-top: 20px; }
    .order-code { text-align: center; margin-top: 10px; font-weight: bold; }
    .table th, .table td { font-size: 14px; padding: 8px; }
    .receipt-footer { font-size: 12px; margin-top: 20px; color: #666; text-align: center; }
  </style>
</head>
<body>

<?php if (!empty($cart)): ?>
  <div class="receipt">
    <h4 class="text-center">Cashless Payment Receipt</h4>

    <table class="table table-bordered">
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
          <td colspan="3"><strong>Total</strong></td>
          <td><strong><?php echo format_price($total); ?></strong></td>
        </tr>
      </tbody>
    </table>

    <div class="text-center mt-4">
      <p><strong>Select Payment Method:</strong></p>
      <div class="payment-options d-flex justify-content-center flex-wrap">
        <img src="../assets/img/gcash.jpeg" alt="GCash" onclick="setQR('GCash')">
        <img src="../assets/img/maya.jpg" alt="Maya" onclick="setQR('Maya')">
        <img src="../assets/img/paypal.png" alt="PayPal" onclick="setQR('PayPal')">
      </div>
    </div>

    <div class="qr-code">
      <img id="qrImage" src="<?php echo $default_qr; ?>" alt="QR Code">
    </div>
    <div class="order-code">Order Code: <?php echo $order_code; ?></div>

    <div class="receipt-footer">
      <p>Scan the QR code to proceed with payment.</p>
      <p>Thank you for ordering!</p>
    </div>
  </div>
<?php else: ?>
  <div class="text-center">
    <p>Your cart is empty. No receipt to show.</p>
  </div>
<?php endif; ?>

<script>
function setQR(method) {
  const qrText = encodeURIComponent("Payment via " + method + " for Order <?php echo $order_code; ?>");
  document.getElementById('qrImage').src = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" + qrText;
}
</script>

</body>
</html>

<?php
unset($_SESSION['cart']);
?>
