<?php include "./includes/header.php"; ?>

<?php

$fetchServiceStmt = $conn->prepare("SELECT * FROM `products` LIMIT 6");

$fetchServiceStmt->execute();
?>


<!-- banner area -->
<section class="banner-slider banner-slider2 width-100">
    <div class="slider-inner-wrap">
        <div class="owl-carousel banner-carousel2">
            <!-- single slider wrap -->
            <div class="single-slider-wrap-inner slide1" data-bg-img='https://images.pexels.com/photos/3944405/pexels-photo-3944405.jpeg?auto=compress&cs=tinysrgb&w=800' class="img-fluid">
                <div class="container height-100">
                    <div class="row d-flex align-items-center justify-content-center height-100">
                        <div class="col-md-8 col-sm-12 offset-xl-2 height-100">
                            <div class="banner-image-inner">
                                <div class="banner-image" data-bg-img="assets/img/banner/mandemo2.png"></div>
                                <div class="image-details-pointer">
                                    <!-- dress poiter 1 -->
                                    <div class="dress-poiner poiner1">
                                        <span><i class="fa fa-close"></i></span>
                                        <div class="pointer-details media">
                                            <div class="pointer-image">
                                                <a href="shop-details.html"><img src="assets/img/banner/pointer1.jpg" alt=""></a>
                                            </div>
                                            <div class="pointer-body">
                                                <h6><a href="shop-details.html">Brown Long Jacket</a></h6>
                                                <p>$150.38 <span><a href="shop-details.html"><img src="assets/img/icons/right-arrow2.svg" class="svg" alt=""></a></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of dress poiter 1 -->
                                </div>
                            </div>
                            <!-- slider text -->
                            <div class="single-slider-wrap">
                                <div class="single-slider-text">
                                    <h3>Dress That Make You</h3>
                                    <h1>Stylish</h1>
                                    <a href="#" class="btn">Shop Now</a>
                                 </div>
                            </div>
                                <!-- End of slider text -->
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <!-- single slider wrap -->

                <!-- single slider wrap -->
                <div class="single-slider-wrap-inner slide2" data-bg-img='assets/img/banner/banner2-img2.jpg'>
                    <div class="container height-100">
                        <div class="row d-flex align-items-center justify-content-center height-100">
                            <div class="col-md-8 col-sm-12 offset-md-2 height-100">
                                <div class="banner-image-inner">
                                    <div class="banner-image men-2" data-bg-img="assets/img/banner/man2.png"></div>
                                    <div class="image-details-pointer">
                                        <!-- dress poiter 1 -->
                                        <div class="dress-poiner trandy poiner1">
                                            <span><i class="fa fa-close"></i></span>
                                            <div class="pointer-details media">
                                                <div class="pointer-image">
                                                    <a href="shop-details.html"><img src="assets/img/banner/pointer2.jpg" alt=""></a>
                                                </div>
                                                <div class="pointer-body">
                                                    <a href="shop-details.html">
                                                        <h6>Brown Long Jacket</h6>
                                                    </a>
                                                    <p>$150.38 <span><a href="shop-details.html"><img src="assets/img/icons/right-arrow2.svg" class="svg" alt=""></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of dress poiter 1 -->
                                        <!-- dress poiter 2 -->
                                        <div class="dress-poiner trandy poiner2">
                                            <span><i class="fa fa-close"></i></span>
                                            <div class="pointer-details media">
                                                <div class="pointer-image">
                                                    <a href="shop-details.html"><img src="assets/img/banner/pointer2.jpg" alt=""></a>
                                                </div>
                                                <div class="pointer-body">
                                                    <a href="shop-details.html">
                                                        <h6>Brown Long Jacket</h6>
                                                    </a>
                                                    <p>$150.38 <span><a href="shop-details.html"><img src="assets/img/icons/right-arrow2.svg" class="svg" alt=""></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of dress poiter 2 -->
                                        <!-- dress poiter 3 -->
                                        <div class="dress-poiner trandy poiner3">
                                            <span><i class="fa fa-close"></i></span>
                                            <div class="pointer-details media">
                                                <div class="pointer-image">
                                                    <a href="shop-details.html"><img src="assets/img/banner/pointer2.jpg" alt=""></a>
                                                </div>
                                                <div class="pointer-body">
                                                    <a href="shop-details.html">
                                                        <h6>Brown Long Jacket</h6>
                                                    </a>
                                                    <p>$150.38 <span><a href="shop-details.html"><img src="assets/img/icons/right-arrow2.svg" class="svg" alt=""></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of dress poiter 3 -->
                                        <!-- dress poiter 4 -->
                                        <div class="dress-poiner trandy poiner4">
                                            <span><i class="fa fa-close"></i></span>
                                            <div class="pointer-details media">
                                                <div class="pointer-image">
                                                    <a href="shop-details.html"><img src="assets/img/banner/pointer2.jpg" alt=""></a>
                                                </div>
                                                <div class="pointer-body">
                                                    <a href="shop-details.html">
                                                        <h6>Brown Long Jacket</h6>
                                                    </a>
                                                    <p>$150.38 <span><a href="shop-details.html"><img src="assets/img/icons/right-arrow2.svg" class="svg" alt=""></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of dress poiter 4 -->
                                    </div>
                                </div>

                                <!-- slider text -->
                                <div class="single-slider-wrap">
                                    <div class="single-slider-text">
                                        <h3>Dress That Make You</h3>
                                        <h1>Trendy</h1>
                                        <a href="#" class="btn">Shop Now</a>
                                    </div>
                                    <!-- categores page link -->
                                    <div class="categores-link-wrap">
                                        <ul>
                                            <li>
                                                <a href="categories-page1.html">New Collections</a>
                                            </li>
                                            <li>
                                                <a href="categories-page2.html">Trendy Items</a>
                                            </li>
                                            <li>
                                                <a href="categories-page3.html">Discount Shop</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- categores page link -->
                                </div>
                                <!-- End of slider text -->
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <!-- single slider wrap -->

                <!-- single slider wrap -->
                <div class="single-slider-wrap-inner slide3" data-bg-img='assets/img/banner/banner2-img3.jpg'>
                    <div class="container height-100">
                        <div class="row d-flex align-items-center justify-content-center height-100">
                            <div class="col-md-8 col-sm-12 offset-md-2 height-100">
                                <div class="banner-image-inner smart-wrap">
                                    <div class="banner-image men-3" data-bg-img="assets/img/banner/man3.png"></div>
                                    <div class="image-details-pointer">
                                        <!-- dress poiter 1 -->
                                        <div class="dress-poiner smart poiner1">
                                            <span><i class="fa fa-close"></i></span>
                                            <div class="pointer-details media">
                                                <div class="pointer-image">
                                                    <a href="shop-details.html"><img src="assets/img/banner/pointer2.jpg" alt=""></a>
                                                </div>
                                                <div class="pointer-body">
                                                    <a href="shop-details.html">
                                                        <h6>Brown Long Jacket</h6>
                                                    </a>
                                                    <p>$150.38 <span><a href="shop-details.html"><img src="assets/img/icons/right-arrow2.svg" class="svg" alt=""></a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of dress poiter 1 -->

                                        <!-- dress poiter 2 -->
                                        <div class="dress-poiner smart poiner2">
                                            <span><i class="fa fa-close"></i></span>
                                            <div class="pointer-details media">
                                                <div class="pointer-image">
                                                    <img src="assets/img/banner/pointer2.jpg" alt="">
                                                </div>
                                                <div class="pointer-body">
                                                    <h6>Brown Long Jacket</h6>
                                                    <p>$150.38 <span><img src="assets/img/icons/right-arrow2.svg" class="svg" alt=""></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of dress poiter 2 -->

                                        <!-- dress poiter 3 -->
                                        <div class="dress-poiner smart poiner3">
                                            <span><i class="fa fa-close"></i></span>
                                            <div class="pointer-details media">
                                                <div class="pointer-image">
                                                    <img src="assets/img/banner/pointer2.jpg" alt="">
                                                </div>
                                                <div class="pointer-body">
                                                    <h6>Brown Long Jacket</h6>
                                                    <p>$150.38 <span><img src="assets/img/icons/right-arrow2.svg" class="svg" alt=""></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of dress poiter 3 -->

                                        <!-- dress poiter 4 -->
                                        <div class="dress-poiner smart poiner4">
                                            <span><i class="fa fa-close"></i></span>
                                            <div class="pointer-details media">
                                                <div class="pointer-image">
                                                    <img src="assets/img/banner/pointer3.jpg" alt="">
                                                </div>
                                                <div class="pointer-body">
                                                    <h6>Brown Long Jacket</h6>
                                                    <p>$150.38 <span><img src="assets/img/icons/right-arrow2.svg" class="svg" alt=""></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of dress poiter 4 -->
                                    </div>
                                </div>

                                <!-- slider text -->
                                <div class="single-slider-wrap">
                                    <div class="single-slider-text">
                                        <h3>Dress That Make You</h3>
                                        <h1>Smart</h1>
                                        <a href="#" class="btn">Shop Now</a>
                                    </div>
                                    <!-- categores page link -->
                                    <div class="categores-link-wrap">
                                        <ul>
                                            <li>
                                                <a href="categories-page1.html">New Collections</a>
                                            </li>
                                            <li>
                                                <a href="categories-page2.html">Trendy Items</a>
                                            </li>
                                            <li>
                                                <a href="categories-page3.html">Discount Shop</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- categores page link -->
                                </div>
                                <!-- End of slider text -->
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <!-- single slider wrap -->
            </div>
        </div>
    <div>
