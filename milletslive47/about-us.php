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
</head>

<body style="overflow-x: hidden !important;">

    <?php include 'inc/header.php';?>
    <?php include 'inc/modals.php';?>


    <main class="main pages">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <h1 class="mb-15">About Us</h1>
                            <div class="breadcrumb">
                                <a href='index.php' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> About Us
                            </div>
                        </div>
                        <div class="col-xl-9 text-end d-none d-xl-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="row align-items-center mb-50">
                            <div class="col-lg-6">
                                <img src="assets/imgs/about/cereal-growing-field.png" alt=""
                                    class="border-radius-15 mb-md-3 mb-lg-0 mb-sm-4" style="width: 100%;" />
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-25" style="max-width: 100%;">
                                    <h2 class="mb-30">Welcome to Millets Retreat</h2>
                                    <p class="mb-25">Millets Retreat is an e-commerce platform selling organic millets
                                        and millets based products. Sourced from certified farms, our products are
                                        pesticide-free and high-quality. The site offers detailed descriptions,
                                        nutritional benefits, and recipes, making healthy eating accessible and
                                        enjoyable for health-conscious consumers.</p>
                                    <p class="mb-50">At Millets Retreat, we prioritize sustainability and support local
                                        farmers through fair trade and traditional farming methods. Our eco-friendly
                                        packaging reduces waste, and our platform offers health benefits, cooking tips,
                                        and community engagement. Enhance your diet and support sustainable agriculture
                                        with our premium organic millets.</p>
                                    <div class="carausel-3-columns-cover position-relative"
                                        style="max-width: 100%; overflow: hidden;">
                                        <div id="carausel-3-columns-arrows"></div>
                                        <div class="carausel-3-columns" id="carausel-3-columns"
                                            style="display: flex; flex-wrap: nowrap; overflow-x: auto;">
                                            <img src="assets/imgs/millets/millet/11.png" alt=""
                                                style="flex: 0 0 auto; width: 100px;" />
                                            <img src="assets/imgs/millets/millet/barnyard-millets/1.png" alt=""
                                                style="flex: 0 0 auto; width: 100px;" />
                                            <img src="assets/imgs/millets/millet/finger-millets/1.png" alt=""
                                                style="flex: 0 0 auto; width: 100px;" />
                                            <img src="assets/imgs/millets/millet/kodo-millets/1.png" alt=""
                                                style="flex: 0 0 auto; width: 100px;" />
                                            <img src="assets/imgs/millets/millet/little-millets/1.png" alt=""
                                                style="flex: 0 0 auto; width: 100px;" />
                                            <img src="assets/imgs/millets/millet/pearl-millets/1.png" alt=""
                                                style="flex: 0 0 auto; width: 100px;" />
                                            <img src="assets/imgs/millets/millet/sorghum-millets/1.png" alt=""
                                                style="flex: 0 0 auto; width: 100px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="text-center mb-50">
                            <h2 class="title style-3 mb-40">What We Provide?</h2>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-1.svg" alt="" />
                                        <h4>Best Prices & Offers</h4>
                                        <p>Discover unbeatable prices and exclusive offers on premium millets at Millets
                                            Retreat. Shop now for healthy, organic options!</p>
                                        <!-- <a href="#">Read more</a> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-2.svg" alt="" />
                                        <h4>Wide Assortment</h4>
                                        <p>Diverse selection of nutritious millets and related products for
                                            health-conscious consumers. Explore our wide range for a wholesome
                                            lifestyle.</p>
                                        <!-- <a href="#">Read more</a> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-24">
                                    <div class="featured-card">
                                        <img src="assets/imgs/theme/icons/icon-6.svg" alt="" />
                                        <h4>100% Satisfaction</h4>
                                        <p>Discover unparalleled quality, service, and joy in every purchase at Millets
                                            Retreat—where 100% Satisfaction is guaranteed, always.</p>
                                        <!-- <a href="#">Read more</a> -->
                                    </div>
                                </div>

                            </div>
                        </section>
                        <section class="row align-items-center mb-50">
                            <div class="row mb-50 align-items-center">
                                <div class="col-lg-7 pr-30">
                                    <img src="assets/imgs/about/image.jpg" alt="" class="mb-md-3 mb-lg-0 mb-sm-4" />
                                </div>
                                <div class="col-lg-5">
                                    <h4 class="mb-20 text-muted">Discover Our Story</h4>
                                    <h3 class="heading-1 mb-40">Our Commitment to Sustainability and Health</h3>
                                    <p class="mb-30">At Millets Retreat, we are dedicated to sustainability, supporting
                                        local farmers, and offering organic millets. Our mission is to prioritize health
                                        and eco-conscious practices in every aspect of our business.</p>
                                    <p>Embark on our journey towards sustainable living and nutritional excellence.
                                        Discover the harmonious blend of eco-conscious practices and premium organic
                                        millets for a healthier lifestyle.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 pr-30 mb-md-5 mb-lg-0 mb-sm-5">
                                    <h3 class="mb-30">Who we are</h3>
                                    <p>We are Millets Retreat, an e-commerce platform offering premium organic millets,
                                        supporting sustainability, fair trade, and traditional farming methods.
                                    </p>
                                </div>
                                <div class="col-lg-4 pr-30 mb-md-5 mb-lg-0 mb-sm-5">
                                    <h3 class="mb-30">Our history</h3>
                                    <p>Millets Retreat began by partnering with organic millet farmers, promoting fair
                                        trade, sustainability, and traditional farming methods for premium millets.
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <h3 class="mb-30">Our mission</h3>
                                    <p>Our mission is to promote sustainability, support local farmers, and provide
                                        premium organic millets with eco-friendly packaging and community engagement.
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- <section class="container mb-50 d-none d-md-block">
                <div class="row about-count">
                    <div class="col-lg-3 col-md-6 text-center mb-lg-0 mb-md-5">
                        <h1 class="heading-1"><span class="count">3</span>+</h1>
                        <h4>Years of experience</h4>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <h1 class="heading-1"><span class="count">500</span>+</h1>
                        <h4>Happy clients</h4>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <h1 class="heading-1"><span class="count">15</span>+</h1>
                        <h4>No.of Products</h4>
                    </div>

                    <div class="col-lg-3 text-center d-none d-lg-block">
                        <h1 class="heading-1"><span class="count">300</span>+</h1>
                        <h4>Products Sale</h4>
                    </div>
                </div>
            </section> -->

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