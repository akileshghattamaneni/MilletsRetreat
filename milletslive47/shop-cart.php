<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Sample product data for display purposes
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
    // Add other products similarly...

];

// Function to display the cart contents
function displayCart() {
    global $products;

    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        echo "<div class='row'>";
        foreach ($_SESSION['cart'] as $productId => $productDetails) {
            if (isset($products[$productId])) {
                $product = $products[$productId];
                $quantity = isset($productDetails['quantity']) ? $productDetails['quantity'] : 1;
                $selectedSize = isset($productDetails['size']) ? $productDetails['size'] : "1Kg";
                $price = $product['prices'][$selectedSize];

                echo "<div class='col-md-4 mb-3'>";
                echo "<img src='{$product['image']}' alt='{$product['name']}' class='img-fluid' />";
                echo "<p>{$product['name']} - ₹<span id='price-$productId'>$price</span></p>";
                echo "<div class='quantity-control'>";
                echo "<button class='btn btn-outline-secondary btn-sm' onclick='updateQuantity($productId, -1)'>-</button>";
                echo "<span class='mx-2'>$quantity</span>";
                echo "<button class='btn btn-outline-secondary btn-sm' onclick='updateQuantity($productId, 1)'>+</button>";
                echo "<button class='btn btn-outline-danger btn-sm ml-2 pad' onclick='removeFromCart($productId)'><i class='fi-rs-trash'></i></button>";
                echo "<div class='attr-detail attr-size mb-30 float'>";
                echo "<strong class='mr-10'>Size / Weight: </strong>";
                echo "<ul class='list-filter size-filter font-small'>";
                
                $sizes = array("500gm", "1Kg");
                foreach ($sizes as $size) {
                    $class = ($size == $selectedSize) ? "active" : "";
                    echo "<li class='$class'><a href='update-size.php' onclick='updateSize($productId, \"$size\")'>$size</a></li>";
                }
                
                echo "</ul>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        }
        echo "</div>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
}
// Function to get the total cart price
function getCartTotal() {
    global $products;
    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $productId => $productDetails) {
            if (isset($products[$productId])) {
                $quantity = isset($productDetails['quantity']) ? $productDetails['quantity'] : 1;
                $size = isset($productDetails['size']) ? $productDetails['size'] : "1Kg";
                $price = $products[$productId]['prices'][$size];
                $total += $price * $quantity;
            }
        }
    }
    return $total;
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Millets Retreat | Shop Cart</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/logo/millets.png" />
    <link rel="stylesheet" href="assets/css/main5103.css?v=6.0">
    <style>
    .mb-3 {
        margin-bottom: 15px;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .btn-outline-danger {
        border-color: #dc3545;
        color: #dc3545;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: #fff;
    }
    </style>
</head>

<body>
    <?php include 'inc/header.php';?>

    <main class="main">
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h1 class="heading-2 mb-10">Your Cart</h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">There are <span
                                class="text-brand"><?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?></span>
                            products in your cart</h6>
                        <h6 class="text-body"><a href="clear-cart.php" class="text-muted"><i
                                    class="fi-rs-trash mr-5"></i>Clear Cart</a></h6>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <?php displayCart(); ?>
                    <div class="divider-2 mb-30"></div>
                    <div class="cart-action d-flex justify-content-between">
                        <a href="millets.php" class="btn"><i class="fi-rs-arrow-left mr-10"></i>Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="border p-md-4 cart-totals ml-30">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Total</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">₹<span
                                                    id="total-price"><?php echo getCartTotal(); ?></span></h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="#" class="btn mb-20 w-100" onclick="redirectToWhatsApp()">Proceed To CheckOut<i
                                class="fi-rs-sign-out ml-15"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'inc/footer.php';?>

    <script>
    function updateQuantity(productId, change) {
        console.log("Updating quantity for product ID:", productId, "Change:", change);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'update-cart.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                location.reload();
            }
        };
        xhr.send('productId=' + productId + '&change=' + change);
    }

    function removeFromCart(productId) {
        console.log("Removing product ID:", productId);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'remove-from-cart.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                location.reload();
            }
        };
        xhr.send('productId=' + productId);
    }

    function updateSize(productId, size) {
        console.log("Updating size for product ID:", productId, "Size:", size);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'update-size.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    const priceElement = document.getElementById(`price-${productId}`);
                    priceElement.textContent = response.newPrice;
                    updateTotalPrice();
                }
            }
        };
        xhr.send('productId=' + productId + '&size=' + size);
    }

    function redirectToWhatsApp() {
        const products = <?php echo json_encode($products); ?>;
        const cart = <?php echo json_encode($_SESSION['cart']); ?>;
        let message = "Hi, I would like to place an order for the following items:\n\n";

        for (const [productId, productDetails] of Object.entries(cart)) {
            if (products[productId]) {
                const product = products[productId];
                const quantity = productDetails['quantity'] || 1;
                const size = productDetails['size'] || "1Kg";
                const price = product['prices'][size];
                message += `${product.name} - ₹${price} x ${quantity} (${size})\n`;
            }
        }

        const total = <?php echo json_encode(getCartTotal()); ?>;
        message += `\nTotal: ₹${total}\n\nThank you!`;
        const whatsappUrl = `https://wa.me/+918074089813?text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    }

    function updateTotalPrice() {
        const totalElement = document.querySelector('.cart_total_amount h4');
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'get-cart-total.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                const totalPrice = xhr.responseText;
                totalElement.textContent = '₹' + totalPrice;
            }
        };
        xhr.send();
    }
    </script>

    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
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
    <!-- Template JS -->
    <script src="assets/js/main5103.js?v=6.0"></script>
</body>

</html>