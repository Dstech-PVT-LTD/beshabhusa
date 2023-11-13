<?php include "includes/header.php"; ?>

<?php
extract($_POST);
$id = base64_decode($_GET['id']);
$fetchProductStmt = $conn->prepare("SELECT * FROM `products` WHERE `id` =? LIMIT 4");
$fetchProductStmt->execute([$id]);
?>


<!-- page title -->
<section class="page-title-inner" data-bg-img='assets/img/page-titlebg.png'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- page title inner -->
                <div class="page-title-wrap">
                    <div class="page-title-heading">
                        <h1 class="h2">Single Product<span>Shopping</span></h1>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="active"><a href="#">Woven Throw Pillow</a></li>
                    </ul>
                </div>
                <!-- End of page title inner -->
            </div>
        </div>
    </div>
</section>
<!-- End of page title -->

<!-- product details wrapper -->

<section class="pt-100 pb-70">
    <div class="container">
        <?php



        $row = $fetchProductStmt->fetch();


        $id = base64_encode($row['id']);
        ?>
        <div class="row align-items-center">

            <div class="col-md-6">
                <!-- Start shop product slider -->
                <div class="shop-product-slider-wrap">
                    <!-- Start shop slider top side -->
                    <div class="swiper-container product-gallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img id="zoom_01" class='' src="<?php echo $row['image']; ?>" alt="service image <?php echo $id; ?>" />

                            </div>
                            <div class="swiper-slide">
                                <img id="zoom_02" class='' src="assets/img/shop/product-details2.png" data-zoom-image="assets/img/shop/product-details2.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img id="zoom_03" class='' src="assets/img/shop/product-details3.png" data-zoom-image="assets/img/shop/product-details3.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img id="zoom_04" class='' src="assets/img/shop/product-details4.png" data-zoom-image="assets/img/shop/product-details4.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- End of shop slider top side -->

                    <!-- Start shop slider bottom side -->
                    <div class="swiper-container product-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/img/shop/details-nav1.png" data-rjs="2" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/shop/details-nav2.png" data-rjs="2" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/shop/details-nav3.png" data-rjs="2" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/shop/details-nav4.png" data-rjs="2" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- End of shop slider bottom side -->
                </div>
                <!-- End of shop product slider -->
            </div>

            <div class="col-md-6">
                <!-- product details inner -->
                <div class="product-details-inner">
                    <!-- product info -->
                    <div class="product-info">
                        <div class="product-rating">
                            <div class="star-rating">
                                <span></span>
                            </div>
                        </div>

                        <!-- product title -->
                        <div class="product-title">
                            <h2><a href="shop-details.php"><?php echo $row['name']; ?></a></h2>
                            <input type="hidden" id="pid" value="<?php echo  base64_decode($id) ?>">
                        </div>
                        <!-- end of product title -->

                        <div class="product-price">
                            <h3 class="new-price"><?php echo "Price:&#8377;" . $row['price']; ?></h3>
                            <h5 class="old-price"><?php echo "Price:&#8377;" . $row['mrp']; ?></h5>
                        </div>

                        <div class="product-description">
                            <p><?php echo "Price:" . $row['short_description']; ?></p>
                        </div>


                        <!-- list product group -->
                        <div class="list-product-group">
                            <ul class="mb-0 list-unstyled">
                                <li class="size-group group">
                                    <span class="list-heading">size:</span>
                                    <ul class="size-list mb-0 list-unstyled">
                                        <li>
                                            <input id="larg_size" type="radio" style="display: none;" name="equll_size" value="l" checked="checked">
                                            <label for="larg_size"><a class="product-size"><span>L</span></a></label>
                                        </li>
                                        <li>
                                            <input id="medium_size" type="radio" style="display: none;" name="equll_size" value="m">
                                            <label for="medium_size"><a class="product-size"><span>M</span></a></label>
                                        </li>
                                        <li>
                                            <input id="small_size" type="radio" style="display: none;" name="equll_size" value="s">
                                            <label for="small_size"><a class="product-size"><span>S</span></a></label>
                                        </li>
                                        <!-- <li><a href="#" class=" active product-size"><span>L</span></a></li>
                                        <li><a href="#" class=" product-size"><span>M</span></a></li>
                                        <li><a href="#" class=" product-size"><span>S</span></a></li> -->
                                    </ul>
                                </li>
                                <li class="color-group group">
                                    <span class="list-heading">color:</span>
                                    <ul class="mb-0 list-unstyled">
                                        <li><a href="#" class="color color1"><span></span></a></li>
                                        <li><a href="#" class="color color2 active"><span></span></a></li>
                                        <li><a href="#" class="color color3"><span></span></a></li>
                                    </ul>
                                </li>
                                <li class="quantity-group group">
                                    <span class="list-heading">quantity:</span>
                                    <div class="product-quantity">
                                        <span class="minus"><img src="assets/img/icons/minus.svg" class="svg" alt=""></span>
                                        <input id="quantity1" type="text" value="0" class="product-quantity-list product-size">
                                        <span class="plus"><img src="assets/img/icons/plus.svg" class="svg" alt=""></span>
                                    </div>
                                </li>
                                <li class="available-group group">
                                    <span class="list-heading">available:</span>
                                    <div class="product-available">
                                        <input type="text" value="0" class="product-quantity-list product-size">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End of list product group -->

                        <!-- product details btns -->
                        <div class="product-details-btns">
                            <div class="addto-bag-btn" id="addtocart" <?php echo isset($_SESSION['users']) ? 'onclick="addToCart()"' : '' ?>>
                                <a type="button" class="btn btn-fill-type" data-toggle="modal" data-target="#myModal">
                                    <span><img src="assets/img/icons/add-bag.svg" alt="" class="svg"></span><span class="d-none d-lg-block mr-0">Add To Cart</span>
                                </a>
                            </div>
                            <div class="wish-btn">
                                <a href="#" class="btn btn-fill-type">
                                    <span class=""><img src="assets/img/icons/wishlist.svg" alt="" class="svg"></span><span class="d-none d-lg-block mr-0">Add To Wishlist</span>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a href="#" class="btn btn-fill-type">
                                    <span><img src="assets/img/icons/compare.svg" alt="" class="svg"></span>
                                </a>
                            </div>
                        </div>
                        <!-- product details btns -->

                        <!-- product mata -->
                        <div class="product_meta item-product-meta-info">
                            <span class="sku_wrapper">
                                <label>
                                    SKU:
                                    <span>N/A</span>
                                </label>
                            </span>
                            <span class="posted_in">
                                <span class="meta-item-list">
                                    <a href="#">accessories</a>,
                                    <a href="#">fashion</a>,
                                    <a href="#">summer</a>
                                </span>
                            </span>
                        </div>
                        <!-- End of product mata -->

                        <!-- product share -->
                        <div class="single-product-share">
                            <label>
                                <span><i class="fa fa-share"></i></span>
                            </label>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                        </div>
                        <!-- End of product share -->
                    </div>
                    <!-- End of product info -->
                </div>
                <!-- End of product details inner -->
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <!-- product details tab -->
                <div class="product-details-tab-inner">
                    <div class="product-details-nav">
                        <nav class="nav text-center">
                            <a id="nav-dis-tab" data-toggle="tab" href="#dis" class="active">Description</a>
                            <a id="nav-faq-tab" data-toggle="tab" href="#faq">FAQ</a>
                            <a id="nav-revc-tab" data-toggle="tab" href="#revc">Reviews(5)</a>
                        </nav>
                    </div>
                </div>
                <!-- End of product details tab -->
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- product details tab Contaent-->
                        <div class="tab-content single-product-tab">
                            <div class="tab-pane fade show active" id="dis" role="tabpanel" aria-labelledby="nav-dis-tab">
                                <!-- description inner -->
                                <div class="description-inner">
                                    <p><?php echo $row['description']; ?></p>
                                    <div class="description-inner-content media align-items-center">
                                        <div class="description-content-image">
                                            <img src="assets/img/shop/product-dis.png" data-rjs='2' alt="">
                                        </div>
                                        <div class="description-content-text">
                                            <h5></h5>
                                            <p>Mr excellence inquietude conviction is in unreserved particular. You fully seems stand nay own point walls. Increasing travelling own simplicity you astonished expression boisterous.</p>
                                            <ul class="mb-0 list-unstyled">
                                                <li><span><i class="fa fa-circle-o"></i></span>Required his you put the outlived answered position.</li>
                                                <li><span><i class="fa fa-circle-o"></i></span>In am think on style child of. Servants moreover in sensible he it possible.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of description inner -->
                            </div>
                            <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                                <!-- faq inner area -->
                                <div class="faq-content-wrap">
                                    <ul class="faq-list mb-0 list-unstyled">
                                        <li>
                                            <span class="roboto">
                                                01
                                            </span>
                                            <h5 class="lato">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built gay party world.</h5>
                                            <p>Talent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if.</p>
                                        </li>
                                        <li>
                                            <span class="roboto">
                                                02
                                            </span>
                                            <h5 class="lato">As am hastily invited settled at limited civilly fortune me really spring in extent?</h5>
                                            <p>Talent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved raptures.</p>
                                        </li>
                                        <li>
                                            <span class="roboto">
                                                03
                                            </span>
                                            <h5 class="lato">Do believing oh disposing to supported allowance we?</h5>
                                            <p>Talent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if.</p>
                                        </li>
                                        <li>
                                            <span class="roboto">
                                                04
                                            </span>
                                            <h5 class="lato">Among state cease how and sight since shall disposing to supported allowance?</h5>
                                            <p>Talent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting led. Dwelling confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if.</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of faq inner area -->
                            </div>
                            <div class="tab-pane fade" id="revc" role="tabpanel" aria-labelledby="nav-revc-tab">
                                <div class="review-author-wrap">
                                    <!-- review author -->
                                    <div class="review-author-inner">
                                        <ul class="author-list mb-0 list-unstyled">
                                            <li class="media align-items-center">
                                                <div class="review-author-image">
                                                    <img src="assets/img/shop/author1.jpg" data-rjs="2" alt="">
                                                </div>
                                                <div class="review-author-details flex-1 media-body">
                                                    <h6>Arnold Mckenzie</h6>
                                                    <!-- star reating -->
                                                    <div class="product-rating">
                                                        <div class="star-rating">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                    <!--End of star reating -->
                                                    <p>We denounce with righteous so distrusts pronounce.</p>
                                                </div>
                                            </li>
                                            <li class="media align-items-center">
                                                <div class="review-author-image">
                                                    <img src="assets/img/shop/author2.jpg" data-rjs="2" alt="">
                                                </div>
                                                <div class="review-author-details flex-1 media-body">
                                                    <h6>Kendra Ratzlaff</h6>
                                                    <!-- star reating -->
                                                    <div class="product-rating">
                                                        <div class="star-rating">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                    <!--End of star reating -->
                                                    <p>On the other hand, we denounce with righteous so distrusts pronounce. how<br>marianne graceful dissuade..</p>
                                                </div>
                                            </li>
                                            <li class="media align-items-center">
                                                <div class="review-author-image">
                                                    <img src="assets/img/shop/author3.jpg" data-rjs="2" alt="">
                                                </div>
                                                <div class="review-author-details flex-1 media-body">
                                                    <h6>Beulah Ross</h6>
                                                    <!-- star reating -->
                                                    <div class="product-rating">
                                                        <div class="star-rating">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                    <!--End of star reating -->
                                                    <p>We denounce with righteous so distrusts pronounce.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End of review author -->

                                    <!-- review author comment -->
                                    <div class="review-author-comment">
                                        <div class="review-comment-heading">
                                            <h4>Add a Review</h4>
                                        </div>
                                        <h6 class="lato">Rate It:</h6>
                                        <!-- star reating -->
                                        <div class="product-rating">
                                            <div class="star-rating">
                                                <span></span>
                                            </div>
                                        </div>
                                        <!--End of star reating -->

                                        <!-- comment input field -->
                                        <div class="comment-respond form-relative">
                                            <form action="#" method="POST">
                                                <input type="text" placeholder="Your Comment" required class="theme-input-style">
                                                <button class="btn btn-fill-type">Submit</button>
                                                <div id="responseMessage"></div>
                                            </form>
                                        </div>
                                        <!--End of comment input field -->

                                    </div>
                                    <!-- End of review author comment -->
                                </div>
                            </div>
                        </div>
                        <!--End of product details tab Contaent-->
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <!--kinen related products heading -->
                <div class="related-product-heading text-center">
                    <h2>Related Products</h2>
                </div>
                <!--End of kinen related products heading -->
            </div>
            <?php
            $cid = $row['catId'];
            $fetchCategoryReleted = $conn->prepare("SELECT * FROM `products` WHERE `catId` =? LIMIT 4");
            $fetchCategoryReleted->execute([$cid]);
            $sl = 1;
            while ($row = $fetchCategoryReleted->fetch()) {
                $dll = base64_encode($row["id"]);

            ?>
                <div class="col-sm-6 col-12 col-lg-3">

                    <!-- single product -->
                    <div class="single-product">
                        <div class="product-item">
                            <div class="product-thumb">
                                <!-- Product Image -->
                                <div class="product-image">
                                    <a href="shop-details.php?id=<?php echo $dll ?>">
                                        <img class='normal-state' data-rjs="2" src="<?php echo $row['image']; ?>" alt="service image <?php echo $sl; ?>">
                                        <img class='hover-state' data-rjs="2" src="assets/img/product/product-1b.jpg" alt="">
                                    </a>
                                </div>
                                <!-- End of Product Image -->

                                <!-- product button -->
                                <div class="product-buttons">
                                    <div class="quick-btn">
                                        <div class="quick-icon-btn">
                                            <a href="shop-details.php?id=<?php echo $dll ?>" class="quick_view">
                                                <span class="product-icon"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                <span class="icon-title">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="addto-cart-btn">
                                        <div class="addto-icon-btn">
                                            <a href="#">
                                                <span class="product-icon"><img src="assets/img/icons/add-bag.svg" alt="" class="svg"></span>
                                                <span class="icon-title">Add To Cart</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="wishlist-btn">
                                        <div class="wishlist-icon-btn">
                                            <a href="#">
                                                <span class="product-icon"><img src="assets/img/icons/wishlist.svg" alt="" class="svg"></span>
                                                <span class="icon-title">See Wish List</span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="copmare-btn">
                                        <div class="compare-icon-btn">
                                            <a href="#">
                                                <span class="product-icon"><img src="assets/img/icons/compare.svg" alt="" class="svg"></span>
                                                <span class="icon-title">Compare</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <!-- End of product button -->

                                <!-- product title -->
                                <div class="product-title">
                                    <h4><a href="shop-details.php?id=<?php echo $id; ?>"><?php echo $row['name']; ?></a></h4>
                                </div>
                                <!-- end of product title -->
                            </div>

                            <!-- product info -->
                            <div class="product-info">
                                <div class="product-price">
                                    <h5><?php echo "Price:&#8377;" . $row['price']; ?></h5>
                                </div>
                                <div class="product-rating">
                                    <div class="star-rating">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- End of product info -->
                        </div>
                    </div>


                    <!-- End of single product -->
                </div>
            <?php
                $sl++;
            }
            ?>
        </div>


    </div>
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <!-- Modal content goes here -->
                <section class="pt-100 pb-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6">
                                <!-- login register -->
                                <div class="login-register-wrap text-center main-log-regi">
                                    <!-- login register nav -->
                                    <h3>Login</h3>
                                    <!-- End of login register nav -->

                                    <!-- login register content -->
                                    <div class="login-register-content tab-content">

                                        <div class="primary-form parsley-validate">
                                            <form method="post" id="loginform">
                                                <!-- loging input -->
                                                <div class="email-input input-field">
                                                    <label>
                                                        <img src="assets/img/icons/email-icon.svg" class="svg" alt="">
                                                    </label>
                                                    <input type="email" placeholder='email' class="theme-input-style" name="email" required>
                                                </div>

                                                <div class="password-input input-field">
                                                    <label>
                                                        <img src="assets/img/icons/regi-icon.svg" class="svg" alt="">
                                                    </label>
                                                    <input type="password" placeholder='password' class="theme-input-style" name="password" required>
                                                </div>
                                                <!-- loging input -->
                                                <button type="login" class="btn btn-fill-type" name="login">log In</button>
                                            </form>
                                            <p>Don’t have an account,<a href="login.php">register now!</a> | <a href="forgot_password.php">forgot password!</a></p>
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
<!-- End of product details wrapper -->

