<?php include "includes/header.php"; ?>

<?php
session_start();
$userId = $_SESSION['id'];
$sql = "SELECT * FROM `address` WHERE `user_id` = ?";
$select = $conn->prepare($sql);
$select->execute([$userId]);
$carts = $select->fetchAll(PDO::FETCH_ASSOC);
print_r($_SESSION);
?>

<!-- offcanvas menu-->

<!-- offcanvas overlay -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas overlay -->

<!-- offcanvas mainmenu -->
<div class="offcanvas offcanvas-mainmenu">
    <div class="offcanvas-cancel">
        <img src="assets/img/icons/close-button.svg" class="svg" alt="">
    </div>
</div>
<!-- offcanvas mainmenu -->

<!-- wish list -->
<div class="offcanvas offcanvas-wishlist" id="wishlist">
    <div class="offcanvas-head">
        <div class="head-text">
            <img src="assets/img/icons/wishlist2.svg" class="svg" alt="">
            <h3>Wishlist</h3>
        </div>
        <div class="offcanvas-cancel">
            <img src="assets/img/icons/close-button.svg" class="svg" alt="">
        </div>
    </div>

    <div class="offcanvas-inner">
        <div class="added-wish-list">
            <!-- single wish list -->
            <div class="single-added-list">
                <!-- single wish list left -->
                <div class="single-item-left media align-items-center">
                    <img src="assets/img/clients/wishlist1.png" alt="">
                    <div class="single-item-details midea-body">
                        <h5><a href="#">Women's Strap Sandal</a></h5>
                        <p>$125</p>
                    </div>
                </div>
                <!-- End of single wish list left -->

                <!-- Single wish list right -->
                <div class="single-item-right text-right">
                    <a href="#"><img src="assets/img/icons/remove.svg" alt="" class="svg"></a>
                    <a href="#" class="btn addto-cart-btn">Add To Cart</a>
                </div>
                <!-- End of Single wish list right -->
            </div>
            <!-- End of single wish list -->

            <!-- single wish list -->
            <div class="single-added-list sold-item">
                <!-- single wish list left -->
                <div class="single-item-left media align-items-center">
                    <img src="assets/img/clients/wishlist2.png" alt="">
                    <div class="single-item-details midea-body">
                        <h5><a href="#">Wilson Dynasty 29” Basketball</a></h5>
                        <p>$25</p>
                    </div>
                </div>
                <!-- End of single wish list left -->

                <!-- Single wish list right -->
                <div class="single-item-right text-right">
                    <a href="#"><img src="assets/img/icons/remove.svg" alt="" class="svg"></a>
                    <a href="#" class="btn out-stock-btn">Out Of Stock</a>
                </div>
                <!-- End of Single wish list right -->
            </div>
            <!-- End of single wish list -->

            <!-- single wish list -->
            <div class="single-added-list">
                <!-- single wish list left -->
                <div class="single-item-left media align-items-center">
                    <img src="assets/img/clients/wishlist3.png" alt="">
                    <div class="single-item-details midea-body">
                        <h5><a href="#">HyperX Gaming Headset</a></h5>
                        <p>$15</p>
                    </div>
                </div>
                <!-- End of single wish list left -->

                <!-- Single wish list right -->
                <div class="single-item-right text-right">
                    <a href="#" class="remove-product" data-product-id="<?php echo $product['id']; ?>"><img src="assets/img/icons/remove.svg" alt="" class="svg"></a>
                    <a href="#" class="btn addto-cart-btn">Add To Cart</a>
                </div>
                <!-- End of Single wish list right -->
            </div>
            <!-- End of single wish list -->

            <!-- add to button an support -->
            <div class="view-cart-check-btn text-center">
                <a href="#" class='btn btn-fill-type'>View Cart List</a>
                <a href="#" class='btn btn-fill-type'>Check Out</a>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>
            <div class="cart-support">
                <p class="roboto">Support</p>
                <ul class="list-unstyled">
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        Phone: +00 654 321 9874
                    </li>
                    <li>
                        <span><i class="fa fa-map-marker"></i></span>
                        1622 Colins Street West, Strawberry (Le), ITALY
                    </li>
                </ul>
            </div>
            <!-- add to button an support -->
        </div>
    </div>
