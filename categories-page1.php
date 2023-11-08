<?php include "includes/header.php"; ?>
<?php
extract($_POST);
$cid = base64_decode($_GET['catId']);
$fetchCategoryStmt = $conn->prepare("SELECT * FROM `products`WHERE `catId` =?");

$fetchCategoryStmt->execute([$cid]);
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
                    <a href="#"><img src="assets/img/icons/remove.svg" alt="" class="svg"></a>
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
            <div class="single-added-list">
                <!-- single cart list left -->
                <div class="single-item-left media align-items-center">
                    <img src="assets/img/clients/wishlist1.png" alt="">
                    <div class="single-item-details midea-body">
                        <h5><a href="#">Women's Strap Sandal</a></h5>
                        <p>25 X 2</p>
                    </div>
                </div>
                <!-- End of single cart list left -->

                <!-- Single wish list right -->
                <div class="single-item-right text-right">
                    <a href="#"><img src="assets/img/icons/remove.svg" alt="" class="svg"></a>
                    <h6>$320</h6>
                </div>
                <!-- End of Single cart list right -->
            </div>
            <!-- End of single cart list -->

            <!-- single cart list -->
            <div class="single-added-list">
                <!-- single cart list left -->
                <div class="single-item-left media align-items-center">
                    <img src="assets/img/clients/wishlist2.png" alt="">
                    <div class="single-item-details midea-body">
                        <h5><a href="#">Wilson Dynasty 29” Basketball</a></h5>
                        <p>25 X 1</p>
                    </div>
                </div>
                <!-- End of singlecart list left -->

                <!-- Single cart list right -->
                <div class="single-item-right text-right">
                    <a href="#"><img src="assets/img/icons/remove.svg" alt="" class="svg"></a>
                    <h6>$13</h6>
                </div>
                <!-- End of Single cart list right -->
            </div>
            <!-- End of single cart list -->
        </div>
        <!-- total price -->
        <div class="total-price">
            <h5>Sub Total</h5>
            <h3>$251</h3>
        </div>
        <!-- End of total price -->

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
                                <input type="text" placeholder='User name / Email Address' class="theme-input-style" required>
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
                                <input type="text" placeholder='User name / Email Address' class="theme-input-style" required>
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
                        <h1 class="h2">Categories<span>Shopping</span></h1>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li><a href="index.html">home</a></li>
                        <li class="active"><a href="#">Category</a></li>
                    </ul>
                </div>
                <!-- End of page title inner -->
            </div>
        </div>
    </div>
</section>
<!-- End of page title -->

<!-- category inner area -->
<section class="pt-100 pb-30">
    <div class="container">

        <div class="row">
            <div class="col-12">

                <!-- single category -->
                <div class="single-category-wrap">
                    <div class="row caregoris-animation">
                        <div class="col-md-1 col-sm-12">
                            <!-- single categorey title -->
                            <div class="single-catagory-title">
                                <div class="catagory-title-wrap">
                                    <h2>New Arrival<span>Collections</span> </h2>
                                </div>
                            </div>
                            <!-- single categorey title -->
                        </div>
                        <?php

                        $sl = 1;
                        while ($row = $fetchCategoryStmt->fetch()) {

                            $id = base64_encode($row['id']);
                        ?>
                            <div class="col-md-6 col-sm-12">
                                <!-- caregory image -->
                                <div class="category-image hover-effect">

                                    <img ata-rjs="2" src="<?php echo $row['image']; ?>" alt="category image <?php echo $sl; ?>">
                                    <a href="shop-2col.html" class="btn">Shop Now</a>
                                </div>
                                <!--End of caregory image -->
                           
                            </div>
                            <div class="col-md-3 col-sm-8 d-none d-md-block">
                                <div class="category-image hover-effect">
                                    <img src="assets/img/category/catagory-m-1.jpg" data-rjs="2" alt="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 d-none d-md-block">
                                <div class="category-image hover-effect">
                                    <img src="assets/img/category/catagory-s-1.jpg" data-rjs="2" alt="">
                                </div>
                            </div>
                    </div>
                </div>
                <!-- End of single category -->

                <!-- single category -->
                <div class="single-category-wrap">
                    <div class="row">
                        <div class="col-md-1 col-sm-12">
                            <!-- single categorey title -->
                            <div class="single-catagory-title">
                                <div class="catagory-title-wrap">
                                    <h2>Techonology <span>Collections</span> </h2>
                                </div>
                            </div>
                            <!-- single categorey title -->
                        </div>
                        <?php
                            $sl++;
                        }
                            ?>
                        <div class="col-md-6 col-sm-12">
                            <!-- caregory image -->
                            <div class="category-image hover-effect">
                                <img src="assets/img/category/catagory-l-2.jpg" data-rjs="2" alt="">
                                <a href="shop-2col.html" class="btn">Shop Now</a>
                            </div>
                            <!--End of caregory image -->
                        </div>
                        <div class="col-md-3 col-sm-8 d-none d-md-block">
                            <div class="category-image hover-effect">
                                <img src="assets/img/category/catagory-m-2.jpg" data-rjs="2" alt="">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 d-none d-md-block">
                            <div class="category-image hover-effect">
                                <img src="assets/img/category/catagory-s-2.jpg" data-rjs="2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of single category -->

                <!-- single category -->
                <div class="single-category-wrap">
                    <div class="row">
                        <div class="col-md-1 col-sm-12">
                            <!-- single categorey title -->
                            <div class="single-catagory-title">
                                <div class="catagory-title-wrap">
                                    <h2>Trendy fashion <span>Collections</span> </h2>
                                </div>
                            </div>
                            <!-- single categorey title -->
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- caregory image -->
                            <div class="category-image hover-effect">
                                <img src="assets/img/category/catagory-l-3.jpg" data-rjs="2" alt="">
                                <a href="shop-2col.html" class="btn">Shop Now</a>
                            </div>
                            <!--End of caregory image -->
                        </div>
                        <div class="col-md-3 col-sm-8 d-none d-md-block">
                            <div class="category-image hover-effect">
                                <img src="assets/img/category/catagory-m-3.jpg" data-rjs="2" alt="">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 d-none d-md-block">
                            <div class="category-image hover-effect">
                                <img src="assets/img/category/catagory-s-3.jpg" data-rjs="2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of single category -->

                <!-- single category -->
                <div class="single-category-wrap">
                    <div class="row">
                        <div class="col-md-1 col-sm-12">
                            <!-- single categorey title -->
                            <div class="single-catagory-title">
                                <div class="catagory-title-wrap">
                                    <h2>Decoration <span>Collections</span> </h2>
                                </div>
                            </div>
                            <!-- single categorey title -->
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- caregory image -->
                            <div class="category-image hover-effect">
                                <img src="assets/img/category/catagory-l-4.jpg" data-rjs="2" alt="">
                                <a href="shop-2col.html" class="btn">Shop Now</a>
                            </div>
                            <!--End of caregory image -->
                        </div>
                        <div class="col-md-3 col-sm-8 d-none d-md-block">
                            <div class="category-image hover-effect">
                                <img src="assets/img/category/catagory-m-4.jpg" data-rjs="2" alt="">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 d-none d-md-block">
                            <div class="category-image hover-effect">
                                <img src="assets/img/category/catagory-s-4.jpg" data-rjs="2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of single category -->
            </div>
        </div>
    </div>
</section>
<!-- End of category inner area -->



<?php include "includes/footer.php"; ?>