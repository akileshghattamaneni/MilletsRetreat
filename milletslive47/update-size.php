<?php
session_start();
include 'shop-cart.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = intval($_POST['productId']);
    $size = $_POST['size'];

    // Check if product exists in the session cart
    if (isset($_SESSION['cart'][$productId])) {
        // Get the product information once
        $product = $products[$productId];
        // Update the size in the session cart
        $_SESSION['cart'][$productId]['size'] = $size;
        // Calculate the new price based on the selected size
        $newPrice = $product['prices'][$size];

        // Output the result as JSON
        echo json_encode(['success' => true, 'newPrice' => $newPrice]);
    } else {
        // Product not found in the cart
        echo json_encode(['success' => false]);
    }
}
?>