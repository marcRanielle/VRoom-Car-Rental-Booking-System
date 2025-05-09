<?php
session_start();

if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $productId) {
            if (isset($_POST['increase'])) {
                $_SESSION['cart'][$key]['quantity']++;
            } elseif (isset($_POST['decrease']) && $_SESSION['cart'][$key]['quantity'] > 1) {
                $_SESSION['cart'][$key]['quantity']--;
            }
            break;
        }
    }
}

header("Location: cart.php");
exit();
?>