</div>
<!-- End of wish list -->

<!-- cart list -->

<!-- End of cart list -->

<!-- log in and register -->
<div class="offcanvas offcanvas-account">
    <div class="offcanvas-head">
        <div class="head-text">
            <img src="assets/img/icons/account2.svg" class="svg" alt="">
            <h3>Account</h3>
        </div>
        <div class="offcanvas-cancel">
            <img src="assets/img/icons/close-button.svg" class="svg" alt="">
        </div>
    </div>

    <div class="offcanvas-inner">
        <!-- login register -->
        <div class="login-register-wrap">
            <!-- login register nav -->
            <div class="login-register-nav">
                <nav class="nav lr-nav text-center">
                    <a id="nav-login-tab" data-toggle="tab" href="#login" class="active">Log In</a>
                    <a id="nav-register-tab" data-toggle="tab" href="#reg">Register</a>
                </nav>
            </div>
            <!-- End of login register nav -->

            <!-- login register content -->
            <div class="login-register-content tab-content">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="nav-login-tab">
                    <div class="primary-form parsley-validate">
                        <form action="#">
                            <!-- loging input -->
                            <div class="name-input input-field">
                                <label>
                                    <img src="assets/img/icons/account3.svg" class="svg" alt="">
                                </label>
                                <input type="text" placeholder='User name / Email Address' class="theme-input-style"
                                    required>
                            </div>

                            <div class="password-input input-field">
                                <label>
                                    <img src="assets/img/icons/regi-icon.svg" class="svg" alt="">
                                </label>
                                <input type="password" placeholder='password' class="theme-input-style" required>
                            </div>
                            <!-- loging input -->
                            <button type="submit" class="btn btn-fill-type">log In</button>
                        </form>
                        <p>Don’t have an account,<a href="#"> register now!</a></p>
                    </div>
                </div>

                <div class="tab-pane fade" id="reg" role="tabpanel" aria-labelledby="nav-login-tab">
                    <div class="primary-form parsley-validate">
                        <form action="#">
                            <!-- register input -->
                            <div class="name-input input-field">
                                <label>
                                    <img src="assets/img/icons/account-icon.svg" class="svg" alt="">
                                </label>
                                <input type="text" placeholder='User name / Email Address' class="theme-input-style"
                                    required>
                            </div>

                            <div class="email-input input-field">
                                <label>
                                    <img src="assets/img/icons/email-icon.svg" class="svg" alt="">
                                </label>
                                <input type="email" placeholder='email' class="theme-input-style" required>
                            </div>

                            <div class="password-input input-field">
                                <label>
                                    <img src="assets/img/icons/regi-icon.svg" class="svg" alt="">
                                </label>
                                <input type="password" placeholder='password' class="theme-input-style" required>
                            </div>
                            <!-- register input -->
                            <button type="submit" class="btn btn-fill-type">Register</button>
                        </form>
                        <p>Have an account,<a href="#">Log In now!</a></p>
                    </div>
                </div>
            </div>
            <!-- End of login register content -->
        </div>
        <!-- End of login register -->

        <!-- add to button an support -->
        <div class="cart-support">
            <p class="roboto">Support</p>
            <ul class="list-unstyled">
                <li>
                    <span><i class="fa fa-phone"></i></span>
                    Phone: +00 654 321 9874
                </li>
                <li>
                    <span><i class="fa fa-map-marker"></i></span>
                    1622 Colins Street West, Strawberry (Le), ITALY
                </li>
            </ul>
        </div>
        <!-- add to button an support -->
    </div>
</div>
<!-- End of log in and ragister -->

<!-- End of offcanvas menu-->

