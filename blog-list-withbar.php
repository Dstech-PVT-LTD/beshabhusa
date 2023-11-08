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
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- single blog post -->
                            <div class="single-blog-wrap type3">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <!-- single blog post details -->
                                        <div class="single-post-details left-content">
                                            <p>#FashionDesign</p>
                                            <h3><a href="#">Enim ad Minim Veniam Quis trud</a></h3>
                                            <div class="post-info">
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <a href="#">2018/09/15</a>
                                                    </li>
                                                    <li>
                                                        by <a href="#">Andreow</a>
                                                    </li>
                                                </ul>   
                                            </div>
                                            <div class="post-body">
                                                <p>I must explain to you how all mistaken idea denounci ng pleasure and praising pain was born and In will give you actual.</p>
                                                <div class="reading-and-reply d-flex align-items-center justify-content-between">
                                                    <a href="#" class="btn btn-line">Continue Reading...</a>
                                                    <!-- single post reply and comment -->
                                                    <div class="single-reply-comment">
                                                        <a href="#"><i class="fa fa-comment-o"></i>4</a>
                                                        <a href="#"><i class="fa fa-reply"></i>5</a>
                                                    </div>
                                                    <!-- End of single post reply and comment -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- End of single blog post details -->
                                    </div>
                                    <div class="col-md-5 order-first order-md-last">
                                        <!-- single blog image -->
                                        <div class="single-blog-image hover-effect">
                                            <a href="#"><img src="assets/img/blog/list-1.png" alt=""></a>
                                        </div>
                                        <!-- End of single blog image -->
                                    </div>
                                </div>
                            </div>
                            <!-- End of single blog post -->
                             
                             <!-- single blog post -->
                            <div class="single-blog-wrap type3">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <!-- single blog image -->
                                        <div class="single-blog-image hover-effect">
                                            <a href="#"><img src="assets/img/blog/list-2.png" alt=""></a>
                                        </div>
                                        <!-- End of single blog image -->
                                    </div>

                                    <div class="col-md-7">
                                        <!-- single blog post details -->
                                        <div class="single-post-details right-content">
                                            <p>#FashionDesign</p>
                                            <h3><a href="#">Quis autem vel eum iure reprehen derit</a></h3>
                                            <div class="post-info">
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <a href="#">2018/09/15</a>
                                                    </li>
                                                    <li>
                                                        by <a href="#">Andreow</a>
                                                    </li>
                                                </ul>   
                                            </div>
                                            <div class="post-body">
                                                <p>I must explain to you how all mistaken idea denounci ng pleasure and praising pain was born and In will give you actual.</p>
                                                <div class="reading-and-reply d-flex align-items-center justify-content-between">
                                                    <a href="#" class="btn btn-line">Continue Reading...</a>
                                                    <!-- single post reply and comment -->
                                                    <div class="single-reply-comment">
                                                        <a href="#"><i class="fa fa-comment-o"></i>4</a>
                                                        <a href="#"><i class="fa fa-reply"></i>5</a>
                                                    </div>
                                                    <!-- End of single post reply and comment -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- End of single blog post details -->
                                    </div>
                                </div>
                            </div>
                            <!-- End of single blog post -->

                            <!-- single blog quote -->
                            <div class="single-blog-quote">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9 col-md-10">
                                        <div class="single-quote-text text-center">
                                            <h4>“Sed ut perspiciatis unde omnis iste natus voluptatem <br>accusantium doloremque laudantium, totam eaque ipsam a quae ab illo inventore veritatis.”</h4>
                                            <p>Jeson Cerdica</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of single blog quote -->

                            <!-- single blog post -->
                            <div class="single-blog-wrap type3">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <!-- single blog post details -->
                                        <div class="single-post-details left-content">
                                            <p>#FashionDesign</p>
                                            <h3><a href="#">Is branched in my up strictly remember</a></h3>
                                            <div class="post-info">
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <a href="#">2018/09/15</a>
                                                    </li>
                                                    <li>
                                                        by <a href="#">Andreow</a>
                                                    </li>
                                                </ul>   
                                            </div>
                                            <div class="post-body">
                                                <p>I must explain to you how all mistaken idea denounci ng pleasure and praising pain was born and In will give you actual.</p>
                                                <div class="reading-and-reply d-flex align-items-center justify-content-between">
                                                    <a href="#" class="btn btn-line">Continue Reading...</a>
                                                    <!-- single post reply and comment -->
                                                    <div class="single-reply-comment">
                                                        <a href="#"><i class="fa fa-comment-o"></i>4</a>
                                                        <a href="#"><i class="fa fa-reply"></i>5</a>
                                                    </div>
                                                    <!-- End of single post reply and comment -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- End of single blog post details -->
                                    </div>
                                    <div class="col-md-5 order-first order-md-last">
                                        <!-- single blog image -->
                                        <div class="single-blog-image hover-effect">
                                            <a href="#"><img src="assets/img/blog/list-3.png" alt=""></a>
                                        </div>
                                        <!-- End of single blog image -->
                                    </div>
                                </div>
                            </div>
                            <!-- End of single blog post -->
                             
                             <!-- single blog post -->
                            <div class="single-blog-wrap type3">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <!-- single blog image -->
                                        <div class="single-blog-image hover-effect">
                                            <a href="#"><img src="assets/img/blog/list-4.png" alt=""></a>
                                        </div>
                                        <!-- End of single blog image -->
                                    </div>

                                    <div class="col-md-7">
                                        <!-- single blog post details -->
                                        <div class="single-post-details right-content">
                                            <p>#FashionDesign</p>
                                            <h3><a href="#">Prospect out bed contempt separate</a></h3>
                                            <div class="post-info">
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <a href="#">2018/09/15</a>
                                                    </li>
                                                    <li>
                                                        by <a href="#">Andreow</a>
                                                    </li>
                                                </ul>   
                                            </div>
                                            <div class="post-body">
                                                <p>I must explain to you how all mistaken idea denounci ng pleasure and praising pain was born and In will give you actual.</p>
                                                <div class="reading-and-reply d-flex align-items-center justify-content-between">
                                                    <a href="#" class="btn btn-line">Continue Reading...</a>
                                                    <!-- single post reply and comment -->
                                                    <div class="single-reply-comment">
                                                        <a href="#"><i class="fa fa-comment-o"></i>4</a>
                                                        <a href="#"><i class="fa fa-reply"></i>5</a>
                                                    </div>
                                                    <!-- End of single post reply and comment -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- End of single blog post details -->
                                    </div>
                                </div>
                            </div>
                            <!-- End of single blog post -->
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
                <div class="col-lg-3">
                    <aside>
                        <!--Single sidebar widget -->
                        <div class="single-sidebar-widget mb-60">
                            <div class="search-form sidebar-search-form parsley-validate">
                                <form action="#" method="post">
                                    <input type="text" placeholder="Search Here" class="theme-input-style" required>
                                    <button type="submit"><img src="assets/img/icons/search-button3.svg" class="svg" alt=""></button>
                                </form>
                            </div>
                        </div>
                        <!--End of Single sidebar widget -->

                        <!--Single sidebar widget -->
                        <div class="single-sidebar-widget mb-60">
                            <!-- widget title -->
                            <div class="widget-title">
                                <h4>Populer Posts</h4>
                            </div>
                            <!--End of widget title -->
                            <div class="populer-post">
                                <ul class="list-unstyled mb-0">
                                    <!-- single populer post -->
                                    <li>
                                        <h5><a href="#">No one rejects, dislikes, or avoids pleasure itself</a></h5>
                                        <p>by. <a href="#">Puchka Bolle</a></p>
                                    </li>
                                    <!--End of single populer post -->

                                    <!-- single populer post -->
                                    <li>
                                        <h5><a href="#">Nor again is there anyone who does loves or pursues desires.</a></h5>
                                        <p>by. <a href="#">Puchka Bolle</a></p>
                                    </li>
                                    <!-- End of single populer post -->

                                    <!-- single populer post -->
                                    <li>
                                        <h5><a href="#">who are beguiled and demoralizedlf</a></h5>
                                        <p>by. <a href="#">Puchka Bolle</a></p>
                                    </li>
                                    <!--End of  single populer post -->

                                    <!-- single populer post -->
                                    <li>
                                        <h5><a href="#">The pain trouble bound to ensue</a></h5>
                                        <p>by. <a href="#">Puchka Bolle</a></p>
                                    </li>
                                    <!--End of single populer post -->
                                </ul>
                            </div>
                        </div>
                        <!--End of Single sidebar widget -->

                        <!--Single sidebar widget -->
                        <div class="single-sidebar-widget mb-60">
                            <div class="sider-add-inner" data-bg-img='assets/img/blog/sidebar-add.jpg'>
                                <div class="sidebar-add-text">
                                    <h2 class="h1">75</h2>
                                    <h3>% off</h3>
                                    <p>For Gents Wear</p>
                                    <a href="#" class="btn btn-line"> Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!--End of Single sidebar widget -->

                        <!--Single sidebar widget -->
                        <div class="single-sidebar-widget mb-60">
                            <div class="sidebar-social-area">
                                <ul class="list-unstyled mb-0">
                                    <!-- single social icon -->
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <!--End of single social icon -->

                                    <!-- single social icon -->
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <!-- End of single social icon -->

                                    <!-- single social icon -->
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                    <!--End of  single social icon -->

                                    <!-- single social icon -->
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <!--End of single social icon -->

                                    <!-- single social icon -->
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <!--End of single social icon -->
                                </ul>
                            </div>
                        </div>
                        <!--End of Single sidebar widget -->

                        <!--Single sidebar widget -->
                        <div class="single-sidebar-widget mb-60">
                            <!-- widget title -->
                            <div class="widget-title">
                                <h4>Stay Tuned</h4>
                            </div>
                            <!--End of widget title -->
                            <p>will give you a complete account of the system of the truth.</p>
                            <div class="stay-form sidebar-stay-form parsley-validate">
                                <form action="#" method="post">
                                    <input type="Email" placeholder="Your Email Here" class="theme-input-style" required>
                                    <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                </form>
                            </div>
                        </div>
                        <!--End of Single sidebar widget -->

                        <!--Single sidebar widget -->
                        <div class="single-sidebar-widget widget_nav_menu mb-60">
                            <!-- widget title -->
                            <div class="widget-title">
                                <h4>Catagory</h4>
                            </div>
                            <!--End of widget title -->
                            <ul>
                                <li><a href="#">Fashion<span>(5)</span></a></li>
                                <li><a href="#">Foods<span>(5)</span></a></li>
                                <li><a href="#">Hand cast & glazed <span>(5)</span></a></li>
                                <li><a href="#">Home & decor<span>(5)</span></a></li>
                                <li><a href="#">Rugs<span>(5)</span></a></li>
                                <li><a href="#">Shoes<span>(5)</span></a></li>
                            </ul>
                        </div>
                        <!--End of Single sidebar widget -->
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End of blog post inner -->


    <?php include "./includes/footer.php";