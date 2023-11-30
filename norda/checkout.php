<?php include "./includes/header.php"; ?>
<?php
// session_start();
// $userId = $_SESSION['id'];
$userId = 4;
$sql = "SELECT * FROM `address` WHERE `user_id` = ?";
$select = $conn->prepare($sql);
$select->execute([$userId]);
$carts = $select->fetchAll(PDO::FETCH_ASSOC);
// print_r($_SESSION);
?>

<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="active">Checkout </li>
            </ul>
        </div>
    </div>
</div>
<div class="checkout-main-area pt-120 pb-120">
    <div class="container">
        <div class="customer-zone mb-20">
            <p class="cart-page-title">Returning customer? <a class="checkout-click1" href="#">Click here to login</a>
            </p>
            <div class="checkout-login-info">
                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                    customer, please proceed to the Billing & Shipping section.</p>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="sin-checkout-login">
                                <label>Username or email address <span>*</span></label>
                                <input type="text" name="user-name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="sin-checkout-login">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="user-password">
                            </div>
                        </div>
                    </div>
                    <div class="button-remember-wrap">
                        <button class="button" type="submit">Login</button>
                        <div class="checkout-login-toggle-btn">
                            <input type="checkbox">
                            <label>Remember me</label>
                        </div>
                    </div>
                    <div class="lost-password">
                        <a href="#">Lost your password?</a>
                    </div>
                </form>
                <div class="checkout-login-social">
                    <span>Login with:</span>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Google</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="customer-zone mb-20">
            <p class="cart-page-title">Have a coupon? <a class="checkout-click3" href="#">Click here to enter your
                    code</a></p>
            <div class="checkout-login-info3">
                <form action="#">
                    <input type="text" placeholder="Coupon code">
                    <input type="submit" value="Apply Coupon">
                </form>
            </div>
        </div>
        <div class="checkout-wrap pt-30">
        <form id="checkoutForm">
            <div class="row">
                
                <div class="col-lg-7">
                    <div class="billing-info-wrap mr-50">

                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>First Name <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" class="theme-input-style" id="edit_first_name" name="first_name"
                                        required>
                                    <input type="hidden" name="user_id" value="<?php echo $userId ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Last Name <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="last_name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Company Name <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="company_name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20">
                                    <label>Country <abbr class="required" title="required">*</abbr></label>
                                    <select name="country">
                                        <option>Select a country</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Street Address <abbr class="required" title="required">*</abbr></label>
                                    <input class="billing-address" placeholder="House number and street name"
                                        type="text">
                                    <input placeholder="Apartment, suite, unit etc." type="text" name="street_address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="town">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info mb-20">
                                    <label>State / County <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="state">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info mb-20">
                                    <label>Postcode / ZIP <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="pin_code">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info mb-20">
                                    <label>Phone <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info mb-20">
                                    <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="checkout-account mb-25">
                            <input class="checkout-toggle2" type="checkbox">
                            <span>Create an account?</span>
                        </div>
                        <div class="checkout-account-toggle open-toggle2 mb-30">
                            <label>Email Address</label>
                            <input placeholder="Password" type="password">
                        </div>
                        <div class="checkout-account mt-25">
                            <input class="checkout-toggle" type="checkbox">
                            <span>Ship to a different address?</span>
                        </div>
                        <div class="different-address open-toggle mt-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>First Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Last Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Company Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20">
                                        <label>Country</label>
                                        <select>
                                            <option>Select a country</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Street Address</label>
                                        <input class="billing-address" placeholder="House number and street name"
                                            type="text">
                                        <input placeholder="Apartment, suite, unit etc." type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Town / City</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>State / County</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Postcode / ZIP</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Phone</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Email Address</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <label>Order notes</label>
                            <textarea placeholder="Notes about your order, e.g. special notes for delivery. "
                                name="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    
                        <div class="your-order-area">
                            <h3>Your order</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-info-wrap">
                                    <div class="your-order-info">
                                        <ul>
                                            <li>Product <span>Total</span></li>
                                        </ul>
                                    </div>

                                    <!-- <div class="your-order-middle">
                                    <ul>
                                        <li>Product Name X 1 <span>$329 </span></li>
                                        <li>Product Name X 1 <span>$329 </span></li>
                                    </ul>
                                </div> -->
                                    <div class="your-order-middle">
                                        <ul>
                                            <li style="list-style:none;">

                                                <?php

                                                $sql = "SELECT * FROM `add_to_carts` WHERE `user_id` = ?";
                                                $select = $conn->prepare($sql);
                                                $select->execute([$userId]);
                                                $carts = $select->fetchAll(PDO::FETCH_ASSOC);
                                                $totalAmount = 0;
                                                foreach ($carts as $cart) {
                                                    $product = $conn->prepare("SELECT * FROM `products` WHERE `id` = ?");
                                                    $product->execute([$cart["product_id"]]);
                                                    $product = $product->fetch(PDO::FETCH_ASSOC);
                                                    $total = $product['price'] * $cart['quantity'];
                                                    $totalAmount += $total;
                                                    echo "<ul>
    <li>{$product['name']} X {$cart['quantity']} <span>Rs. {$total}</span></li>
  </ul>";

                                                }

                                                ?>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="your-order-info order-subtotal">
                                        <ul>
                                            <li>Subtotal <span>Rs.
                                                    <?php echo $totalAmount ?>
                                                </span></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-info order-shipping">
                                        <ul>
                                            <li>Shipping <p>Enter your full address </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="your-order-info order-total">
                                        <ul>
                                            <li>Total <span>Rs.
                                                    <?php echo $totalAmount ?>
                                                </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="pay-top sin-payment">
                                        <input id="payment_method_1" class="input-radio" type="radio" value="DBT"
                                            name="payment_system">
                                        <label for="payment_method_1"> Direct Bank Transfer </label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order
                                                ID as
                                                the payment reference.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-2" class="input-radio" type="radio"
                                            value="Check payments" name="payment_system">
                                        <label for="payment-method-2">Check payments</label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order
                                                ID as
                                                the payment reference.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-3" class="input-radio" type="radio"
                                            value="Cash on delivery" checked="checked" name="payment_system">
                                        <label for="payment-method-3">Cash on delivery </label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order
                                                ID as
                                                the payment reference.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment sin-payment-3">
                                        <input id="payment-method-4" class="input-radio" type="radio" value="PayPal"
                                            name="payment_system">
                                        <label for="payment-method-4">PayPal <img alt=""
                                                src="assets/images/icon-img/payment.png"><a href="#">What is
                                                PayPal?</a></label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order
                                                ID as
                                                the payment reference.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Place-order">
                            <a id="placeOrderBtn" href="#">Place Order</a>
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="subscribe-area bg-gray pt-115 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="section-title">
                    <h2>keep connected</h2>
                    <p>Get updates by subscribe our weekly newsletter</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div id="mc_embed_signup" class="subscribe-form">
                    <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate=""
                        target="_blank" name="mc-embedded-subscribe-form" method="post"
                        action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                        <div id="mc_embed_signup_scroll" class="mc-form">
                            <input class="email" type="email" required="" placeholder="Enter your email address"
                                name="EMAIL" value="">
                            <div class="mc-news" aria-hidden="true">
                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                            </div>
                            <div class="clear">
                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe"
                                    value="Subscribe">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "./includes/footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Attach a click event to the "Place Order" button
        $("#placeOrderBtn").click(function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Create FormData object
            var formData = new FormData(document.getElementById("checkoutForm"));

            // Send an Ajax request
            $.ajax({
                type: "POST",
                url: "process_orderApi.php", // Replace with the actual path to your PHP script
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    // Display the success message or handle the response accordingly
                    alert(response);
                },
                error: function (xhr, status, error) {
                    // Handle errors here
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