<!-- page title -->
<section class="page-title-inner" data-bg-img='assets/img/page-titlebg.png'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- page title inner -->
                <div class="page-title-wrap">
                    <div class="page-title-heading">
                        <h1 class="h2">CheckOut<span>Payment</span></h1>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="active"><a href="#">Check Out</a></li>
                    </ul>
                </div>
                <!-- End of page title inner -->
            </div>
        </div>
    </div>
</section>
<!-- End of page title -->

<!-- check out wrap -->
<section class="pt-100 pb-100">
    <div class="container">
        <!-- <div class="row">
            <div class="col-md-6">

<<<<<<< HEAD
    <!-- page title -->
    <section class="page-title-inner" data-bg-img='assets/img/page-titlebg.png'>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- page title inner -->
                    <div class="page-title-wrap">
                        <div class="page-title-heading"><h1 class="h2">CheckOut<span>Payment</span></h1></div>
                        <ul class="list-unstyled mb-0">
                            <li><a href="index.html">home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li class="active"><a href="#">Check Out</a></li>
                        </ul>
                    </div>
                    <!-- End of page title inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of page title -->
    
    <!-- check out wrap -->
    <section class="pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- checkout register wrap -->
                    <div class="checkout-register-wrap">
                        <div class="checkout-register">
                            <form action="#" method="POST">
                                <div class="checkout-register-title">
                                    <h5><a  data-toggle="collapse" href="#register" aria-expanded="false">Are You Returning Customer? <span> Click Here to Login</span> </a></h5>
                                </div>
                                <div class="checkout-register-input input-btn-style collapse show" id="register">
                                    <input type="email" class="theme-input-style" placeholder="Enter Your Email"  required>
                                    <input type="password" class="theme-input-style" placeholder="Enter Your Password"  required>
                                    <div class="form-btn-field">
                                        <button type="submit" class="btn">Log in</button>
                                        <label class="m-0"><input type="checkbox">Remember Me?</label>
                                        <a href="#">Forgot Your Password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End of checkout register wrap -->
                </div>

                <div class="col-md-6">
                    <!-- coupon register wrap -->
                    <div class="coupon-register-wrap">
                        <div class="coupon-register">
                            <form action="#" method="POST">
                                <div class="coupon-register-title"  >
                                    <h5> <a data-toggle="collapse" href="#coupon" aria-expanded="false">Have A Coupon? <span>Click here to enter your code</span></a></h5>
                                </div>
                                <div class="checkout-register-input input-btn-style collapse show" id="coupon">
                                    <input type="number" class="theme-input-style" placeholder='Coupon Code' name="coupon" required>
                                    <button type="submit" class="btn">Apply Coupon</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End of coupon register wrap -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- billing details wrap -->
                    <div class="billing-details-wrap">
                        <form id="checkoutForm">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <!-- billing details form-->
                                    <div class="billing-details">
                                        <div class="billing-heading">
                                            <h3>Billing Details</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- first name -->
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="theme-input-style" placeholder="First Name" name="first_name" required>
                                                </span>
                                                <!--End of first name -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- last name -->
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="theme-input-style" placeholder="Last Name" name="last_name" required>
                                                </span>
                                                <!--End of last name -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Phone No -->
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="number" class="theme-input-style" placeholder="Phone No" name="phone" required>
                                                </span>
                                                <!-- End of Phone No -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Email Address -->
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="email" class="theme-input-style" placeholder="Email Address" name="email"required>
                                                </span>
                                                <!-- End of Email Address -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Country -->
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="theme-input-style" placeholder="Country" name="country"required>
                                                </span>
                                                <!-- End of Country -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Town / City -->
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="theme-input-style" placeholder="Town / City" name="city">
                                                </span>
                                                <!-- End of Town / City -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Street Address -->
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="theme-input-style" placeholder="Street Address" name="street_address">
                                                    <input type="text" class="theme-input-style" placeholder="Street Address(optional)"name="street_addressop">
                                                </span>
                                                <!-- End of Street Address -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- District -->
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="theme-input-style" placeholder="District" name="dist">
                                                </span> 
                                                <!-- End of District -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Postcode / ZIP -->
                                                <span class="woocommerce-input-wrapper">
                                                    <input type="text" class="theme-input-style" placeholder="Postcode / ZIP" name="pin_code">
                                                </span>
                                                <!-- End of Postcode / ZIP -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- Creat an Account -->
                                                <div class="shop--create-account">
                                                    <label data-toggle="collapse" data-target="#collapse-3" class="collapsed">
                                                        <input type="checkbox">
                                                         Creat an Account?
                                                    </label>
                                                </div>
                                                <div class="shop--create-singin collapse" id="collapse-3">
                                                    <label>Create a Password <span>*</span></label>
                                                    <input type="password" class="theme-input-style" placeholder="Password" >
                                                </div>
                                                <!--End of Creat an Account -->
                                            </div>

                                            <div class="col-md-12">
                                                <!-- Ship To A Different Address -->
                                                <div class="shop--create-account">
                                                    <label data-toggle="collapse" data-target="#collapse-4" >
                                                   <input type="checkbox">
                                                       Ship To A Different Address?
                                                    </label>
                                                    <div class="shop--create-singin collapse" id="collapse-4">
                                                        <input type="text" class="theme-input-style mb-30" placeholder="stree Address">
                                                        <input type="text" class="theme-input-style" placeholder="appertment,suit,flate,(Optional)">
                                                    </div>
                                                </div>
                                                <!--End of Ship To A Different Address -->
                                            </div>

                                            <div class="col-md-12">
                                                <!-- order note -->
                                                <label class="billing-textarea">
                                                    Order Note
                                                </label>
                                                <textarea  id="taxtarea" placeholder="Notes about your order. e.g. special notes for delivery."></textarea>
                                                <!--End of order note -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of billing details form-->
                                </div>
                                <div class="col-lg-6">
                                    <!-- your order -->
                                    <div class="checkout-review-order-wrap">
                                        <!-- checkout-review-order -->
                                        <div class="woocommerce-checkout-review-order">
                                            <div class="review-order-header">
                                                <h3>Your order</h3>
                                            </div>
                                            <table class="review-order-table">
                                                <tbody>
                                                <tr>
                                                        <th>Product name</th>
                                                        <th>Total</th>
                                                    </tr>
                                                <?php
                                             $userId = $_SESSION['id'];
                                    
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
                        echo "<tr>
                                <td>{$product['name']} <span>{$cart['quantity']} X {$product['price']}</span></td>
                               <td>Rs.{$total}</td>
                              </tr>";
                    }
                                                
                                                ?>
                                                   
                                                    
                                                    <tr>
                                                        <td>Sub Total</td>
                                                        <td>Rs.<?php echo $totalAmount ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- checkout-review-order -->

                                        <!-- check Shipping warp -->
                                        <div class="check-shipping-wrap">
                                            <div class="check-shipping-heading">
                                                <h5>Shipping</h5>
                                            </div>
                                            <table class="check-shipping-table">
                                                <tbody>
                                                    <tr>
                                                        <td><label><input class="" type="radio" >
                                                        Free shipping</label></td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                       <td><label><input class="" type="radio" checked >
                                                        Flat rate: $10.00</label></td>
                                                        <td>$10</td> 
                                                    </tr>
                                                    <tr>
                                                       <td><label><input class="" type="radio" >
                                                        Local pickup: $5.00</label></td>
                                                        <td>&nbsp;</td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>$325</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- End of check Shipping warp -->

                                        <!-- payment system -->
                                        <div class="payment-system-wrap">
                                            <div class="payment-system-heading">
                                                <h5>Payment System</h5>
                                            </div>
                                            <table class="payment-system-table">
                                                <tbody>
                                                    <tr>
                                                        <td><label><input type="radio"  data-parsley-multiple="payment-type">Direct Bank Transfer</label></td>
                                                        <td><label><input class="" type="radio" name="payment_system" value="Check payments" data-parsley-multiple="payment-type">Check payments</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input class="" type="radio" name="payment_system" value="Cash on delivery"  data-parsley-multiple="payment-type" checked>Cash on delivery</label></td>
                                                        <td><label><input type="radio" name="payment_system" value="PayPal"  data-parsley-multiple="payment-type">PayPal</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label><input class="" type="radio" name="payment_system" value="Credit Card" data-parsley-multiple="payment-type">Credit Card (Stripe)</label></td>
                                                        <td><label><input type="radio" name="payment_system" value="Alipay" data-parsley-multiple="payment-type">Alipay</label></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--End of payment system -->
                                    </div>
                                    <!--End of your order -->
                                </div>
                                <div class="col-md-7">
                                    <!-- woocommerce-terms-and-conditions-wrapper -->
                                    <div class="terms-and-conditions-wrapper text-center">
                                        <p>Your personal data will be used to process your order,  support your<br> experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>.</p>
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                            <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                            <span>I agree to the <a href="#">terms and conditions</a></span>
                                        </label>
                                        <button type="submit" class="billing-submit-button btn btn-fill-type">Place Order</button>
                                    </div>
                                    <!-- End of woocommerce-terms-and-conditions-wrapper -->
