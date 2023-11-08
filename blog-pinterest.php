<?php include "./includes/header.php"; ?>

<?php

$fetchServiceStmt = $conn->prepare("SELECT * FROM `products` LIMIT 6");

$fetchServiceStmt->execute();
?>

    <!-- End of offcanvas menu-->

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
            <div class="row isotope">
                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta1.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Enim ad Minim Veniam Quis</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta2.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Quis autem vel eum derit</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta3.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Is branched in remember</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta13.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Prospect out bed separate</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta4.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Is he staying arrival earnest</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta6.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">To preference themselves</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta5.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Seems ask meant merry</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta14.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Breakfast met certainty filled</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta7.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Age old begin had boy noisy</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta8.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Table front whole given</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta9.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">For him preca advantages</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta15.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Expect relied do we genius</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta10.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">On as around spirit of hearts</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta12.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Is raptures daughter branched</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta11.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Dwelling and speedily</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
                </div>

                <div class="col-lg-3 col-md-6 grid-item">
                    <!-- single blog wrap -->
                    <div class="single-blog-wrap type4">
                        <!-- post image -->
                        <div class="single-blog-image hover-effect">
                            <a href="blog-details.html"><img src="assets/img/blog/pinta16.png" data-rjs="2" alt=""></a>
                        </div>
                        <!--End of  post image -->

                        <!-- single blog details -->
                        <div class="single-blog-details text-center">
                            <div class="post-info">
                                <span>by.</span><a href="blog-details.html">Puchka Bolle</a>
                            </div>
                            <div class="post-heading">
                                <h4><a href="blog-details.html">Call in so want pure rank</a></h4>
                            </div>
                        </div>
                        <!-- End of single blog details -->
                    </div>
                    <!-- End of single blog wrap -->
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