</section>
<!-- End of banner area -->

<!-- Start add Section -->
<section class="pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                <div class="row">
                    <div class="col-12">
                        <!-- single Collection -->
                        <div class="single-add-inner small-img" data-bg-img='assets/img/add/img825255.png'>
                            <div class="single-add">
                                <p>#womenhat</p>
                                <h3>Women's Faux<br> Leather Band Felt Floppy Hat</h3>
                                <a href="#" class="btn">Shop Now</a>
                            </div>
                        </div>
                        <!-- End of single Collection -->
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <!-- single Collection -->
                        <div class="single-add-inner small-img save" data-bg-img='assets/img/add/445X255.png'>
                            <div class="single-add">
                                <p>On Summer</p>
                                <h3><span>Save Up To</span> 20%</h3>
                                <a href="#" class="btn">Shop Now</a>
                            </div>
                        </div>
                        <!-- End of single Collection -->
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <!-- single Collection -->
                        <div class="single-add-inner small-img" data-bg-img='assets/img/add/350X255.png'>
                            <div class="single-add">
                                <p>New Collection</p>
                                <h3>Women Purse</h3>
                                <a href="#" class="btn">Shop Now</a>
                            </div>
                        </div>
                        <!-- End of single Collection -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <!-- single Collection -->
                <div class="single-add-inner larg-img discount" data-bg-img='assets/img/add/255X540.png'>
                    <div class="single-add">
                        <h2><span>75</span> %Off</h2>
                        <p>For Gents Wear</p>
                    </div>
                    <a href="#" class="btn">Shop Now</a>
                </div>
                <!-- End of single Collection -->
            </div>
        </div>
    </div>
