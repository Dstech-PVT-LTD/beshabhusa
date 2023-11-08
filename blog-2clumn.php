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
                        <div class="page-title-heading"><h1 class="h2">Journal<span>Magazine</span></h1></div>
                        <ul class="list-unstyled mb-0">
                            <li><a href="index.html">home</a></li>
                            <li class="active"><a href="#">Blog</a></li>
                        </ul>

                    </div>
                    <!-- End of page title inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of page title -->
    
    <!-- blog post inner -->
    <section class="pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <!-- single blog wraper -->
                    <div class="single-blog-wrap type2 text-center">
                        <!-- post image -->
                        <div class="single-blog-image  hover-effect">
                            <a href="#"><img src="assets/img/blog/img3.jpg" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details post-content">
                            <div class="post-info">
                                <span>by.</span><a href="#">Puchka Bolle</a>
                            </div>
                            <div class="post-body">
                                <h4><a href="#">Enim ad Minim Veniam Quis trud</a></h4>
                                <p>I must explain to you how all mistaken idea<br> denouncing pleasure and praising pain was born and In will give you actual.</p>
                                <a href="#" class="btn btn-line">Continue Reading...</a>
                            </div>
                        </div>
                        <!--End of single blog details -->
                    </div>
                    <!-- End of single blog wraper -->
                </div>

                <div class="col-md-6 col-lg-6">
                    <!-- single blog wraper -->
                    <div class="single-blog-wrap type2 text-center">
                        <!-- post image -->
                        <div class="single-blog-image  hover-effect">
                            <a href="#"><img src="assets/img/blog/img4.jpg" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details post-content">
                            <div class="post-info">
                                <span>by.</span><a href="#">Puchka Bolle</a>
                            </div>
                            <div class="post-body">
                                <h4><a href="#">Quis autem vel eum iure reprehen derit</a></h4>
                                <p>I must explain to you how all mistaken idea<br> denouncing pleasure and praising pain was born and In will give you actual.</p>
                                <a href="#" class="btn btn-line">Continue Reading...</a>
                            </div>
                        </div>
                        <!--End of single blog details -->
                    </div>
                    <!-- End of single blog wraper -->
                </div>

                <div class="col-md-6 col-lg-6">
                    <!-- single blog wraper -->
                    <div class="single-blog-wrap type2 text-center">
                        <!-- post image -->
                        <div class="single-blog-image  hover-effect">
                            <a href="#"><img src="assets/img/blog/img5.jpg" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details post-content">
                            <div class="post-info">
                                <span>by.</span><a href="#">Puchka Bolle</a>
                            </div>
                            <div class="post-body">
                                <h4><a href="#">Is branched in my up strictly remember</a></h4>
                                <p>I must explain to you how all mistaken idea<br> denouncing pleasure and praising pain was born and In will give you actual.</p>
                                <a href="#" class="btn btn-line">Continue Reading...</a>
                            </div>
                        </div>
                        <!--End of single blog details -->
                    </div>
                    <!-- End of single blog wraper -->
                </div>

                <div class="col-md-6 col-lg-6">
                    <!-- single blog wraper -->
                    <div class="single-blog-wrap type2 text-center">
                        <!-- post image -->
                        <div class="single-blog-image  hover-effect">
                            <a href="#"><img src="assets/img/blog/img6.jpg" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details post-content">
                            <div class="post-info">
                                <span>by.</span><a href="#">Puchka Bolle</a>
                            </div>
                            <div class="post-body">
                                <h4><a href="#">Prospect out bed contempt separate</a></h4>
                                <p>I must explain to you how all mistaken idea<br> denouncing pleasure and praising pain was born and In will give you actual.</p>
                                <a href="#" class="btn btn-line">Continue Reading...</a>
                            </div>
                        </div>
                        <!--End of single blog details -->
                    </div>
                    <!-- End of single blog wraper -->
                </div>
                
                <div class="col-12">
                    <!-- dash add -->
                    <div class="dash-add-inner mb-60" data-bg-img='assets/img/blog/dash-add.jpg'>
                        <div class="dash-add-text">
                            <h5>Woven Oversize Square<br>Throw Pillow</h5>
                        </div>
                    </div>
                    <!-- end of dash add -->
                </div>

                <div class="col-md-6 col-lg-6">
                    <!-- single blog wraper -->
                    <div class="single-blog-wrap type2 text-center">
                        <!-- post image -->
                        <div class="single-blog-image  hover-effect">
                            <a href="#"><img src="assets/img/blog/img7.jpg" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details post-content">
                            <div class="post-info">
                                <span>by.</span><a href="#">Puchka Bolle</a>
                            </div>
                            <div class="post-body">
                                <h4><a href="#">The servants securing material</a></h4>
                                <p>I must explain to you how all mistaken idea<br> denouncing pleasure and praising pain was born and In will give you actual.</p>
                                <a href="#" class="btn btn-line">Continue Reading...</a>
                            </div>
                        </div>
                        <!--End of single blog details -->
                    </div>
                    <!-- End of single blog wraper -->
                </div>

                <div class="col-md-6 col-lg-6">
                    <!-- single blog wraper -->
                    <div class="single-blog-wrap type2 text-center">
                        <!-- post image -->
                        <div class="single-blog-image  hover-effect">
                            <a href="#"><img src="assets/img/blog/img8.jpg" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details post-content">
                            <div class="post-info">
                                <span>by.</span><a href="#">Puchka Bolle</a>
                            </div>
                            <div class="post-body">
                                <h4><a href="#">She right plate seven has bed</a></h4>
                                <p>I must explain to you how all mistaken idea<br> denouncing pleasure and praising pain was born and In will give you actual.</p>
                                <a href="#" class="btn btn-line">Continue Reading...</a>
                            </div>
                        </div>
                        <!--End of single blog details -->
                    </div>
                    <!-- End of single blog wraper -->
                </div>
            </div>
            <div class="row"> 
                <div class="col-12">
                    <!-- blog pagination -->
                    <div class="blog-pagination-wrap"> 
                        <ul class="pagination blog-pagination list-unstyled"> 
                            <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#">01</a> </li>
                            <li class="active"><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul> 
                    </div>
                    <!-- End of blog pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- Ennd of blog post inner -->


    <?php include "./includes/footer.php";