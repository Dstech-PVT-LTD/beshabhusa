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
    <section class="pt-80 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- nav -->
                    <div class="category-nav">
                        <nav class="nav">
                            <a id="nav-trendy" data-toggle="tab" href="#trendy" class="active">Trendy Items</a>
                            <a id="nav-top" data-toggle="tab" href="#seller">Top Sellers</a>
                            <a id="nav-discount" data-toggle="tab" href="#discount">Discount</a>
                        </nav>
                    </div>
                    <!-- End of nav -->
                </div>
            </div>
            <div class="tab-content catagory-nav">
                <div class="tab-pane fade show active" id="trendy" role="tabpanel" aria-labelledby="nav-trendy">
                    <div class="row">
                        <div class="col-sm-12 col-md-1">
                            <!-- single categorey title -->
                            <div class="single-catagory-title">
                                <div class="catagory-title-wrap">
                                    <h2>Trendy Items<span>Collections</span></h2>
                                </div>
                            </div>
                            <!-- single categorey title -->
                        </div>
                        <div class="col-sm-12 col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- category image wrap -->
                                    <div class="category-isotope-image isotope2 clearfix">
                                        <!-- category image -->
                                        <div class="category-image width50 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/img1.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                             
                                        <!-- caregory image -->
                                        <div class="category-image width30 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img2.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                         
                                        <!-- caregory image -->
                                        <div class="category-image width20 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img3.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                               
                                        <!-- caregory image -->
                                        <div class="category-image width40 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img4.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                                   
                                        <!-- caregory image -->
                                        <div class="category-image width60 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img5.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                         <!-- caregory image -->
                                        <div class="category-image width20 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img6.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                        <!-- caregory image -->
                                        <div class="category-image width30 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img7.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                        <!-- category image -->
                                        <div class="category-image width50 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img8.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                        <!-- caregory image -->
                                        <div class="category-image width60 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img9.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                             
                                        <!-- caregory image -->
                                        <div class="category-image width40 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img10.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                                    </div>
                                    <!-- End of category image wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="nav-top">
                    <div class="row">
                        <div class="col-sm-12 col-md-1">
                            <!-- single categorey title -->
                            <div class="single-catagory-title">
                                <div class="catagory-title-wrap">
                                    <h2>Top Sellers<span>Collections</span></h2>
                                </div>
                            </div>
                            <!-- single categorey title -->
                        </div>
                        <div class="col-sm-12 col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- category image wrap -->
                                    <div class="category-isotope-image isotope2 clearfix">
                                        <!-- category image -->
                                        <div class="category-image width50 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/img1.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                             
                                        <!-- caregory image -->
                                        <div class="category-image width30 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img2.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                         
                                        <!-- caregory image -->
                                        <div class="category-image width20 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img3.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                               
                                        <!-- caregory image -->
                                        <div class="category-image width40 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img4.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                                   
                                        <!-- caregory image -->
                                        <div class="category-image width60 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img5.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                         <!-- caregory image -->
                                        <div class="category-image width20 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img6.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                        <!-- caregory image -->
                                        <div class="category-image width30 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img7.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                        <!-- category image -->
                                        <div class="category-image width50 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img8.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                        <!-- caregory image -->
                                        <div class="category-image width60 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img9.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                             
                                        <!-- caregory image -->
                                        <div class="category-image width40 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img10.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                                    </div>
                                    <!-- End of category image wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="discount" role="tabpanel" aria-labelledby="nav-discount">
                    <div class="row">
                        <div class="col-sm-12 col-md-1">
                            <!-- single categorey title -->
                            <div class="single-catagory-title">
                                <div class="catagory-title-wrap">
                                    <h2>Discount<span>Collections</span></h2>
                                </div>
                            </div>
                            <!-- single categorey title -->
                        </div>
                        <div class="col-sm-12 col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- category image wrap -->
                                    <div class="category-isotope-image isotope2 clearfix">
                                        <!-- category image -->
                                        <div class="category-image width50 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/img1.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                             
                                        <!-- caregory image -->
                                        <div class="category-image width30 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img2.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                         
                                        <!-- caregory image -->
                                        <div class="category-image width20 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img3.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                               
                                        <!-- caregory image -->
                                        <div class="category-image width40 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img4.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                                   
                                        <!-- caregory image -->
                                        <div class="category-image width60 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img5.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                         <!-- caregory image -->
                                        <div class="category-image width20 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img6.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                        <!-- caregory image -->
                                        <div class="category-image width30 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img7.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                        <!-- category image -->
                                        <div class="category-image width50 grid-item long-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img8.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->

                                        <!-- caregory image -->
                                        <div class="category-image width60 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img9.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                             
                                        <!-- caregory image -->
                                        <div class="category-image width40 grid-item short-size type3 hover-effect">
                                            <img src="assets/img/category/catagory3-img10.jpg" data-rjs='2' alt="">
                                            <a href="shop-2col.html" class="btn">Shop Now</a>
                                        </div>
                                        <!--End of caregory image -->
                                    </div>
                                    <!-- End of category image wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End of category inner area -->

    <!-- footer area -->
    <?php include "./includes/footer.php";