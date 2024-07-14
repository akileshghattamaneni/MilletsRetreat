<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = intval($_POST['productId']);
    unset($_SESSION['cart'][$productId]);
}
?>