=======
                <div class="checkout-register-wrap">
                    <div class="checkout-register">
                        <form action="#" method="POST">
                            <div class="checkout-register-title">
                                <h5><a data-toggle="collapse" href="#register" aria-expanded="false">Are You Returning
                                        Customer? <span> Click Here to Login</span> </a></h5>
                            </div>
                            <div class="checkout-register-input input-btn-style collapse show" id="register">
                                <input type="email" class="theme-input-style" placeholder="Enter Your Email" required>
                                <input type="password" class="theme-input-style" placeholder="Enter Your Password"
                                    required>
                                <div class="form-btn-field">
                                    <button type="submit" class="btn">Log in</button>
                                    <label class="m-0"><input type="checkbox">Remember Me?</label>
                                    <a href="#">Forgot Your Password?</a>
>>>>>>> 59ac74438a989725d55784875f21e3cbcf4d6e43
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-6">

                <div class="coupon-register-wrap">
                    <div class="coupon-register">
                        <form action="#" method="POST">
                            <div class="coupon-register-title">
                                <h5> <a data-toggle="collapse" href="#coupon" aria-expanded="false">Have A Coupon?
                                        <span>Click here to enter your code</span></a></h5>
                            </div>
                            <div class="checkout-register-input input-btn-style collapse show" id="coupon">
                                <input type="number" class="theme-input-style" placeholder='Coupon Code' name="coupon"
                                    required>
                                <button type="submit" class="btn">Apply Coupon</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div> -->
        <div class="row">
            <div class="col-ml-5 col-lg-6 py-3 mt-5">
                <div class="card">
                    <div class="p-2">
                        <div class="card-header d-flex justify-content-between">
                            <h5>Delivery Address</h5>
                            <div onclick="editAddress()" data-toggle="modal" data-target="#myModal">
                                <span>edit</span>
                            </div>

                        </div>

                        <div class="">
                            <?php

                            foreach ($carts as $cart) {
                                $cartjson = json_encode($cart);
                                $address_encode = base64_encode($cartjson);


                                ?>
                                <div>
                                    <input type="radio" class="addradio" data-address="<?php echo $address_encode ?>" name="address"
                                        id="adress_check_<?php echo $cart['id'] ?>">
                                    <label for="adress_check_<?php echo $cart['id'] ?>">
                                        <?php echo $cart['first_name'] . ' ' . $cart['last_name'] ?>
                                    </label>
                                    <p class="ms-3 editable px-2">
                                        <?php echo $cart['street_address'] . ' ' . $cart['city'] . ' ' . $cart['dist'] . ' ' . $cart['country'] . ' ' . $cart['postcode'] ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <div>
                                <div class="container mt-1">


                                    <!-- Button trigger collapse -->
                                    <button type="button" class="btn " data-toggle="collapse"
                                        data-target="#collapseExample">
                                        New Billing Details
                                    </button>

                                    <!-- Collapsible content -->
                                    <div class="collapse mt-3" id="collapseExample">
                                        <div class="card card-body">
                                            <form id="address_form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <!-- first name -->
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="theme-input-style"
                                                                placeholder="First Name" name="first_name" required>
                                                            <input type="hidden" name="user_id"
                                                                value="<?php echo $userId ?>">
                                                        </span>
                                                        <!--End of first name -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- last name -->
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="theme-input-style"
                                                                placeholder="Last Name" name="last_name" required>
                                                        </span>
                                                        <!--End of last name -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <!-- Phone No -->
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="number" class="theme-input-style"
                                                                placeholder="Phone No" name="phone" required>
                                                        </span>
                                                        <!-- End of Phone No -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <!-- Email Address -->
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="email" class="theme-input-style"
                                                                placeholder="Email Address" name="email" required>
                                                        </span>
                                                        <!-- End of Email Address -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <!-- Country -->
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="theme-input-style"
                                                                placeholder="Country" name="country" required>
                                                        </span>
                                                        <!-- End of Country -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- Town / City -->
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="theme-input-style"
                                                                placeholder="Town / City" name="city">
                                                        </span>
                                                        <!-- End of Town / City -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <!-- Street Address -->
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="theme-input-style"
                                                                placeholder="Street Address" name="street_address">
                                                            <input type="text" class="theme-input-style"
                                                                placeholder="Street Address(optional)"
                                                                name="street_addressOpt">
                                                        </span>
                                                        <!-- End of Street Address -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <!-- District -->
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="theme-input-style"
                                                                placeholder="District" name="dist">
                                                        </span>
                                                        <!-- End of District -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- Postcode / ZIP -->
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="theme-input-style"
                                                                placeholder="Postcode / ZIP" name="postcode">
                                                        </span>
                                                        <!-- End of Postcode / ZIP -->
                                                    </div>

                                                    <button type="submit" class="btn mt-2">Uploade</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- billing details wrap -->
                <div class="billing-details-wrap">
                    <form id="checkoutForm">
                        <div class="row justify-content-center">


                            <div class="col-lg-12">
                                <!-- your order -->
                                <div class="checkout-review-order-wrap">
                                    <!-- checkout-review-order -->
                                    <div class="woocommerce-checkout-review-order">
                                        <div class="review-order-header">
                                            <h3>Your order</h3>
                                        </div>
                                        <table class="review-order-table">
                                            <tbody>
                                                <tr>
                                                    <th>Product name</th>
                                                    <th>Total</th>
                                                </tr>
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
                                                    echo "<tr>
                                <td>{$product['name']} <span>{$cart['quantity']} X {$product['price']}</span></td>
                               <td>Rs.{$total}</td>
                              </tr>";
                                                }

                                                ?>


                                                <tr>
                                                    <td>Sub Total</td>
                                                    <td>Rs.
                                                        <?php echo $totalAmount ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- checkout-review-order -->

                                    <!-- check Shipping warp -->
                                    <!-- <div class="check-shipping-wrap">
                                        <div class="check-shipping-heading">
                                            <h5>Shipping</h5>
                                        </div>
                                        <table class="check-shipping-table">
                                            <tbody>
                                                <tr>
                                                    <td><label><input class="" type="radio">
                                                            Free shipping</label></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td><label><input class="" type="radio" checked>
                                                            Flat rate: $10.00</label></td>
                                                    <td>$10</td>
                                                </tr>
                                                <tr>
                                                    <td><label><input class="" type="radio">
                                                            Local pickup: $5.00</label></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>$325</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> -->
                                    <!-- End of check Shipping warp -->

                                    <!-- payment system -->
                                    <div class="payment-system-wrap">
                                        <div class="payment-system-heading">
                                            <h5>Payment System</h5>
                                        </div>
                                        <table class="payment-system-table">
                                            <tbody>
                                                <tr>
                                                    <td><label><input type="radio"
                                                                data-parsley-multiple="payment-type">Direct Bank
                                                            Transfer</label></td>
                                                    <td><label><input class="" type="radio" name="payment_system"
                                                                value="Check payments"
                                                                data-parsley-multiple="payment-type">Check
                                                            payments</label></td>
                                                </tr>
                                                <tr>
                                                    <td><label><input class="" type="radio" name="payment_system"
                                                                value="Cash on delivery"
                                                                data-parsley-multiple="payment-type" checked>Cash on
                                                            delivery</label></td>
                                                    <td><label><input type="radio" name="payment_system" value="PayPal"
                                                                data-parsley-multiple="payment-type">PayPal</label></td>
                                                </tr>
                                                <tr>
                                                    <td><label><input class="" type="radio" name="payment_system"
                                                                value="Credit Card"
                                                                data-parsley-multiple="payment-type">Credit Card
                                                            (Stripe)</label></td>
                                                    <td><label><input type="radio" name="payment_system" value="Alipay"
                                                                data-parsley-multiple="payment-type">Alipay</label></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--End of payment system -->
                                </div>
                                <!--End of your order -->
                            </div>
                            <div class="col-md-7">
                                <!-- woocommerce-terms-and-conditions-wrapper -->
                                <div class="terms-and-conditions-wrapper text-center">
                                    <p>Your personal data will be used to process your order, support your<br>
                                        experience throughout this website, and for other purposes described in our <a
                                            href="#">privacy policy</a>.</p>
                                    <label
                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                        <input type="checkbox"
                                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                        <span>I agree to the <a href="#">terms and conditions</a></span>
                                    </label>
                                    <button type="submit" class="billing-submit-button btn btn-fill-type">Place
                                        Order</button>
                                </div>
                                <!-- End of woocommerce-terms-and-conditions-wrapper -->
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End of billing details wrap -->
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <!-- Modal content goes here -->
                        <section class="pt-100 pb-100">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8 col-lg-12">
                                        <!-- login register -->
                                        <div class="login-register-wrap text-center main-log-regi">
                                            <!-- login register nav -->
                                            <h3>Delivery Address</h3>
                                            <!-- End of login register nav -->

                                            <!-- login register content -->
                                            <div class="login-register-content">

                                                <div class="primary-form parsley-validate">
                                                    <form method="post" id="address_form_modal">
                                                        <!-- loging input -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <!-- first name -->
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="theme-input-style" id="edit_first_name"
                                                                        placeholder="First Name" name="first_name"
                                                                        required>
                                                                        <input type="hidden" name="id" id="edit_id">
                                                                </span>
                                                                <!--End of first name -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <!-- last name -->
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="theme-input-style"
                                                                        placeholder="Last Name" name="last_name" id="edit_last_name"
                                                                        required>
                                                                </span>
                                                                <!--End of last name -->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <!-- Phone No -->
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="number" class="theme-input-style"
                                                                        placeholder="Phone No" id="edit_phone" name="phone" required>
                                                                </span>
                                                                <!-- End of Phone No -->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <!-- Email Address -->
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="email" class="theme-input-style"
                                                                        placeholder="Email Address" id="edit_email" name="email"
                                                                        required>
                                                                </span>
                                                                <!-- End of Email Address -->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <!-- Country -->
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="theme-input-style"
                                                                        placeholder="Country" id="edit_country" name="country" required>
                                                                </span>
                                                                <!-- End of Country -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <!-- Town / City -->
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="theme-input-style"
                                                                        placeholder="Town / City" id="edit_city" name="city">
                                                                </span>
                                                                <!-- End of Town / City -->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <!-- Street Address -->
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="theme-input-style"
                                                                        placeholder="Street Address" id="edit_street_address"
                                                                        name="street_address">
                                                                    <input type="text" class="theme-input-style"
                                                                        placeholder="Street Address(optional)" id="edit_street_addressOpt"
                                                                        name="street_addressOpt">
                                                                </span>
                                                                <!-- End of Street Address -->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <!-- District -->
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="theme-input-style"
                                                                        placeholder="District" id="edit_dist"  name="dist">
                                                                </span>
                                                                <!-- End of District -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <!-- Postcode / ZIP -->
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="theme-input-style"
                                                                        placeholder="Postcode / ZIP" id="edit_postcode" name="postcode">
                                                                </span>
                                                                <!-- End of Postcode / ZIP -->
                                                            </div>
                                                        </div>


                                                        <!-- loging input -->
                                                        <button type="submit" class="btn btn-fill-type mt-3"
                                                            name="login">Update</button>
                                                    </form>
                                                </div>



                                            </div>
                                            <!-- End of login register content -->
                                        </div>
                                        <!-- End of login register -->
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</section>
<!--End of check out wrap -->

