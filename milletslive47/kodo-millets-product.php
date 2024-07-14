<?php
session_start();

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Sample product data
$products = [
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
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/main5103.css?v=6.0" />
</head>

<body class="single-product">

    <?php include 'inc/header.php';?>
    <?php include 'inc/modals.php';?>

    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <h1 class="mb-15">Kodo Millet (Arikelu)</h1>
                            <div class="breadcrumb">
                                <a href='index.php' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Kodo Millet (Arikelu)
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
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50 mt-30">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <?php
                        // Array of image paths
                        $imagePaths = array(
                            "assets/imgs/millets/millet/kodo-millets/1.png",
                            "assets/imgs/millets/millet/kodo-millets/2.png",
                            "assets/imgs/millets/millet/kodo-millets/3.png",
                            "assets/imgs/millets/millet/kodo-millets/4.png",
                            "assets/imgs/millets/millet/kodo-millets/5.png",
                            "assets/imgs/millets/millet/kodo-millets/6.png",
                            "assets/imgs/millets/millet/kodo-millets/7.png",
                            "assets/imgs/millets/millet/kodo-millets/8.png",
                            "assets/imgs/millets/millet/kodo-millets/9.png"
                        );
                        // Loop through image paths and generate <figure> tags
                        foreach ($imagePaths as $imagePath) {
                            echo '<figure class="border-radius-10">
                                    <img src="' . $imagePath . '" alt="product image" />
                                </figure>';
                        }
                        ?>
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                        <?php
                        // Loop through image paths and generate thumbnail <div> tags
                        foreach ($imagePaths as $imagePath) {
                            echo '<div><img src="' . $imagePath . '" alt="product image" /></div>';
                        }
                        ?>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">

                                    <h2 class="title-detail">Kodo Millet (Arikelu)</h2>

                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price text-brand">&#8377;260</span>

                                        </div>
                                    </div>
                                    <div class="short-desc mb-30">
                                        <p class="font-lg">Kodo millet, also known as kodo rice, is a nutrient-rich
                                            grain
                                            that has
                                            gained popularity for its health benefits and culinary
                                            versatility. From
                                            traditional staples to modern innovations, kodo millet offers a
                                            diverse
                                            range of products that cater to various dietary preferences and
                                            culinary
                                            tastes.</p>
                                    </div>
                                    <!-- <div class="attr-detail attr-size mb-30">
                                        <strong class="mr-10">Size / Weight: </strong>
                                        <ul class="list-filter size-filter font-small">
                                            <li><a href="#">500g</a></li>
                                            <li class="active"><a href="#">1kg</a></li>

                                        </ul>
                                    </div> -->
                                    <div class="detail-extralink mb-50">
                                        <!-- <div class="detail-qty border radius">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div> -->
                                        <div class="product-extra-link2">
                                            <!-- Assuming you have a product ID stored in $productId variable -->

                                        </div>

                                        <div class="divider-2 mb-30"></div>
                                        <div class="cart-action d-flex justify-content-between">
                                            <?php
                            $productId = 7;
                            $id = 7; // Example product ID
                            echo "<a class='add btn' href='?product_id={$id}' onclick='showToast()'><i class='fi-rs-shopping-cart mr-5'></i>Add to Cart</a>";
                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="font-xs">
                                        <ul class="mr-50 float-start">
                                            <li class="mb-5">Type: <span class="text-brand">Organic</span></li>
                                            <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2024</span></li>
                                            <li>LIFE: <span class="text-brand">70 days</span></li>
                                        </ul>
                                        <ul class="float-start">
                                            <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                            <li class="mb-5">Tags: <a href="#" rel="tag">Snack</a>, <a href="#"
                                                    rel="tag">Organic</a>, <a href="#" rel="tag">Brown</a></li>
                                            <li>Stock:<span class="in-stock text-brand ml-5">8 Items In Stock</span>
                                            </li>
                                        </ul>
                                    </div> -->

                                <div class="divider-2 mb-30"></div>
                                <div class="cart-action d-flex justify-content-between">
                                    <a href="millets.php" class="btn"><i class="fi-rs-arrow-left mr-10"></i>Continue
                                        Shopping</a>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>



                    <div class="row mt-60">
                        <div class="col-12">
                            <h2 class="section-title style-1 mb-30">Related products</h2>
                        </div>
                        <div class="col-12">
                            <div class="row related-products">
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap hover-up">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href='organic-foxtail-millet-product.php' tabindex='0'>
                                                    <img class="default-img" src="assets/imgs/millets/millet/12.png"
                                                        alt="" />
                                                    <img class="hover-img" src="assets/imgs/millets/millet/12.png"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <!-- <div class="product-action-1">
                                                <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                        class="fi-rs-heart"></i></a>

                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal5"><i class="fi-rs-eye"></i></a>
                                            </div> -->
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href='organic-foxtail-millet-product.php' tabindex='0'>Organic
                                                    Foxtail Millet</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>1kg </span>
                                            </div>
                                            <div class="product-price">
                                                <span>₹110</span>
                                                <span class="old-price">₹150</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap hover-up">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href='sorghum-whole-millet-product.php' tabindex='0'>
                                                    <img class="default-img"
                                                        src="assets/imgs/millets/millet/sorghum-millets/1.png"
                                                        alt="image" />
                                                    <img class="hover-img"
                                                        src="assets/imgs/millets/millet/sorghum-millets/1.png" alt="" />
                                                </a>
                                            </div>
                                            <!-- <div class="product-action-1">
                                                <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                        class="fi-rs-heart"></i></a>

                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal6"><i class="fi-rs-eye"></i></a>
                                            </div> -->
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href='sorghum-whole-millet-product.php' tabindex='0'>Sorghum
                                                    Whole Millet</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>1kg </span>
                                            </div>
                                            <div class="product-price">
                                                <span>₹90 </span>
                                                <span class="old-price">₹155</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap hover-up">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href='ragi-finger-millet-product.php' tabindex='0'>
                                                    <img class="default-img"
                                                        src="assets/imgs/millets/millet/finger-millets/2.png" alt="" />
                                                    <img class="hover-img"
                                                        src="assets/imgs/millets/millet/finger-millets/2.png" alt="" />
                                                </a>
                                            </div>
                                            <!-- <div class="product-action-1">
                                                <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                        class="fi-rs-heart"></i></a>

                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal7"><i class="fi-rs-eye"></i></a>
                                            </div> -->
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="sale">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href='ragi-finger-millet-product.php' tabindex='0'>Ragi Finger
                                                    Millet</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>1kg </span>
                                            </div>
                                            <div class="product-price">
                                                <span>₹90 </span>
                                                <span class="old-price">₹172</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap hover-up">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href='pearl-millets-product.php' tabindex='0'>
                                                    <img class="default-img"
                                                        src="assets/imgs/millets/millet/pearl-millets/1.png" alt="" />
                                                    <img class="hover-img"
                                                        src="assets/imgs/millets/millet/pearl-millets/1.png" alt="" />
                                                </a>
                                            </div>
                                            <!-- <div class="product-action-1">
                                                <a aria-label='Add To Wishlist' class='action-btn' href='#'><i
                                                        class="fi-rs-heart"></i></a>

                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal8"><i class="fi-rs-eye"></i></a>
                                            </div> -->
                                            <div class="product-badges product-badges-position product-badges-mrg">

                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href='pearl-millets-product.php' tabindex='0'>Pearl
                                                    Millets</a>
                                            </h2>
                                            <div class="rating-result" title="90%">
                                                <span>1kg </span>
                                            </div>
                                            <div class="product-price">
                                                <span>₹100 </span>
                                                <span class="old-price">₹150</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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


<!-- Mirrored from nest-frontend-v6.netlify.app/shop-product-full by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 08:30:22 GMT -->

</html>