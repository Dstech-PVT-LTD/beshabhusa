<?php include "./includes/header.php"; ?>
<?php


$id = base64_decode($_GET['id']);

$fetchProductStmt = $conn->prepare("SELECT * FROM `products` WHERE `id` =? ");
$fetchProductStmt->execute([$id]);
$product= $fetchProductStmt->fetch(PDO::FETCH_ASSOC);

?>

<div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">product details 2</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-details-area pt-120 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="product-details-tab">
                            <div class="product-dec-right pro-dec-big-img-slider">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="<?php echo $product['image'];?>">
                                            <img src="<?php echo $product['image'];?>" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-1.jpg"><i class="icon-size-fullscreen"></i></a>
                                </div>
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product-details/b-large-2.jpg">
                                            <img src="assets/images/product-details/large-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-2.jpg"><i class="icon-size-fullscreen"></i></a>
                                </div>
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product-details/b-large-3.jpg">
                                            <img src="assets/images/product-details/large-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-3.jpg"><i class="icon-size-fullscreen"></i></a>
                                </div>
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product-details/b-large-4.jpg">
                                            <img src="assets/images/product-details/large-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-4.jpg"><i class="icon-size-fullscreen"></i></a>
                                </div>
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="assets/images/product-details/b-large-2.jpg">
                                            <img src="assets/images/product-details/large-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/b-large-2.jpg"><i class="icon-size-fullscreen"></i></a>
                                </div>
                            </div>
                            <div class="product-dec-left product-dec-slider-small-2 product-dec-small-style2">
                                <div class="product-dec-small active">
                                    <img src="assets/images/product-details/small-1.jpg" alt="">
                                </div>
                                <div class="product-dec-small">
                                    <img src="assets/images/product-details/small-2.jpg" alt="">
                                </div>
                                <div class="product-dec-small">
                                    <img src="assets/images/product-details/small-3.jpg" alt="">
                                </div>
                                <div class="product-dec-small">
                                    <img src="assets/images/product-details/small-4.jpg" alt="">
                                </div>
                                <div class="product-dec-small">
                                    <img src="assets/images/product-details/small-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="product-details-content pro-details-content-mt-md">
                            <h2><?php echo $product['name']; ?></h2>
                            <input type="hidden" id="pid" value="<?php echo $id; ?>">
                            <div class="product-ratting-review-wrap">
                                <div class="product-ratting-digit-wrap">
                                    <div class="product-ratting">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <div class="product-digit">
                                        <span>5.0</span>
                                    </div>
                                </div>
                                <div class="product-review-order">
                                    <span>62 Reviews</span>
                                    <span>242 orders</span>
                                </div>
                            </div>
                            <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                            <div class="pro-details-price">
                                <span class="new-price"> &#x20B9;<?php echo $product['price']; ?></span>
                                <span class="old-price"> &#x20B9;<?php echo $product['mrp']; ?></span>
                            </div>
                            <div class="pro-details-color-wrap">
                                <span>Color:</span>
                                <div class="pro-details-color-content">
                                <div class="pro-details-color-content">
                                    <ul>
                                        <li>
                                                <a class="dolly" href="#"> <input class="form-check-input d-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">dolly</label></a>
                                        </li>

                                        <li>
                                               <a class="azalea" href="#"> <input class="form-check-input d-none" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">white</label></a>
                                        </li>

                                        <li>
                                               <a class="azalea" href="#"><input class="form-check-input d-none" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                                <label class="form-check-label" for="flexRadioDefault3"> azalea</label></a>
                                        </li>
                                        <li>
                                            <a class="peach-orange" href="#"><input class="form-check-input d-none" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                                <label class="form-check-label" for="flexRadioDefault4"> Orange</label></a>
                                        </li>
                                        <li>
                                            <a class="mona-lisa active" href="#"><input class="form-check-input d-none" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked>
                                                <label class="form-check-label" for="flexRadioDefault5"> lisa</label></a>
                                            </li>
                                        <li>
                                            <a class="cupid" href="#"><input class="form-check-input d-none" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                                <label class="form-check-label" for="flexRadioDefault6"> cupid</label></a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            <div class="pro-details-size">
                                <span>Size:</span>
                                <div class="pro-details-size-content">
                                    <ul>
                                        <li>
                                        <input id="XS_size" type="radio" style="display: none;" name="equll_size" value="XS" checked="checked">
                                            <label for="XS_size"><a class="product-size"><span>XS</span></a></label>
                                    
                                    </li>
                                        <li>
                                    <input id="S_size" type="radio" style="display: none;" name="equll_size" value="S">
                                            <label for="S_size"><a class="product-size"><span>S</span></a></label>

                                    </li>
                                        <li>
                                        <input id="M_size" type="radio" style="display: none;" name="equll_size" value="M">
                                            <label for="M_size"><a class="product-size"><span>M</span></a></label>
                                    </li>
                                        <li>
                                        <input id="L_size" type="radio" style="display: none;" name="equll_size" value="L">
                                            <label for="L_size"><a class="product-size"><span>L</span></a></label>
                                    </li>
                                        <li>
                                        <input id="XL_size" type="radio" style="display: none;" name="equll_size" value="XL">
                                            <label for="XL_size"><a class="product-size"><span>XL</span></a></label>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <span>Quantity:</span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" id="quantity"type="text" name="qtybutton" value="1">
                                </div>
                            </div>
                            <div class="product-details-meta">
                                <ul>
                                    <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a> <a href="#">T-Shirt</a></li>
                                    <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-action-wrap">
                            <div class="pro-details-add-to-cart">
                                    <a title="Add to Cart" data-bs-toggle="modal" data-bs-target="#exampleModal">Add To Cart </a>
                                </div>
                                <div class="pro-details-action">
                                    <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                    <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                    <div class="product-dec-social">
                                        <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                        <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                        <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                        <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-wrapper pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dec-review-topbar nav mb-45">
                            <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                            <a data-bs-toggle="tab" href="#des-details2">Specification</a>
                            <a data-bs-toggle="tab" href="#des-details3">Meterials </a>
                            <a data-bs-toggle="tab" href="#des-details4">Reviews and Ratting </a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="description-wrap">
                                    <p>Crafted in premium watch quality, fenix Chronos is the first Garmin timepiece to combine a durable metal case with integrated performance GPS to support navigation and sport. In the tradition of classic tool watches it features a tough design and a set of modern meaningful tools.</p>
                                    <p> advanced performance metrics for endurance sports, Garmin quality navigation features and smart notifications. In fenix Chronos top-tier performance meets sophisticated design in a highly evolved timepiece that fits your style anywhere, anytime. Solid brushed 316L stainless steel case with brushed stainless steel bezel and integrated EXOTM antenna for GPS + GLONASS support. High-strength scratch resistant sapphire crystal. Brown vintage leather strap with hand-sewn contrast stitching and nubuck inner lining and quick release mechanism.</p>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="title width1">Name</td>
                                                <td>Salwar Kameez</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">SKU</td>
                                                <td>0x48e2c</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Models</td>
                                                <td>FX 829 v1</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Categories</td>
                                                <td>Digital Print</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Size</td>
                                                <td>60’’ x 40’’</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Brand </td>
                                                <td>Individual Collections</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Color</td>
                                                <td>Black, White</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="title width1">Top</td>
                                                <td>Cotton Digital Print Chain Stitch Embroidery Work</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Bottom</td>
                                                <td>Cotton Cambric</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Dupatta</td>
                                                <td>Digital Printed Cotton Malmal With Chain Stitch</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details4" class="tab-pane">
                                <div class="review-wrapper">
                                    <h2>1 review for Sleeve Button Cowl Neck</h2>
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/product-details/client-1.png" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-name">
                                                    <h5><span>John Snow</span> - March 14, 2019</h5>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="yellow icon_star"></i>
                                                    <i class="yellow icon_star"></i>
                                                    <i class="yellow icon_star"></i>
                                                    <i class="yellow icon_star"></i>
                                                    <i class="yellow icon_star"></i>
                                                </div>
                                            </div>
                                            <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ratting-form-wrapper">
                                    <span>Add a Review</span>
                                    <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Name <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Email <span>*</span></label>
                                                        <input type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="star-box-wrap">
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Your review <span>*</span></label>
                                                        <textarea name="Your Review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-submit">
                                                        <input type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-product pb-115">
            <div class="container">
                <div class="section-title mb-45 text-center">
                    <h2>Related Product</h2>
                </div>
              
                <div class="related-product-active">
                <?php
            $cid = $product['catId'];
            $fetchCategoryReleted = $conn->prepare("SELECT * FROM `products` WHERE `catId` =? LIMIT 4");
            $fetchCategoryReleted->execute([$cid]);
            $sl = 1;
            while ($row = $fetchCategoryReleted->fetch()) {
                $dll = base64_encode($row["id"]);

            ?>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a  href="product-details.php?id=<?php echo $dll;?>">
                                    <img src="<?php echo $row['image']; ?>" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.php?id=<?php echo $dll;?>"><?php echo $row['name']; ?></a></h3>
                                <div class="product-price-2">
                                    <span> &#x20B9;<?php echo $row['price']; ?></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.php?id=<?php echo $dll;?>"><?php echo $row['name']; ?></a></h3>
                                <div class="product-price-2">
                                <span> &#x20B9;<?php echo $row['price']; ?></span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                $sl++;
            }
            ?>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-14.jpg" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span class="new-price">$35.45</span>
                                    <span class="old-price">$45.80</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-15.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                <div class="product-price-2">
                                    <span>$35.45</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-18.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                <div class="product-price-2">
                                    <span>$55.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-19.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                <div class="product-price-2">
                                    <span>$65.50</span>
                                </div>
                                <div class="pro-add-to-cart">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subscribe-area bg-gray pt-115 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title">
                            <h2>keep connected</h2>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade row" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm w-50">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="login-register-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 ms-auto me-auto">
                                        <div class="login-register-wrapper">
                                            <div class="login-register-tab-list nav">
                                                <a class="active" href="#lg1">
                                                    <h4> login </h4>
                                                </a>
                                            </div>
                                            <div class="login-form-container">
                                                <div class="login-register-form">
                                                    <form id="loginform" method="post">
                                                        <input type="email" name="email" placeholder="UserEmail">
                                                        <input type="password" name="password"
                                                            placeholder="Password">
                                                        <div class="button-box">
                                                            <div class="login-toggle-btn">
                                                                <input type="checkbox">
                                                                <label>Remember me</label>
                                                                <a href="reset_password.html">Forgot Password?</a>
                                                            </div>
                                                            <button type="submit">Login</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!-- End of product details wrapper -->
        <?php include "./includes/footer.php"; ?>
<script>
       $(document).ready(function() {

             $('#loginform').submit(function(event) {
            event.preventDefault();
            var email = $('input[name="email"]').val();
            var password = $('input[name="password"]').val();

            $.ajax({
                type: "POST",
                url: "../loginApi.php",
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
            var color = $('input[name="color"]:checked').val();
            var productId = $('#pid').val();
            var quantity = $('#quantity').val();

            if (parseInt(quantity) > 0) {
                var formData = {
                    size: size,

                    productId: productId,
                    quantity: quantity,
                    userId: userId,
                    color:color,
                    type: "addtocart"
                };

                $.ajax({
                    type: "POST",
                    url: "../addtoCartApi.php",
                    data: formData,
                    dataType: 'JSON',
                    success: function(response) {
                        console.log(response);
                        // window.location.href = 'cart.php';
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
        $('#addtocart').click(function() {
        addToCart();
    });
});
</script>