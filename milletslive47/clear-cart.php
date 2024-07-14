<?php
session_start();
unset($_SESSION['cart']);
header('Location: shop-cart.php');
exit();
?>