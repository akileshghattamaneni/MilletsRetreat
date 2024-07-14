<?php
session_start();

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Sample product data
$products = [
    1 => [
        "name" => "Organic Foxtail Millet (Korralu)",
        "image" => "assets/imgs/millets/millet/11.png",
        "prices" => [
            "500gm" => 110,
            "1Kg" => 220,
        ],
        "product_page" => "organic-foxtail-millet-product.php"
    ],
    2 => [
        "name" => "Sorghum Whole Millet (Jonnalu)",
        "image" => "assets/imgs/millets/millet/sorghum-millets/1.png",
        "prices" => [
            "500gm" => 45,
            "1Kg" => 90,
        ],
        "product_page" => "sorghum-whole-millet-product.php"
    ],
    3 => [
        "name" => "Finger Millet (Ragi)",
        "image" => "assets/imgs/millets/millet/finger-millets/2.png",
        "prices" => [
            "500gm" => 45,
            "1Kg" => 90,
        ],
        "product_page" => "ragi-finger-millet-product.php"
    ],
    4 => [
        "name" => "Pearl Millets (Sajjalu)",
        "image" => "assets/imgs/millets/millet/pearl-millets/1.png",
        "prices" => [
            "500gm" => 50,
            "1Kg" => 100,
        ],
        "product_page" => "pearl-millets-product.php"
    ],
    5 => [
        "name" => "Barnyard Millet (Oodalu)",
        "image" => "assets/imgs/millets/millet/barnyard-millets/1.png",
        "prices" => [
            "500gm" => 110,
            "1Kg" => 220,
        ],
        "product_page" => "barnyard-millet-product.php"
    ],
    6 => [
        "name" => "Little Millets (Samalu)",
        "image" => "assets/imgs/millets/millet/little-millets/1.png",
        "prices" => [
            "500gm" => 125,
            "1Kg" => 250,
        ],
        "product_page" => "little-millet-product.php"
    ],
    7 => [
        "name" => "Kodo Millet (Arikelu)",
        "image" => "assets/imgs/millets/millet/kodo-millets/1.png",
        "prices" => [
            "500gm" => 130,
            "1Kg" => 260,
        ],
        "product_page" => "kodo-millets-product.php"
    ],
];


// Function to check if a product is already in the cart
function isProductInCart($productId) {
    return isset($_SESSION['cart']) && array_key_exists($productId, $_SESSION['cart']);
}

// Function to add a product to the cart
function addToCart($productId) {
    global $products;
    if (!isProductInCart($productId)) {
        $_SESSION['cart'][$productId] = $products[$productId];
    }
}

// Check if the product ID is provided in the URL
if (isset($_GET['product_id'])) {
    $productId = intval($_GET['product_id']);
    if (array_key_exists($productId, $products)) {
        addToCart($productId);
    }

    // // Redirect to cart page
    // header('Location: shop-cart.php');
    // exit(); // Ensure script stops after redirection
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Millets Retreat</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/logo/millets.png" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/main5103.css?v=6.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <?php include 'inc/header.php';?>

    <?php include 'inc/modals.php';?>

    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <h1 class="mb-15">Millets</h1>
                            <div class="breadcrumb">
                                <a href='index.php' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Millets
                            </div>
                        </div>
                        <div class="col-xl-9 text-end d-none d-xl-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row">
                <div class="col-12">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p>We found <strong class="text-brand">7</strong> items for you!</p>
                        </div>


                    </div>
                </div>
                <div class="row product-grid-4">
                    <?php
foreach ($products as $id => $product) {
    echo "<div class='col-lg-1-5 col-md-4 col-12 col-sm-6'>";
    echo "<div class='product-cart-wrap mb-30'>";
    echo "<div class='product-img-action-wrap'>";
    echo "<div class='product-img product-img-zoom'>";
    echo "<a href='{$product['product_page']}'>";
    echo "<img class='default-img' src='{$product['image']}' alt='' />";
    echo "<img class='hover-img' src='{$product['image']}' alt='' />";
    echo "</a>";
    echo "</div>";
    echo "<div class='product-badges product-badges-position product-badges-mrg'>";
    echo "</div>";
    echo "</div>";
    echo "<div class='product-content-wrap'>";
    echo "<h2><a href='{$product['product_page']}'>{$product['name']}</a></h2>";
    echo "<div>";
    echo "<span class='font-small text-muted'>1kg</span>";
    echo "</div>";
    echo "<div class='product-card-bottom'>";
    echo "<div class='product-price'>";
    echo "<span>₹{$product['prices']['1Kg']}</span>"; // Assuming displaying the 1Kg price
    echo "</div>";
    echo "<div class='add-cart'>";
    echo "<a class='add' href='?product_id={$id}' onclick='showToast()'><i class='fi-rs-shopping-cart mr-5'></i>Add</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>
                </div>
            </div>
        </div>
        </div>
    </main>


    <?php include 'inc/footer.php';?>


    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="assets/js/main5103.js?v=6.0"></script>
    <script src="assets/js/shop5103.js?v=6.0"></script>
</body>


</html>