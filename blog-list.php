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
                <div class="col-lg-12">
                    <!-- single blog post -->
                    <div class="single-blog-wrap type3">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-lg-8">
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
                            <div class="col-md-5 col-lg-4 order-first order-md-last">
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
                            <div class="col-md-5 col-lg-4">
                                <!-- single blog image -->
                                <div class="single-blog-image hover-effect">
                                    <a href="#"><img src="assets/img/blog/list-2.png" alt=""></a>
                                </div>
                                <!-- End of single blog image -->
                            </div>
                            <div class="col-md-7 col-lg-8">
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
                            <div class="col-md-7 col-lg-8">
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
                            <div class="col-md-5 col-lg-4 order-first order-md-last">
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
                            <div class="col-md-5 col-lg-4">
                                <!-- single blog image -->
                                <div class="single-blog-image hover-effect">
                                    <a href="#"><img src="assets/img/blog/list-4.png" alt=""></a>
                                </div>
                                <!-- End of single blog image -->
                            </div>

                            <div class="col-md-7 col-lg-8">
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
    </section>
    <!-- Ennd of blog post inner -->


    <!-- footer area -->
   
    <?php include "./includes/footer.php";