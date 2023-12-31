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
                            <li class="active"><a href="#">Blog Details</a></li>
                        </ul>
                    </div>
                    <!-- End of page title inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of page title -->
    
    <!-- blog details inner -->
    <section class="pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- post main content -->
                            <div class="post-main-content text-center">
                                <!-- post mata -->
                                <div class="post-mata">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            On.<a href="#">15 Sep 2018</a>
                                        </li>
                                        <li>
                                            By.<a href="#">Puchka Bolle</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of post mata -->

                                <!-- post main heading-->
                                <div class="post-heading">
                                    <h2>Quis autem vel eum iure reprehen derit<br>qui in ea voluptate</h2>
                                </div>
                                <!-- post main heading-->

                                <!-- post image -->
                                <div class="post-main-image">
                                    <img src="assets/img/blog/blog-details.jpg" data-rjs="2" alt="">
                                    <div class="image-caption"><p>Photography By: <a href="#">Walton de Singer</a></p></div>
                                </div>
                                <!--End of  post image -->
                            </div>
                            <!-- End of post main content -->
                        </div>
                        <div class="col-lg-8">
                            <!--single post content body -->
                            <div class="post-details-body">
                                <div class="single-post-content">
                                    <h5>1914 translation by H. Rackham</h5>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                                    <blockquote>
                                        “sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”
                                    </blockquote>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <h5>The standard Lorem Ipsum passage, used since the 1500s</h5>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                </div>
                            </div>
                            <!-- End of single post content body -->
                        </div>
                        <div class="col-lg-12">
                            <!-- share abd tag border -->
                            <div class="share-and-tag">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!--single post tag and share -->
                                        <div class="single-post-tag-share">
                                            <!-- single post tags -->
                                            <div class="single-blog-tag">
                                                <span>tags:</span>
                                                <a href="#">Fashion</a>,
                                                <a href="#">Beauty</a>,
                                                <a href="#">Trend</a>
                                            </div>
                                            <!-- single post tags -->

                                            <!-- single blog share on -->
                                            <div class="single-blog-share">
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--End of single blog share on -->
                                        </div>
                                        <!--End of single post tag and share -->
                                    </div>
                                </div>
                            </div> 
                            <!-- share abd tag border -->
                        </div>
                        <div class="col-lg-8">
                            <!-- single post author -->
                            <div class="single-post-author media">
                                <img src="assets/img/blog/post-author.jpg" data-rjs ='2' alt="">
                                <div class="post-author-body media-body">
                                    <h6>Walton De Singer</h6>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men.</p>
                                </div>
                            </div>
                            <!-- End of single post author -->
                        </div>
                        <div class="col-lg-10">
                            <!-- related post -->
                            <div class="single-related-post-inner">
                                <div class="related-post-head">
                                    <h3>Related Post</h3>
                                </div>
                                <!-- related post wraper -->
                                <div class="related-post-wraper">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- single blog wraper -->
                                            <div class="single-blog-wrap type2">
                                                <!-- post image -->
                                                <div class="single-blog-image hover-effect">
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

                                        <div class="col-lg-6">
                                            <!-- single blog wraper -->
                                            <div class="single-blog-wrap type2">
                                                <!-- post image -->
                                                <div class="single-blog-image hover-effect">
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
                                    </div>
                                </div>
                                <!-- related post wraper -->
                            </div>
                            <!--End of related post -->
                        </div>
                        <div class="col-lg-12">
                            <!-- post comments wrap -->
                            <div class="post-comments-wrap">
                                <h4>Comments (05)</h4>
                                <!-- comment content-->
                                <div class="row">
                                    <div class="col-lg-9 offset-lg-1">
                                        <div class="single-post-comment-inner">
                                            <ul>
                                                <li>
                                                    <!-- single post comment -->
                                                    <div class="d-flex single-post-comment">
                                                        <div class="avatar">
                                                            <div class="comment-author-image">
                                                                <img src="assets/img/shop/author1.jpg" data-rjs="2" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="avatar-details">
                                                            <h6>Kenter Havens</h6><span class="commnet-time">2d ago</span>
                                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                                            <a href="#">Reply<span><i class="fa fa-reply"></i></span></a>
                                                        </div>
                                                    </div>
                                                    <!-- end of single post comment -->
                                                    <ul>
                                                        <li>
                                                            <!-- single post comment -->
                                                            <div class="d-flex single-post-comment">
                                                                <div class="avatar">
                                                                    <div class="comment-author-image">
                                                                        <img src="assets/img/shop/author2.jpg" data-rjs="2" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-details">
                                                                    <h6>Nicolus Rezerd</h6><span class="commnet-time">2d ago</span>
                                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                                                    <a href="#">Reply<span><i class="fa fa-reply"></i></span></a>
                                                                </div>
                                                            </div>
                                                            <!-- single post comment -->
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <!-- single post comment -->
                                                    <div class="d-flex single-post-comment">
                                                        <div class="avatar">
                                                            <div class="comment-author-image">
                                                                <img src="assets/img/shop/author3.jpg" data-rjs="2" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="avatar-details">
                                                            <h6>Kendra Ratzlaff</h6><span class="commnet-time">2d ago</span>
                                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                                            <a href="#">Reply<span><i class="fa fa-reply"></i></span></a>
                                                        </div>
                                                    </div>
                                                    <!-- single post comment -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of single comment -->
                            </div>
                            <!-- End of post comments wrap -->

                            <!-- comment form -->
                            <div class="comment-form-wrap">
                                <h4>Leave your thought</h4>

                                <div class="row">
                                    <div class="col-lg-9 offset-lg-1">
                                        <!-- commnet respond -->
                                        <div class="comment-respond contact-form parsley-validate">
                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="text" name="name" class="theme-input-style" placeholder="Your Name" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="email" name="email" class="theme-input-style" placeholder="Your email" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="subject" class="theme-input-style" placeholder="Subject" required>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea name="message" placeholder="Message here" class="theme-input-style"></textarea>
                                                        <div class="comment-form-btn">
                                                            <button class="btn">Send message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- commnet respond -->
                                    </div>
                                </div>
                            </div>
                            <!-- End of comment form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ennd of blog details inner -->

    <?php include "./includes/footer.php";