</section>
<!-- End Of add Section -->

<!-- New Arrival type2-->
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- section title -->
                <div class="section-title-wrap">
                    <div class="section-title">
                        <h2>New Arrival<span>This Season</span></h2>
                    </div>
                </div>
                <!-- End of section title -->
            </div>
        </div>
        <div class="row">
            <?php

            $sl = 1;
            while ($row = $fetchServiceStmt->fetch()) {

                $id = base64_encode($row['id']);
            ?>
                <div class="col-md-6 col-sm-12 col-lg-4">
                    <!-- single product -->
                    <div class="single-product type2">
                        <div class="product-item">
                            <div class="product-thumb">
                                <!-- Product Image -->

                                <div class="product-image">
                                    <a href="shop-details.php?id=<?php echo $id; ?>">
                                        <img class='normal-state' data-rjs="2" src="<?php echo $row['image']; ?>" alt="service image <?php echo $sl; ?>" alt="">

                                        <img class='hover-state' data-rjs="2" src="assets/img/product/product-1v2b.jpg" alt="">
                                    </a>
                                </div>

                                <!-- End of Product Image -->

                                <!-- product button -->
                                <div class="product-buttons">
                                    <div class="quick-btn">
                                        <div class="quick-icon-btn">
                                            <a href="#" class="quick_view">
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
                                    
                                </div>
                                <!-- End of product button -->

                            </div>

                            <!-- product info -->
                            <div class="product-info">
                                <div class="product-rating">
                                    <div class="star-rating">
                                        <span></span>
                                    </div>
                                </div>

                                <!-- product title -->
                                <div class="product-title">
                                    <h4><a href="shop-details.php"><?php echo $row['name']; ?></a></h4>
                                </div>
                                <!-- end of product title -->

                                <div class="product-price">
                                    <h5><?php echo "Price:&#8377;".$row['mrp']; ?></h5>
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
<!-- End of New Arrival type2-->

<!-- Start Collection Section -->
<section class="pt-40 pb-70">
    <div class="collection-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!-- single Collection -->
                    <div class="single-colection-inner overlay2 type2">
                        <div class="single-colection-img">
                            <img src="assets/img/add/350X220-1.png" alt="">
                        </div>
                        <div class="single-colection">
                            <!-- <h3>Trendy Items</h3> -->
                            <a href="#" class="btn">Shop Now</a>
                        </div>
                    </div>
                    <!-- End of single Collection -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!-- single Collection -->
                    <div class="single-colection-inner overlay3 type2">
                        <div class="single-colection-img">
                            <img src="assets/img/add/350X220-2.png" alt="">
                        </div>
                        <div class="single-colection">
                            <!-- <h3>Top Sellers</h3> -->
                            <a href="#" class="btn">Shop Now</a>
                        </div>
                    </div>
                    <!-- End of single Collection -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!-- single Collection -->
                    <div class="single-colection-inner overlay4 type2">
                        <div class="single-colection-img">
                            <img src="assets/img/add/350X220-3.png" alt="">
                        </div>
                        <div class="single-colection">
                            <!-- <h3>Hot Deals</h3> -->
                            <a href="#" class="btn">Shop Now</a>
                        </div>
                    </div>
                    <!-- End of single Collection -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Of Collection Section -->

<!-- quick service  -->
<section class="pt-70 pb-40 pattern">
    <div class="quick-service-wrap">
        <div class="container">
            <div class="row">
                <!-- single quick service -->
                <div class="col-md-4 col-sm-12">
                    <div class="single-quick-service d-flex align-items-center">
                        <img src="assets/img/icons/car.svg" class="svg" alt="">
                        <div class="single-quick-text">
                            <h5>Free Shipping</h5>
                            <p>Variations of passages of lorem isum is available here.</p>
                        </div>
                    </div>
                </div>
                <!-- enn of quick service -->

                <!-- single quick service -->
                <div class="col-md-4 col-sm-12">
                    <div class="single-quick-service d-flex align-items-center">
                        <img src="assets/img/icons/retry.svg" class="svg" alt="">
                        <div class="single-quick-text">
                            <h5>Return Gerantee</h5>
                            <p>Variations of passages of lorem isum is available here.</p>
                        </div>
                    </div>
                </div>
                <!-- enn of quick service -->

                <!-- single quick service -->
                <div class="col-md-4 col-sm-12">
                    <div class="single-quick-service d-flex align-items-center">
                        <img src="assets/img/icons/card.svg" class="svg" alt="">
                        <div class="single-quick-text">
                            <h5>Easy Payment Policy</h5>
                            <p>Variations of passages of lorem isum is available here.</p>
                        </div>
                    </div>
                </div>
                <!-- enn of quick service -->
            </div>
        </div>
    </div>
</section>
<!-- End of quick service  -->


<!-- call to action section -->
<section>
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- call to action inner -->
                    <div class="callto-action-inner" data-bg-img='assets/img/add/1110X120-1.png'>
                        <h3>All New #Summer Collection</h3>
                        <h5>is <a href="#" class="btn">Available Here</a></h5>
                    </div>
                    <!-- End of call to action inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of call to action section -->

<!-- Subscribe area -->
<section class="pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title -->
                <div class="section-title-wrap">
                    <div class="section-title">
                        <h2>Subscribe Now <span>Get Update</span></h2>

                    </div>
                </div>
                <!-- End of section title -->
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <!-- subscribe text -->
                <div class="subscribe-text">
                    <h5>25% Discount On Subscribtion</h5>
                    <p>Get updates by subscribe our weekly newsletter</p>
                </div>
                <!-- End of subscribe text -->
            </div>
            <div class="col-md-6 col-sm-12">
                <!-- subscribe form -->
                <div class="primary-form parsley-validate subscribe-form">
                    <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method='post' target="_blank" novalidate>
                        <input type="email" name="email" class="theme-input-style" placeholder="Enter Email Address" required>
                        <button type="submit" class="subscribe-btn">Subscribe</button>
                    </form>
                </div>
                <!-- End of subscribe form -->
            </div>
        </div>
    </div>
</section>
<!-- End of Subscribe area -->
<?php include "./includes/footer.php";
