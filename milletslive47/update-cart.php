<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['productId']; // Assume valid integer input for simplicity
    $change = intval($_POST['change']);

    if (isset($_SESSION['cart'][$productId])) {
        $currentQuantity = &$_SESSION['cart'][$productId]['quantity'];
        $currentQuantity += $change;
        
        if ($currentQuantity <= 0) {
            unset($_SESSION['cart'][$productId]);
        }
    }
}
?>