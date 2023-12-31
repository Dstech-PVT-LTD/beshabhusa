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
    <section class="pt-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <!-- single categorey title -->
                            <div class="single-catagory-title type2">
                                <div class="catagory-title-wrap">
                                    <h2>New Arrival<span>Collections</span></h2>
                                </div>
                            </div>
                            <!-- single categorey title -->
                        </div>
                    </div>
                    <!-- single category -->
                    <div class="single-category-wrap type2">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- caregory image -->
                                <div class="category-image hover-effect">
                                    <img src="assets/img/category/catagory-l-1.jpg" data-rjs="2" alt="">
                                </div>
                                <!--End of caregory image -->
                            </div>
                            <div class="col-md-6">
                                <!-- single sub category -->
                                <div class="single-sub-category">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="category-image hover-effect">
                                                <img src="assets/img/category/catagory2-s-1.jpg" data-rjs="2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="category-image hover-effect">
                                                <img src="assets/img/category/catagory2-s-2.jpg" data-rjs="2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <!--single catagory content -->
                                            <div class="single-category-content">
                                                <h2> <a href="shop-2col.html"> Women’s Collections</a> </h2>
                                                <a href="shop-2col.html" class="btn">Shop Now</a>
                                            </div>
                                            <!--End of single catagory content -->
                                        </div>
                                    </div>
                                </div>
                                <!-- single sub category -->
                            </div>
                        </div>
                    </div>
                    <!-- End of single category -->

                    <!-- single category -->
                    <div class="single-category-wrap left-content type2">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- single sub category -->
                                <div class="single-sub-category">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="category-image hover-effect">
                                                <img src="assets/img/category/catagory2-s-3.jpg" data-rjs="2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="category-image hover-effect">
                                                <img src="assets/img/category/catagory2-s-4.jpg" data-rjs="2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <!--single catagory content -->
                                            <div class="single-category-content">
                                                <h2> <a href="shop-2col.html">Fashion Accssories</a> </h2>
                                                <a href="shop-2col.html" class="btn">Shop Now</a>
                                            </div>
                                            <!--End of single catagory content -->
                                        </div>
                                    </div>
                                </div>
                                <!-- single sub category -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- caregory image -->
                                <div class="category-image hover-effect">
                                    <img src="assets/img/category/catagory-l-1.jpg" data-rjs="2" alt="">
                                </div>
                                <!--End of caregory image -->
                            </div>
                        </div>
                    </div>
                    <!-- End of single category -->

                    <!-- single category -->
                    <div class="single-category-wrap type2">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- caregory image -->
                                <div class="category-image hover-effect">
                                    <img src="assets/img/category/catagory-l-1.jpg" data-rjs="2" alt="">
                                </div>
                                <!--End of caregory image -->
                            </div>
                            <div class="col-md-6">
                                <!-- single sub category -->
                                <div class="single-sub-category">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="category-image hover-effect">
                                                <img src="assets/img/category/catagory2-s-1.jpg" data-rjs="2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="category-image hover-effect">
                                                <img src="assets/img/category/catagory2-s-2.jpg" data-rjs="2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <!--single catagory content -->
                                            <div class="single-category-content">
                                                <h2> <a href="shop-2col.html"> Women’s Collections</a> </h2>
                                                <a href="shop-2col.html" class="btn">Shop Now</a>
                                            </div>
                                            <!--End of single catagory content -->
                                        </div>
                                    </div>
                                </div>
                                <!-- single sub category -->
                            </div>
                        </div>
                    </div>
                    <!-- End of single category -->

                    <!-- single category -->
                    <div class="single-category-wrap left-content type2">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- single sub category -->
                                <div class="single-sub-category">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="category-image hover-effect">
                                                <img src="assets/img/category/catagory2-s-1.jpg" data-rjs="2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="category-image hover-effect">
                                                <img src="assets/img/category/catagory2-s-2.jpg" data-rjs="2" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <!--single catagory content -->
                                            <div class="single-category-content">
                                                <h2> <a href="shop-2col.html"> Women’s Collections</a> </h2>
                                                <a href="shop-2col.html" class="btn">Shop Now</a>
                                            </div>
                                            <!--End of single catagory content -->
                                        </div>
                                    </div>
                                </div>
                                <!-- single sub category -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- caregory image -->
                                <div class="category-image hover-effect">
                                    <img src="assets/img/category/catagory-l-1.jpg" data-rjs="2" alt="">
                                </div>
                                <!--End of caregory image -->
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