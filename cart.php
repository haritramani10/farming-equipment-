<?php
session_start();
require_once 'config.php';

// Handle Add to Cart / Buy Now
if (isset($_POST['add_to_cart']) || isset($_POST['buy_now'])) {
    $product_id = $_POST['product_id'];
    $quantity = max(1, (int)$_POST['quantity']);
    $item_array = [
        'id'    => $product_id,
        'name'  => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'image' => $_POST['product_image'],
        'qty'   => $quantity
    ];
    if (!isset($_SESSION['cart'])) { $_SESSION['cart'] = []; }
    $found = false;
    foreach ($_SESSION['cart'] as $key => $val) {
        if ($val['id'] == $product_id) {
            $_SESSION['cart'][$key]['qty'] += $quantity;
            $found = true; break;
        }
    }
    if (!$found) { $_SESSION['cart'][] = $item_array; }
    if (isset($_POST['buy_now'])) {
        header("Location: checkout.php"); exit();
    } else {
        header("Location: shoping-cart.php"); exit();
    }
} else {
    header("Location: index.php"); exit();
}
?>