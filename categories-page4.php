<?php include "./includes/header.php"; ?>

<?php

$fetchServiceStmt = $conn->prepare("SELECT * FROM `products` LIMIT 6");

$fetchServiceStmt->execute();
?>


    <!-- page title -->
    <section class="page-title-inner" data-bg-img='assets/img/page-titlebg.png'>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- page title inner -->
                    <div class="page-title-wrap">
                        <div class="page-title-heading"><h1 class="h2">Categories<span>Shopping</span></h1></div>
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
                    <div class="single-category-wrap type4">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <!-- category items content -->
                                <div class="category-item-content">
                                    <h2><a href="shop-2col-withbar.html">Men’s Collection</a></h2>
                                    <span>150 Items</span>
                                    <p>Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended the vicinity prepared now diverted.</p>
                                    <a href="shop-2col-withbar.html" class="btn category-btn">Shop Now</a>
                                </div>
                                <!-- End of category items content -->
                            </div>
                            <div class="col-lg-7">
                                <!-- category image slider -->
                                <div class="category-image-slider">
                                    <div class="catagory-slider">
                                        <div class="catagory-slider1 owl-carousel" data-owl-items="1" data-owl-responsive='{"0": {"items": "1"},"768": {"items": "1"},"1170": {"items": "1"}}' data-owl-speed= "3000" data-owl-dots = 'true' data-owl-autoplay = 'false'>
                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider1.jpg" data-rjs="2"  alt="">
                                            </div>
                                            <!-- End of single carousel item -->

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider2.jpg" data-rjs="2"  alt="">
                                            </div>
                                            <!-- End of single carousel item -->

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider3.jpg" data-rjs="2"  alt="">
                                            </div>
                                            <!-- End of single carousel item -->
                                        </div>
                                    </div>
                                    <!-- End of category image slider -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of single category -->

                    <!-- single category -->
                    <div class="single-category-wrap type4">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <!-- category items content -->
                                <div class="category-item-content">
                                    <h2><a href="shop-2col-withbar.html">Women’s Choise</a></h2>
                                    <span>150 Items</span>
                                    <p>Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended the vicinity prepared now diverted.</p>
                                    <a href="shop-2col-withbar.html" class="btn category-btn">Shop Now</a>
                                </div>
                                <!-- End of category items content -->
                            </div>
                            <div class="col-lg-7">
                                <!-- category image slider -->
                                <div class="category-image-slider">
                                    <div class="catagory-slider">
                                        <div class="catagory-slider2 owl-carousel" data-owl-items="1" data-owl-responsive='{"0": {"items": "1"},"768": {"items": "1"},"1170": {"items": "1"}}' data-owl-speed= "3000" data-owl-dots = 'true' data-owl-autoplay = 'false'>

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider2.jpg" data-rjs="2"  alt="">
                                            </div>
                                            <!-- End of single carousel item -->

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider1.jpg" data-rjs="2"  alt="">
                                            </div>
                                            <!-- End of single carousel item -->

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider3.jpg" data-rjs="2"  alt="">
                                            </div>
                                            <!-- End of single carousel item -->
                                        </div>
                                    </div>
                                    <!-- End of category image slider -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of single category -->

                    <!-- single category -->
                    <div class="single-category-wrap type4">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <!-- category items content -->
                                <div class="category-item-content">
                                    <h2><a href="shop-2col-withbar.html">Smart Technology</a></h2>
                                    <span>150 Items</span>
                                    <p>Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended the vicinity prepared now diverted.</p>
                                    <a href="shop-2col-withbar.html" class="btn category-btn">Shop Now</a>
                                </div>
                                <!-- End of category items content -->
                            </div>
                            <div class="col-lg-7">
                                <!-- category image slider -->
                                <div class="category-image-slider">
                                    <div class="catagory-slider">
                                        <div class="catagory-slider1 owl-carousel" data-owl-items="1" data-owl-responsive='{"0": {"items": "1"},"768": {"items": "1"},"1170": {"items": "1"}}' data-owl-speed= "3000" data-owl-dots = 'true' data-owl-autoplay = 'false'>
                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider3.jpg" data-rjs="2" alt="">
                                            </div>
                                            <!-- End of single carousel item -->

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider2.jpg" data-rjs="2" alt="">
                                            </div>
                                            <!-- End of single carousel item -->

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider1.jpg" data-rjs="2" alt="">
                                            </div>
                                            <!-- End of single carousel item -->
                                        </div>
                                    </div>
                                    <!-- End of category image slider -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of single category -->

                    <!-- single category -->
                    <div class="single-category-wrap type4">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <!-- category items content -->
                                <div class="category-item-content">
                                    <h2><a href="shop-2col-withbar.html">Home Decor</a></h2>
                                    <span>150 Items</span>
                                    <p>Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended the vicinity prepared now diverted.</p>
                                    <a href="shop-2col-withbar.html" class="btn category-btn">Shop Now</a>
                                </div>
                                <!-- End of category items content -->
                            </div>
                            <div class="col-lg-7">
                                <!-- category image slider -->
                                <div class="category-image-slider">
                                    <div class="catagory-slider">
                                        <div class="catagory-slider1 owl-carousel" data-owl-items="1" data-owl-responsive='{"0": {"items": "1"},"768": {"items": "1"},"1170": {"items": "1"}}' data-owl-speed= "3000" data-owl-dots = 'true' data-owl-autoplay = 'false'>

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider4.jpg" data-rjs="2" alt="">
                                            </div>
                                            <!-- End of single carousel item -->

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider1.jpg" data-rjs="2" alt="">
                                            </div>
                                            <!-- End of single carousel item -->

                                            <!-- single carousel item -->
                                            <div class="single-carousel-item">
                                                <img src="assets/img/category/category-slider2.jpg" data-rjs="2" alt="">
                                            </div>
                                            <!-- End of single carousel item -->
                                        </div>
                                    </div>
                                    <!-- End of category image slider -->
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


    <?php include "./includes/footer.php";