<?php include "includes/footer.php"; ?>

<!-- <script>
    $("#checkoutForm").submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: 'checkoutApi.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {

                alert(response.message);
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(xhr, textStatus, errorThrown) {

                var error = JSON.parse(xhr.responseText);
                console.log(error.message);

            },
        });
    })
</script> -->

<script>
    $(document).ready(function () {
        $("#address_form,#address_form_modal").submit(function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            var formType = $(this).attr('id') === 'address_form_modal' ? 'updateAddress' : 'insertAddress';
            formData.append('type', formType);
            $.ajax({
                url: 'addressApi.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function (response) {

                    if (response.status === 'success') {
                        alert(response.message);

                    } else {
                        alert(response.message);
                    }
                },
                error: function (xhr, textStatus, errorThrown) {

                    console.log(xhr.responseText);
                    alert("An error occurred during the request.");
                }
            });
        });
    });
    function editAddress() {
        var selectedOption = $('input[name="address"]:checked');

        if (selectedOption.length > 0) {
          var dataAddress = selectedOption.data('address');
            var address = JSON.parse(atob(dataAddress));
            $('#edit_first_name').val(address.first_name);
            $('#edit_last_name').val(address.last_name);
            $('#edit_phone').val(address.phone);
            $('#edit_email').val(address.email);
            $('#edit_country').val(address.country);
            $('#edit_city').val(address.city);
            $('#edit_street_address').val(address.street_address);
            $('#edit_street_addressOpt').val(address.street_addressOpt);
            $('#edit_dist').val(address.dist);
            $('#edit_postcode').val(address.postcode);
            $('#edit_id').val(address.id);
        } else {
          alert("Please select an option");
        }
    }
</script>
<script>
$(document).ready(function() {
    
    $('.remove-product').on('click', function(e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        $.ajax({
            type: 'POST',
            url: 'checkoutApi.php',
            data: { productId: productId },
            success: function(response) {
                alert(response.message);
            },
            error: function(error) {
                console.error('Error:', error);
                alert("error");
            }
        });
    });
});
</script>
<script>
        $(document).ready(function() {
            $('#checkoutForm').submit(function(e) {
                e.preventDefault();
                var selectedOption = $('input[name="address"]:checked');

                if (selectedOption.length > 0) {
                    var dataAddress = selectedOption.data('address');
                    var address = JSON.parse(atob(dataAddress));
                    var address_id = address.id;
                    $.ajax({
                        type: 'POST',
                        url: 'process_orderApi.php',
                        data: {
                            address_id: address_id 
                        },
                        dataType : 'JSON',
                        success: function(response) {

                            console.log(response);
                           
                            alert('Order placed successfully!');
                        
                        },
                        error: function(error) {
                            console.error('Error:', error);
                        }
                    });
                }else{
                    alert('select address');
                }
   
            });
        });
    </script>