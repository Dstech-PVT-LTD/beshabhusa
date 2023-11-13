<?php include "./includes/header.php"; ?>

<?php
session_start();
 $userId = $_SESSION['id'];
 print_r($_SESSION);
$fetchServiceStmt = $conn->prepare("SELECT * FROM `add_to_carts` WHERE `user_id`= ?");

$fetchServiceStmt->execute([$userId]);
$fetchService = $fetchServiceStmt->fetchAll(PDO::FETCH_ASSOC);

?>

    <!-- page title -->
    <section class="page-title-inner" data-bg-img='assets/img/page-titlebg.png'>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- page title inner -->
                    <div class="page-title-wrap">
                        <div class="page-title-heading"><h1 class="h2">Cart List<span>Shopping</span></h1></div>
                        <ul class="list-unstyled mb-0">
                            <li><a href="index.php">home</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li class="active"><a href="#">Cart List</a></li>
                        </ul>
                    </div>
                    <!-- End of page title inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of page title -->

    <section class="pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <!-- woocommerce -->
                    <div class="woocommerce">
                        <form action="#" method="POST" class="woocommerce-cart-form">
                            <!-- cart product wrap -->
                            <div class="cart-product-wrap">
                                <!-- cart table -->
                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                    <tbody>
                                        <!-- first table row -->
                                        <tr>
                                            <td class="product-name">
                                                Product name
                                            </td>
                                            <td class="">
                                                Size
                                            </td>
                                            <td class="product-quantity">
                                                Quantity
                                            </td>
                                            <td class="product-quantity">
                                                Price/Unit
                                            </td>
                                            <td class="product-subtotal">
                                                Total Price
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <!-- End of first table row -->
                                        <?php foreach($fetchService as $row) {
                                            $fetchProductStmt = $conn->prepare("SELECT * FROM `products` WHERE `id`= ?");

                                            $fetchProductStmt->execute([$row['product_id']]);
                                            $fetchProduct = $fetchProductStmt->fetch(PDO::FETCH_ASSOC);

                                          ?>
                                        <!-- tr -->
                                        <tr class="woocommerce-cart-form__cart-item cart_item">
                                            <!-- product thumbnail -->
                                            <td class="product-thumbnail">
                                                <div class="product-details">
                                                    <a href="#" class="porduct-image-wrap">
                                                        <img src="<?php echo $fetchProduct['image'];?>" alt="">
                                                    </a>
                                                    <a href="#"><?php echo $fetchProduct['name'];?></a>
                                                </div>
                                            </td>
                                            <!-- End of product thumbnail -->

                                            <!-- Product size -->
                                            <td>
                                                <div class="product-size">
                                                    <span class="minus"><img src="assets/img/icons/minus.svg" class="svg" alt=""></span>
                                                    <input type="text" value="<?php echo $row['size'];?>" class="product-size-list">
                                                    <span class="plus"><img src="assets/img/icons/plus.svg" class="svg" alt=""></span>
                                                </div>
                                            </td>
                                            <!--End of Product Size -->

                                            <!-- product quantity -->
                                            <td>
                                                <div class="product-quantity">
                                                    <span class="minus"><img src="assets/img/icons/minus.svg" class="svg" alt=""></span>
                                                    <input type="text" value="<?php echo $quantity =$row ['quantity'];?>" class="product-quantity-list">
                                                    <span class="plus"><img src="assets/img/icons/plus.svg" class="svg" alt=""></span>
                                                </div>
                                            </td>
                                            <!--End of product quantity -->

                                            <td><?php echo $price = $fetchProduct['price'];?></td>
                                            <td><span class="totalprice"><?php echo  $total = $quantity * $price;?></span></td>

                                            <!-- product remove -->
                                            <td class="product-remove">
                                                <div class="remover-field">
                                                    <img src="assets/img/icons/remove.svg" class='svg' alt="">
                                                </div>
                                            </td>
                                            <!--End of  product remove -->
                                        </tr>
                                        <!--End of tr -->
   <?php } ?>
                  
                                    </tbody>
                                </table>
                                <!--End of cart table -->

                                <div class="cart-bottom-wrap">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-5">
                                            <div class="btn-cupon-wrap">
                                                <!-- cart shoping button  -->
                                                <div class="cart-shoping-button">
                                                    <a href="#" class="update-cart-btn btn btn-fill-type"><img src="assets/img/icons/update.svg" class="svg" alt="">Update Cart</a>
                                                    <a href="#" class="update-cart-btn btn btn-fill-type">Continue Shopping</a>
                                                </div>
                                                <!-- End of cart shoping button  -->

                                                <!-- coupon -->
                                                <div class="coupon">
                                                    <input type="text" class="theme-input-style" placeholder="Coupon Code" required>
                                                    <button type="submit" class="btn">Apply Coupon</button>
                                                </div>
                                                <!-- End of coupon -->
                                            </div>
                                        </div>
                                        <div class="offset-lg-2 col-lg-4 col-md-12">
                                            <!-- shop total wrap -->
                                            <div class="shop-total-wrap">
                                                <table class="shop_table shop_table_responsive">
                                                    <tbody>
                                                        <tr class="cart-subtotal">
                                                            <th>
                                                                Subtotal
                                                            </th>
                                                            <td>
                                                                $100
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>
                                                                Total
                                                            </th>
                                                            <td>
                                                                <span class="woocommerce-Price-amount amount">$100</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="wc-proceed-to-checkout">
                                                    <a href="checkout.php" class="update-cart-btn btn btn-fill-type" >Proceed To Checkout</a>
                                                </div>
                                            </div>
                                            <!-- End of shop total wrap -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- cart product wrap -->
                        </form>
                    </div>
                    <!-- woocommerce -->
                </div>
            </div>
        </div>        
    </section>

   <!-- footer area -->
   <?php include "./includes/footer.php";