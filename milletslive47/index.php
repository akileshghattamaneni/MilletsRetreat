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
    <title>Millets</title>
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
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/main5103.css?v=6.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



</head>

<body>

    <?php include 'inc/header.php';?>

    <?php include 'inc/modals.php';?>

    <?php include 'inc/popup.php';?>


    <main class="main">
        <section class="home-slider position-relative mb-30">
            <div class="container1">
                <div class="home-slide-cover">
                    <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                        <div class="single-hero-slider single-animation-wrap"
                            style="background-image: url(assets/imgs/slider/slider-9.jpg)">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40 color">
                                    Don’t miss amazing<br />
                                    Millets deals
                                </h1>
                                <p class="mb-65" style="color: #AAC528;">Small grains with a big impact <br
                                        class="break">on health
                                    and
                                    sustainability.</p>
                                <!-- <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form> -->
                            </div>
                        </div>
                        <!-- <div class="single-hero-slider single-animation-wrap"
                            style="background-image: url(assets/imgs/slider/ban.jpg)">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40">
                                    Nutritious grains <br />for health.

                                </h1>
                                <p class="mb-65">Nourishing grains, embracing eco-friendly
                                    agriculture.</p>
                               
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="slider-arrow hero-slider-1-arrow"></div> -->
                </div>
            </div>
        </section>
        <!--End hero slider-->

        <!--Products Tabs-->
        <section class="section-padding pb-5">
            <div class="container">
                <div class="section-title">
                    <h3 class="">Best Seller</h3>
                    <ul class="nav nav-tabs links" id="myTab-2" role="tablist">

                        <li class="nav-item active" role="presentation">
                            <button class="nav-link active" id="myTabContent-1" data-bs-toggle="tab"
                                data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one"
                                aria-selected="true">Millets</button>
                        </li>

                        <li class="nav-item " role="presentation">
                            <button class="nav-link " id="nav-tab-two-1" data-bs-toggle="tab"
                                data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two"
                                aria-selected="false">Ready to Cook</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab"
                                data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three"
                                aria-selected="false">Flour</button>
                        </li>
                    </ul>
                </div>
                <div class="row">

                    <div class="col-lg-12 col-md-12">

                        <!--End tab-pane-->
                        <div class="tab-content" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel"
                                aria-labelledby="tab-one-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-2-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
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
                                                echo "<a class='add' href='?product_id={$id}' onclick='showToast()'><i class='fi-rs-shopping-cart mr-5'></i>Add </a>";
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


                            <div class="tab-pane fade  " id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='shop-product-full.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>

                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a href='shop-product-full.php'>Dosa & Idli Batter</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">1kg</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹70</span>
                                                    <span class="old-price">₹150</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='shop-product-full.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="image" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="image" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal1"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a href='shop-product-full.php'>Instant Foxtail Idli Mix</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">1kg</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹160</span>
                                                    <span class="old-price">₹185</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='shop-product-full.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="image" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="image" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal2"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a href='shop-product-full.php'>Little</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">1kg</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹180</span>
                                                    <span class="old-price">₹182</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='shop-product-full.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal3"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a href='shop-product-full.php'>Barnyard</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">1kg</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹160</span>
                                                    <span class="old-price">₹190</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='shop-product-full.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal4"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">


                                                <h2><a href='shop-product-full.php'>Multi Millet Dosa Mix</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">1kg</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹70</span>
                                                    <span class="old-price">₹150</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>
                                        </div>
                                        <!--End product Wrap-->

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-3-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='flour-product.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal11"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a href='flour-product.php'>Emmer Wheat Flour</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">1kg</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹180.8</span>
                                                    <span class="old-price">₹200</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>

                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='flour-product.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal11"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a href='flour-product.php'>Atta Wheat Flour</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">1kg</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹300</span>
                                                    <span class="old-price">₹385</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='flour-product.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal12"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a href='flour-product.php'>Siri Dhanya Atta</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">700gm</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹480</span>
                                                    <span class="old-price">₹522</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='flour-product.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal13"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href='flour-product.php'>White Wheat Flour</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">1kg</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹500</span>
                                                    <span class="old-price">₹600</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>
                                        </div>
                                        <!--End product Wrap-->
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='flour-product.php'>
                                                        <img class="default-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                        <img class="hover-img" src="assets/imgs/millets/11.png"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickViewModal14"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Save 15%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">

                                                <h2><a href='flour-product.php'>Organic Ragi Flour</a></h2>

                                                <div>
                                                    <span class="font-small text-muted">500gm</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>₹250</span>
                                                    <span class="old-price">₹280</span>
                                                </div>
                                                <div class="sold mt-15 mb-15">
                                                    <!-- <div class="progress mb-5">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="font-xs text-heading"> Sold: 90/120</span> -->
                                                </div>
                                                <!-- <a class='btn w-100 hover-up' href='shop-cart.php'><i
                                                        class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a> -->
                                            </div>
                                        </div>
                                        <!--End product Wrap-->

                                    </div>
                                </div>
                            </div>
                            <!--End tab-pane-->
                        </div>
                        <!--End Col-lg-9-->
                    </div>
                </div>
        </section>
        <!--End Best Sales-->



        <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Stay Home & Get Your Daily <br />
                                    Needs From Our Store
                                </h2>
                                <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand">Millets
                                        Retreat</span></p>
                                <a href="https://wa.me/+918074089813" class=" btn" target="_blank">Whatsapp</a>
                            </div>
                            <img src="assets/imgs/banner/transs.png" alt="newsletter" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-product-fillter mb-50">
                            <div class="totall-product">
                                <h2>
                                    <img class="w-36px mr-10" src="assets/imgs/theme/icons/category-1.svg" alt="" />
                                    Blog
                                </h2>
                            </div>
                            <!-- <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 04 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">04</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span>Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Featured</a></li>
                                            <li><a href="#">Newest</a></li>
                                            <li><a href="#">Most comments</a></li>
                                            <li><a href="#">Release Date</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                    <div class="loop-grid">
                        <div class="row">
                            <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                <div class="post-thumb">
                                    <a href='#'>
                                        <img class="border-radius-15" src="assets/imgs/blog/blog-1.jpg" alt="" />
                                    </a>
                                    <div class="entry-meta">
                                        <a class='entry-meta meta-2' href='#'><i class="fi-rs-heart"></i></a>
                                    </div>
                                </div>
                                <div class="entry-content-2">
                                    <!-- <h6 class="mb-10 font-sm"><a class='entry-meta text-muted' href='#'>Side
                                                Dish</a></h6> -->
                                    <h4 class="post-title mb-15">
                                        <a href='#'>Highly Protien Millets</a>
                                    </h4>

                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                <div class="post-thumb">
                                    <a href='#'>
                                        <img class="border-radius-15" src="assets/imgs/blog/blog-2.png" alt="" />
                                    </a>
                                </div>
                                <div class="entry-content-2">
                                    <!-- <h6 class="mb-10 font-sm"><a class='entry-meta text-muted' href='#'>Soups and
                                                Stews</a></h6> -->
                                    <h4 class="post-title mb-15">
                                        <a href='#'>Natural Grains</a>
                                    </h4>

                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                <div class="post-thumb">
                                    <a href='#'>
                                        <img class="border-radius-15" src="assets/imgs/blog/blog-3.png" alt="" />
                                    </a>
                                    <div class="entry-meta">
                                        <a class='entry-meta meta-2' href='#'><i class="fi-rs-link"></i></a>
                                    </div>
                                </div>
                                <div class="entry-content-2">
                                    <!-- <h6 class="mb-10 font-sm"><a class='entry-meta text-muted' href='#'>Salad</a>
                                        </h6> -->
                                    <h4 class="post-title mb-15">
                                        <a href='#'>Harvest Grains</a>
                                    </h4>

                                </div>
                            </article>
                            <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                <div class="post-thumb">
                                    <a href='#'>
                                        <img class="border-radius-15" src="assets/imgs/blog/blog-4.png" alt="" />
                                    </a>
                                </div>
                                <div class="entry-content-2">
                                    <!-- <h6 class="mb-10 font-sm"><a class='entry-meta text-muted' href='#'>Dessert</a>
                                        </h6> -->
                                    <h4 class="post-title mb-15">
                                        <a href='#'>Special Millets</a>
                                    </h4>

                                </div>
                            </article>


                        </div>
                    </div>
                </div>
            </div>


            <!-- <div class="container-fluid bg-body-tertiary py-3">
                <h2 style="text-align: center">Testimonials</h2>
                <div id="testimonialCarousel" class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card shadow-sm rounded-3">
                                <div class="quotes display-2 text-body-tertiary">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Millets Retreat has been a game-changer for me! As someone
                                        with
                                        dietary restrictions, finding quality millet products used to be a
                                        challenge. But
                                        with Millets Retreat, I can easily browse and purchase a wide variety of
                                        millet-based foods. Their website is user-friendly, and their customer
                                        service is
                                        top-notch!</p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img src="assets/imgs/vendor/testimonial-1.png"
                                            alt="bootstrap testimonial carousel slider 2">
                                        <div>
                                            <h5 class="card-title fw-bold">Harish</h5>
                                            
                                            <div class="stars">
                                                <input type="radio" id="star5" name="rating" value="5"><label
                                                    for="star5">&#9733;</label>
                                                <input type="radio" id="star4" name="rating" value="4"><label
                                                    for="star4">&#9733;</label>
                                                <input type="radio" id="star3" name="rating" value="3"><label
                                                    for="star3">&#9733;</label>
                                                <input type="radio" id="star2" name="rating" value="2"><label
                                                    for="star2">&#9733;</label>
                                                <input type="radio" id="star1" name="rating" value="1"><label
                                                    for="star1">&#9733;</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                                <div class="quotes display-2 text-body-tertiary">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">I've been a loyal customer of Millets Retreat for over a
                                        year now,
                                        and I can't recommend them enough. Not only do they offer an extensive
                                        selection of
                                        millet-based products, but their commitment to quality is evident in every
                                        purchase.
                                        Plus, their timely delivery and hassle-free shopping experience keep me
                                        coming back
                                        for more.</p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img src="assets/imgs/vendor/testimonial-1.png"
                                            alt="bootstrap testimonial carousel slider 2">
                                        <div>
                                            <h5 class="card-title fw-bold">Sanjay</h5>
                                           
                                            <div class="stars">
                                                <input type="radio" id="star5" name="rating" value="5"><label
                                                    for="star5">&#9733;</label>
                                                <input type="radio" id="star4" name="rating" value="4"><label
                                                    for="star4">&#9733;</label>
                                                <input type="radio" id="star3" name="rating" value="3"><label
                                                    for="star3">&#9733;</label>
                                                <input type="radio" id="star2" name="rating" value="2"><label
                                                    for="star2">&#9733;</label>
                                                <input type="radio" id="star1" name="rating" value="1"><label
                                                    for="star1">&#9733;</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                                <div class="quotes display-2 text-body-tertiary">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">As a health-conscious consumer, I'm always on the lookout
                                        for
                                        nutritious alternatives to traditional grains. That's why I'm so grateful to
                                        have
                                        discovered Millets Retreat. Their website makes it easy to find everything
                                        from
                                        millet flour to snacks, and their dedication to sustainability is
                                        commendable.
                                        Thanks to Millets Retreat, I can feel good about what I'm putting into my
                                        body.</p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img src="assets/imgs/vendor/testimonial-1.png"
                                            alt="bootstrap testimonial carousel slider 2">
                                        <div>
                                            <h5 class="card-title fw-bold">Akilesh</h5>
                                            
                                            <div class="stars">
                                                <input type="radio" id="star5" name="rating" value="5"><label
                                                    for="star5">&#9733;</label>
                                                <input type="radio" id="star4" name="rating" value="4"><label
                                                    for="star4">&#9733;</label>
                                                <input type="radio" id="star3" name="rating" value="3"><label
                                                    for="star3">&#9733;</label>
                                                <input type="radio" id="star2" name="rating" value="2"><label
                                                    for="star2">&#9733;</label>
                                                <input type="radio" id="star1" name="rating" value="1"><label
                                                    for="star1">&#9733;</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                                <div class="quotes display-2 text-body-tertiary">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Millets Retreat is a godsend for anyone looking to
                                        incorporate more
                                        millet into their diet. Not only do they offer a wide range of products, but
                                        their
                                        prices are competitive, and their customer service is exceptional. Whether
                                        you're a
                                        seasoned millet enthusiast or just starting to explore its benefits, I
                                        highly
                                        recommend giving Millets Retreat a try.</p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img src="assets/imgs/vendor/testimonial-1.png"
                                            alt="bootstrap testimonial carousel slider 2">
                                        <div>
                                            <h5 class="card-title fw-bold">Venkatesh</h5>
                                           
                                            <div class="stars">
                                                <input type="radio" id="star5" name="rating" value="5"><label
                                                    for="star5">&#9733;</label>
                                                <input type="radio" id="star4" name="rating" value="4"><label
                                                    for="star4">&#9733;</label>
                                                <input type="radio" id="star3" name="rating" value="3"><label
                                                    for="star3">&#9733;</label>
                                                <input type="radio" id="star2" name="rating" value="2"><label
                                                    for="star2">&#9733;</label>
                                                <input type="radio" id="star1" name="rating" value="1"><label
                                                    for="star1">&#9733;</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                                <div class="quotes display-2 text-body-tertiary">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">I stumbled upon Millets Retreat while searching for
                                        gluten-free
                                        options, and I'm so glad I did. Not only do they offer an impressive
                                        selection of
                                        millet-based foods, but their website is easy to navigate, and their
                                        shipping is
                                        lightning-fast. Plus, their commitment to supporting local farmers sets them
                                        apart
                                        from other e-commerce sites. I'll definitely be a repeat customer!</p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img src="assets/imgs/vendor/testimonial-1.png"
                                            alt="bootstrap testimonial carousel slider 2">
                                        <div>
                                            <h5 class="card-title fw-bold">Ajay</h5>
                                            
                                            <div class="stars">
                                                <input type="radio" id="star5" name="rating" value="5"><label
                                                    for="star5">&#9733;</label>
                                                <input type="radio" id="star4" name="rating" value="4"><label
                                                    for="star4">&#9733;</label>
                                                <input type="radio" id="star3" name="rating" value="3"><label
                                                    for="star3">&#9733;</label>
                                                <input type="radio" id="star2" name="rating" value="2"><label
                                                    for="star2">&#9733;</label>
                                                <input type="radio" id="star1" name="rating" value="1"><label
                                                    for="star1">&#9733;</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card shadow-sm rounded-3">
                                <div class="quotes display-2 text-body-tertiary">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Millets Retreat has truly transformed my approach to
                                        healthy
                                        eating. Being a fitness enthusiast, I'm always looking for nutritious,
                                        whole-food
                                        options to fuel my workouts. Millets Retreat offers a fantastic selection of
                                        millet-based products that not only taste great but also provide the
                                        sustainable
                                        energy I need to power through my day.
                                    </p>
                                    <div class="d-flex align-items-center pt-2">
                                        <img src="assets/imgs/vendor/testimonial-1.png"
                                            alt="bootstrap testimonial carousel slider 2">
                                        <div>
                                            <h5 class="card-title fw-bold">Sreekar</h5>
                                           
                                            <div class="stars">
                                                <input type="radio" id="star5" name="rating" value="5"><label
                                                    for="star5">&#9733;</label>
                                                <input type="radio" id="star4" name="rating" value="4"><label
                                                    for="star4">&#9733;</label>
                                                <input type="radio" id="star3" name="rating" value="3"><label
                                                    for="star3">&#9733;</label>
                                                <input type="radio" id="star2" name="rating" value="2"><label
                                                    for="star2">&#9733;</label>
                                                <input type="radio" id="star1" name="rating" value="1"><label
                                                    for="star1">&#9733;</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div> -->

    </main>

    <?php include 'inc/footer.php';?>

    <script>
    // Define a function to handle adding the product to the cart
    function addToCart(productId) {
        // Retrieve product details based on productId
        var productName = document.getElementById(productId).querySelector("h2 a").innerText;
        var productPrice = document.getElementById(productId).querySelector(".product-price span").innerText;

        // Construct the item object to add to the cart
        var item = {
            id: productId,
            name: productName,
            price: productPrice
            // You can add more details like quantity, image, etc., if needed
        };

        // Check if local storage is supported
        if (typeof(Storage) !== "undefined") {
            // Retrieve cart items from local storage
            var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

            // Add the item to the cart
            cartItems.push(item);

            // Save the updated cart items back to local storage
            localStorage.setItem("cartItems", JSON.stringify(cartItems));

            // Optionally, you can redirect the user to the cart page
            // window.location.href = "shop-cart.php";
        } else {
            // Local storage is not supported, handle this case gracefully
            alert("Sorry, your browser does not support local storage. Unable to add item to cart.");
        }
    }
    </script>

    <script>
    const stars = document.querySelectorAll('.stars input');
    const testimonial = document.querySelector('.testimonial');

    stars.forEach(star => star.addEventListener('click', function() {
        const rating = this.value;
        console.log('Rating:', rating);
        // You can add further logic here, like sending the rating to a server or displaying a thank you message.
    }));
    </script>



    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
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