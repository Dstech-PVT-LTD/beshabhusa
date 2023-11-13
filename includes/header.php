<?php
include "includes/config.php";
session_start();
$id = $_SESSION['id'];
$fetchCategoryStmt = $conn->prepare("SELECT * FROM `categories` ORDER BY `id` DESC");

$fetchCategoryStmt->execute([]);


$fetchServiceStmt = $conn->prepare("SELECT * FROM `add_to_carts` WHERE `user_id`= ?");

$fetchServiceStmt->execute([$id]);
$fetchService = $fetchServiceStmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Document Title -->
    <title>Ecommerce</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <!-- CSS Files -->
    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7CRoboto+Condensed:300,400,700"
        rel="stylesheet">

    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Owl Carusel css file -->
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.min.css">


    <!-- Magnific-Popup css file -->
    <link rel="stylesheet" href="assets/plugins/Magnific-Popup/magnific-popup.css">

    <!-- animate css file -->
    <link rel="stylesheet" href="assets/plugins/animate-css/animate.min.css">

    <!-- swiper -->
    <link rel="stylesheet" href="assets/plugins/swiper/swiper.min.css">

    <!--==== Style css file ====-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--==== Responsive css file ====-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--==== Custom css file ====-->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preLoader">
        <div class="preloder-inner">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div> -->
    <!-- End Of Preloader -->

    <!-- main header -->
    <header class="header">
        <div class="main-header-wraper main-header inner-page-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-3">
                        <div class="logo-container">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img class='default-logo' src="assets/img/beshabhusa.png" width="100px" data-rjs="2"
                                        alt="ecommerce">
                                    <img class='sticky-logo' src="assets/img/beshabhusa.png" width="100px" data-rjs="2"
                                        alt="ecommerce">
                                </a>
                            </div>
                            <!-- End of Logo -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                        <!-- menu container -->
                        <div class="menu-container">
                            <div class="menu-wraper">
                                <nav>
                                    <!-- Header-menu -->
                                    <div class="header-menu dosis">
                                        <div id="menu-button"><i class="fa fa-bars"></i></div>
                                        <ul>
                                            <li>
                                                <a href="index.php">Home</a>

                                            </li>
                                            <li>
                                                <a href="shop-4col-withbar.php">Shop</a>
                                            </li>
                                            <li>
                                                <a href="#">Catagories</a>
                                                <ul>
                                                    <?php
                                                    $sl = 1;
                                                    while ($row = $fetchCategoryStmt->fetch()) {

                                                        $id = base64_encode($row['id']); ?>
                                                        <li><a href="cat.php?catId=<?php echo $id; ?>">
                                                                <?php echo $row['name']; ?>
                                                            </a></li>

                                                        <?php
                                                        $sl++;
                                                    }
                                                    ?>

                                                </ul>
                                            </li>
                                            <!-- <li><a href="#">collection</a>
                                                <ul>
                                                    <li><a href="collection-page1.php">Collection 1</a></li>
                                                    <li><a href="collection-page2.html">Collection 2</a></li>
                                                    <li><a href="collection-page3.html">Collection 3</a></li>
                                                    <li><a href="collection-page4.html">Collection 4</a></li>
                                                </ul>
                                            </li> -->
                                            <li>
                                                <a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="cart-list.html">Cart List</a></li>
                                                    <li><a href="checkout.html">Check Out</a></li>
                                                    <li><a href="wish-list.html">Wish List</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="myaccount.html">My Account</a></li>
                                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                                    <li><a href="search-result.html">Search Results</a></li>
                                                    <li><a href="logout.html">Log Out</a></li>
                                                    <li><a href="#">Coming Soon</a>
                                                        <ul>
                                                            <li><a href="comming-soon.html">Coming Soon 01</a></li>
                                                            <li><a href="comming-soon2.html">Coming Soon 02</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">404 Page</a>
                                                        <ul>
                                                            <li><a href="error1.html">404 Page 1</a></li>
                                                            <li><a href="error2.html">404 Page 2</a></li>
                                                            <li><a href="error3.html">404 Page 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li>
                                                <a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog-2clumn.html">Blog Layout</a></li>
                                                    <li><a href="blog-2clumn-withbar.html">Blog Right Sidebar</a></li>
                                                    <li><a href="blog-pinterest.html">Blog Pinterest</a></li>
                                                    <li><a href="blog-pinterest-withbar.html">Blog Pinterest with Sidebar</a></li>
                                                    <li><a href="blog-list.html">Blog list</a></li>
                                                    <li><a href="blog-list-withbar.html">Blog list with Sidebar</a></li>
                                                    <li><a href="blog-details-withbar.html">Blog Details With Sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Header-menu -->
                                </nav>
                            </div>
                        </div>
                        <!-- menu container -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 top-order">
                        <!-- modal menu -->
                        <div class="modal-menu-container">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <div class="search-btn" title="search">
                                        <a href="#">
                                            <img src="assets/img/icons/search-button.svg" alt="" class="svg">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-btn" title="Cart list">
                                        <a href="login.html">
                                            <img src="assets/img/icons/add-bag.svg" alt="" class="svg">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="wishlist-btn-off" title="Wish list">
                                        <a href="#">
                                            <img src="assets/img/icons/wishlist.svg" alt="" class="svg">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div title="account list">
                                        <a href="login.php">
                                            <img src="assets/img/icons/account.svg" alt="" class="svg">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-btn" title="Category menu">
                                        <a href="#">
                                            <img src="assets/img/icons/manu-button.svg" alt="" class="svg">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End of modal menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of main header -->

    <!-- Catagory menu -->
    <div class="slidenav catagory-menu">
        <div class="menu-navigation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="catagory-menu-header d-flex  align-items-center">
                            <div class="logo">
                                <a href="index.html"><img class='default-logo' src="assets/img/logo.png" data-rjs="2"
                                        alt="ecommerce"></a>
                            </div>
                            <div class="menu-cancel">
                                <img src="assets/img/icons/close-button.svg" class="svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search-bar primary-form parsley-validate">
                            <form action="#">
                                <input type="text" class="theme-input-style" placeholder="Type Your Search Here"
                                    required>
                                <input type="submit" class="search-icon" value="&#xF002;" disabled>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 offset-lg-1">
                        <div class="catagory-menu-wrap">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="#">Men</a>
                                        <span><img src="assets/img/icons/man.svg" class="svg" alt=""></span>
                                        <ul>
                                            <li><a href="#">Top Wear</a></li>
                                            <li><a href="#">Bottom Wear</a></li>
                                            <li><a href="#">Foot Wear</a></li>
                                            <li><a href="#">Inner Wear</a></li>
                                            <li><a href="#">Traditional Wear</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Accessoriesear</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Accessoriesear</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Women</a>
                                        <span><img src="assets/img/icons/woman.svg" class="svg" alt=""></span>
                                        <ul>
                                            <li><a href="#">Kurti & Fatua</a></li>
                                            <li><a href="#">Salwar Kameez</a></li>
                                            <li><a href="#">Boutique Dress</a></li>
                                            <li><a href="#">Saree</a></li>
                                            <li><a href="#">Gown</a></li>
                                            <li><a href="#">Lehenga</a></li>
                                            <li><a href="#">Palazzo</a></li>
                                            <li><a href="#">Kurti & Fatua</a></li>
                                            <li><a href="#">Salwar Kameez</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Kids</a>
                                        <span><img src="assets/img/icons/kid.svg" class="svg" alt=""></span>
                                        <ul>
                                            <li><a href="#">Gear & Activity</a></li>
                                            <li><a href="#">Baby Carriers</a></li>
                                            <li><a href="#">Nursery</a></li>
                                            <li><a href="#">Diapering</a></li>
                                            <li><a href="#">Nursing & Feeding</a></li>
                                            <li><a href="#">Baby Toys</a></li>
                                            <li><a href="#">Bath & Potty</a></li>
                                            <li><a href="#">Health & Safety</a></li>
                                            <li><a href="#">Baby Clothing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Home Decor</a>
                                        <span><img src="assets/img/icons/home-dec.svg" class="svg" alt=""></span>
                                        <ul>
                                            <li><a href="#">Smart Home</a></li>
                                            <li><a href="#">Bath</a></li>
                                            <li><a href="#">Bedding</a></li>
                                            <li><a href="#">Furniture</a></li>
                                            <li><a href="#">Home Appliances</a></li>
                                            <li><a href="#">Home Improvement</a></li>
                                            <li><a href="#">Kids' Home</a></li>
                                            <li><a href="#">Kitchen & Dining</a></li>
                                            <li><a href="#">Lamps & Lighting</a></li>
                                            <li><a href="#">Luggage</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Catagory menu -->



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
    <!-- offcanvas mainmenu -->
    <div class="offcanvas header-offcanvas2">
        <div class="offcanvas-cancel">
            <img src="assets/img/icons/close-button.svg" class="svg" alt="">
        </div>
    </div>
    <!-- offcanvas mainmenu -->

    <!-- cart list -->
    <div class="offcanvas offcanvas-cart-list">
        <div class="offcanvas-head">
            <div class="head-text">
                <img src="assets/img/icons/add-bag2.svg" class="svg" alt="">
                <h3>Cart List</h3>
            </div>
            <div class="offcanvas-cancel">
                <img src="assets/img/icons/close-button.svg" class="svg" alt="">
            </div>
        </div>

        <div class="offcanvas-inner">
            <div class="added-cart-list">
                <!-- single cart list -->
                <?php foreach ($fetchService as $row) {
                    $fetchProductStmt = $conn->prepare("SELECT * FROM `products` WHERE `id`= ?");

                    $fetchProductStmt->execute([$row['product_id']]);
                    $fetchProduct = $fetchProductStmt->fetch(PDO::FETCH_ASSOC);
                    $price = $fetchProduct['price'];
                    $quantity = $row['quantity'];
                    $subtotal = $price * $quantity;
                    $totalSubTotal += $subtotal;

                    ?>
                    <div class="single-added-list" data-cart-item-id="<?php echo $row['id']; ?>">
                        <!-- single cart list left -->
                        <div class="single-item-left media align-items-center">
                            <img src="<?php echo $fetchProduct['image']; ?>" alt="" style="width:80px;height:80px;">
                            <div class="single-item-details midea-body">
                                <h5><a href="#">
                                        <?php echo $fetchProduct['name']; ?>
                                    </a> </h5>
                                <p id="price_<?php echo $row['id']; ?>">
                                    <?php echo $price = $fetchProduct['price']; ?>
                                </p>

                            </div>
                        </div>
                        <!-- End of single cart list left -->

                        <!-- Single wish list right -->
                        <div class="single-item-right text-right">
                            <a href="#"><img src="assets/img/icons/remove.svg" alt="" class="svg"></a>
                            <div class="product-quantity">
                                <span onclick="minusQuantity(<?php echo $row['id']; ?>)"><img
                                        src="assets/img/icons/minus.svg" class="svg" alt=""></span>
                                <input type="text" id="quantity_<?php echo $row['id']; ?>"
                                    value="<?php echo $quantity = $row['quantity']; ?>"
                                    class="product-quantity-list product-size">
                                <span onclick="plusQuantity(<?php echo $row['id']; ?>)"><img src="assets/img/icons/plus.svg"
                                        class="svg" alt=""></span>
                            </div>
                            <h6 id="product_total_amt_<?php echo $row['id']; ?>">
                                <?php echo $total = $quantity * $price; ?>
                            </h6>
                        </div>

                        <!-- End of Single cart list right -->
                    </div>
                <?php } ?>

                <!-- End of single cart list -->

            </div>
            <!-- End of single cart list -->
        </div>
        <!-- total price -->
        <div class="total-price">
            <h5>Sub Total</h5>
            <h3>₹<span id="product_total_amt">
                    <?php echo number_format($totalSubTotal, 2); ?>
                </span></h3>
        </div>
        <!-- End of total price -->

        <!-- add to button an support -->
        <div class="view-cart-check-btn text-center">
            <a href="cart-list.php" class='btn btn-fill-type'>View Cart List</a>
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