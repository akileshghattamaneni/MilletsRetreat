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

<!-- Added by HTTrack -->
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
    <!--leaflet map-->
    <link rel="stylesheet" href="../unpkg.com/leaflet%401.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="../unpkg.com/leaflet%401.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
</head>

<body>

    <?php include 'inc/header.php';?>

    <main class="main pages">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <h1 class="mb-15">Contact Us</h1>
                            <div class="breadcrumb">
                                <a href='index.php' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Contact Us
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
                    <div class="col-lg-5 mx-auto text-center">
                        <h4 class="title heading-1 style-3 mb-40">Get in Touch with <span class="text-brand">Millets
                                Retreat</span></h4>
                        <p class="font-xl mb-80">Contact Millets Retreat today and let us help make
                            your experience memorable.
                        </p>
                    </div>
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="text-center mb-50">
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
                    </div>
                    <div class="col-xl-10 col-lg-12 mx-auto">
                        <div class="row">
                            <!-- Address Column -->
                            <div class="col-lg-6">
                                <div class="address-area padding-20-row-col mb-80">
                                    <h5 class="text-brand mb-10">Our Address</h5>
                                    <h2 class="mb-10">Find Us Here</h2>
                                    <p class="text-muted mb-30 font-sm">Visit our office at the below address or reach
                                        out via phone or email.</p>
                                    <div class="address-details">
                                        <p><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>
                                                &nbsp;Address:</strong></p>
                                        <p>Plot No. 15, Suryodhaya Colony, Bandlaguda Jaghir, Rangareddy District,
                                            500086.</p>
                                        <p><img src="assets/imgs/theme/icons/icon-contact.svg" alt="call" /><strong>
                                                &nbsp;Phone:</strong></p>
                                        <p><a href="tel:+918074089813">(+91) - 8074089813
                                            </a></p>
                                        <p><img src="assets/imgs/theme/icons/icon-email-2.svg" alt="mail" /><strong>
                                                &nbsp;Email:</strong></p>
                                        <p><a href="mailto:info@milletsretreat.com">info@milletsretreat.com</a></p>
                                        <!-- <p><strong>Business Hours:</strong></p>
                                        <p>Monday - Friday: 9:00 AM - 5:00 PM</p> -->


                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Column -->
                            <div class="col-lg-6">
                                <div class="contact-from-area padding-20-row-col mb-80">
                                    <h5 class="text-brand mb-10">Contact form</h5>
                                    <h2 class="mb-10">Drop Us a Line</h2>
                                    <p class="text-muted mb-30 font-sm">Your email address will not be published.
                                        Required fields are marked *</p>
                                    <form class="contact-form-style mt-30" id="contact-form" action="submit_form.php"
                                        method="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <input name="name" id="name" placeholder="First Name" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <input name="phone" id="phone" placeholder="Your Phone"
                                                        type="tel" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <input name="email" id="email" placeholder="Your Email"
                                                        type="email" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <input name="subject" id="subject" placeholder="Subject"
                                                        type="text" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="textarea-style mb-30">
                                                    <textarea name="message" id="message"
                                                        placeholder="Message"></textarea>
                                                </div>
                                                <button class="submit submit-auto-width" type="submit">Send
                                                    message</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messege"></p>
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
    <script src="assets/js/plugins/leaflet.js"></script>
    <!-- Template  JS -->
    <script src="assets/js/main5103.js?v=6.0"></script>
    <script src="assets/js/shop5103.js?v=6.0"></script>
</body>


<!-- Mirrored from nest-frontend-v6.netlify.app/page-contact by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 08:31:14 GMT -->

</html>