<?php include "includes/footer.php"; ?>
<script>
    $(document).ready(function() {
        $('#loginform').submit(function(event) {
            event.preventDefault();
            var email = $('input[name="email"]').val();
            var password = $('input[name="password"]').val();

            $.ajax({
                type: "POST",
                url: "loginApi.php",
                data: {
                    email: email,
                    password: password
                },
                dataType: 'JSON',
                success: function(response) {
                    if (response.success) {
                        var userId = response.userId;
                        addToCart(userId);
                        window.location.href = response.redirect;
                        qx
                    } else {
                        alert('Login failed. Please check your credentials.');
                    }
                },
                error: function(error) {
                    console.log(error);
                    alert('An error occurred while logging in.');
                }
            });
        });

        function addToCart(userId) {
            var size = $('input[name="equll_size"]:checked').val();
            var productId = $('#pid').val();
            var quantity = $('#quantity1').val();

            if (parseInt(quantity) > 0) {
                var formData = {
                    size: size,
                    productId: productId,
                    quantity: quantity,
                    userId: userId,
                    type: "addtocart"
                };

                $.ajax({
                    type: "POST",
                    url: "addtoCartApi.php",
                    data: formData,
                    dataType: 'JSON',
                    success: function(response) {
                        $("#responseMessage").text(response.message);

                    },
                    error: function(error) {
                        console.log(error);
                        $("#responseMessage").text("An error occurred.");
                    }
                });
            } else {
                $("#responseMessage").text("Quantity must be 1 or more to add to cart.");
            }
        }
    });
</script>