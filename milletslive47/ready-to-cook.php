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

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

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
    <link rel="stylesheet" href="assets/css/main5103.css?v=6.0" />
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
                            <h1 class="mb-15">Ready to Cook</h1>
                            <div class="breadcrumb">
                                <a href='index.php' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Ready to Cook
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
                            <p>We found <strong class="text-brand">5</strong> items for you!</p>
                        </div>
                        <!-- <div class="sort-by-product-area">
                            <div class="sort-by-cover mr-10">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps"></i>Show:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> 5 <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">50</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">Featured</a></li>
                                        <li><a href="#">Price: Low to High</a></li>
                                        <li><a href="#">Price: High to Low</a></li>
                                        <li><a href="#">Release Date</a></li>
                                        <li><a href="#">Avg. Rating</a></li>
                                    </ul>
                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="row product-grid-4">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href='shop-product-full.php'>
                                        <img class="default-img" src="assets/imgs/millets/11.png" alt="" />
                                        <img class="hover-img" src="assets/imgs/millets/11.png" alt="" />
                                    </a>
                                </div>
                                <!-- <div class="product-action-1">
                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                            class="fi-rs-heart"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>

                                </div> -->
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">

                                <h2><a href='shop-product-full.php'>Dosa & Idli Batter</a></h2>

                                <div>
                                    <span class="font-small text-muted">1kg</span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₹70</span>
                                        <span class="old-price">₹150</span>
                                    </div>
                                    <!-- <div class="add-cart">
                                                <a class='add' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                            </div> -->
                                    <!-- <div class="add-cart">
                                        <a class="add" href="javascript:void(0);" onclick="addToCart('product1')">
                                            <i class="fi-rs-shopping-cart mr-5"></i>Add
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href='shop-product-full.php'>
                                        <img class="default-img" src="assets/imgs/millets/11.png" alt="image" />
                                        <img class="hover-img" src="assets/imgs/millets/11.png" alt="image" />
                                    </a>
                                </div>
                                <!-- <div class="product-action-1">
                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                            class="fi-rs-heart"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal1"><i class="fi-rs-eye"></i></a>
                                </div> -->
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">

                                <h2><a href='shop-product-full.php'>Instant Foxtail Idli Mix</a></h2>

                                <div>
                                    <span class="font-small text-muted">1kg</span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₹160</span>
                                        <span class="old-price">₹185</span>
                                    </div>
                                    <!-- <div class="add-cart">
                                        <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href='shop-product-full.php'>
                                        <img class="default-img" src="assets/imgs/millets/11.png" alt="" />
                                        <img class="hover-img" src="assets/imgs/millets/11.png" alt="" />
                                    </a>
                                </div>
                                <!-- <div class="product-action-1">
                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                            class="fi-rs-heart"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal2"><i class="fi-rs-eye"></i></a>
                                </div> -->
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">

                                <h2><a href='shop-product-full.php'>Little</a></h2>

                                <div>
                                    <span class="font-small text-muted">1kg</span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₹180</span>
                                        <span class="old-price">₹182</span>
                                    </div>
                                    <!-- <div class="add-cart">
                                        <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href='shop-product-full.php'>
                                        <img class="default-img" src="assets/imgs/millets/11.png" alt="" />
                                        <img class="hover-img" src="assets/imgs/millets/11.png" alt="" />
                                    </a>
                                </div>
                                <!-- <div class="product-action-1">
                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                            class="fi-rs-heart"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal3"><i class="fi-rs-eye"></i></a>
                                </div> -->
                            </div>
                            <div class="product-content-wrap">

                                <h2><a href='shop-product-full.php'>Barnyard</a></h2>

                                <div>
                                    <span class="font-small text-muted">1kg</span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₹160</span>
                                        <span class="old-price">₹190</span>
                                    </div>
                                    <!-- <div class="add-cart">
                                        <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".5s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href='shop-product-full.php'>
                                        <img class="default-img" src="assets/imgs/millets/11.png" alt="" />
                                        <img class="hover-img" src="assets/imgs/millets/11.png" alt="" />
                                    </a>
                                </div>
                                <!-- <div class="product-action-1">
                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                            class="fi-rs-heart"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal4"><i class="fi-rs-eye"></i></a>
                                </div> -->
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">-14%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">

                                <h2><a href='shop-product-full.php'>Multi Millet Dosa Mix</a></h2>

                                <div>
                                    <span class="font-small text-muted">1kg</span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>₹110</span>
                                        <span class="old-price">₹250</span>
                                    </div>
                                    <!-- <div class="add-cart">
                                        <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <!--end product card-->

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