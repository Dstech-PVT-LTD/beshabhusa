<?php include "./includes/header.php"; ?>

<?php
// session_start();
// $user_id = $_SESSION['id'];
$user_id=5;
$fetchServiceStmt = $conn->prepare("SELECT * FROM `add_to_carts` WHERE `user_id`= ?");

$fetchServiceStmt->execute([$user_id]);
$fetchService = $fetchServiceStmt->fetchAll(PDO::FETCH_ASSOC);

?>
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">Wishlist </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-main-area pt-115 pb-120">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($fetchService as $row) {
                                            
                                            $fetchProductStmt = $conn->prepare("SELECT * FROM `products` WHERE `id`= ?");

                                            $fetchProductStmt->execute([$row['product_id']]);
                                            $fetchProduct = $fetchProductStmt->fetch(PDO::FETCH_ASSOC);

?>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#"><?php echo   $fetchProduct['name']; ?></a></td>
                                            <td class="product-price-cart"><span class="amount">$260.00</span></td>
                                            <td class="product-quantity pro-details-quality">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                </div>
                                            </td>
                                            <td class="product-subtotal" >₹<span id="subtotal_amount"><?php echo number_format($totalSubTotal, 2); ?></span></td>
                                            
                                        </tr>
                                        
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                                    <a href="checkout.php" class="update-cart-btn btn btn-fill-type" >Proceed To Checkout</a>
                                                </div>
                            </div>
                        </form>
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
<?php include "./includes/footer.php"; ?>
<script>
    function updateProductQuantity(productId, newQuantity) {
        $.ajax({
            url:'update_cart.php',
            method: 'POST',
            data: {
                productId: productId,
                quantity: newQuantity
            },
            success: function(response) {
                var data = JSON.parse(response);
                if (data.status === 'success') {
                    alert(data.message);
                } else {
                    alert(data.message);
                }
            },
            error: function() {
                alert('An error occurred during the AJAX request.');
            }
        });
    }

    function minusCartQuantity(id) {
    var quantity = parseInt($('#quantity_cart_product_' + id).val());
    if (quantity > 1) {
        var price = parseInt($('#cart_product_price_' + id).text());
        quantity = quantity - 1;
        $('#quantity_cart_product_' + id).val(quantity);
        $('#product_total_amt_cart_' + id).text(quantity * price);
        updateProductQuantity(id, quantity);
        updateCatTotal();
    }
}
function plusCartQuantity(id){
    var quantity = parseInt($('#quantity_cart_product_' + id).val());
    var price  = parseInt($('#cart_product_price_'+ id).text());
    quantity = quantity+1;
    $('#quantity_cart_product_' + id).val(quantity);
    $('#product_total_amt_cart_'+ id).text(quantity * price);
    updateProductQuantity(id,quantity);
    updateCatTotal();
}

function updateCatTotal() {
    var totalSubTotal = 0;
    <?php
    foreach($fetchService as $row) {
        $price = $fetchProduct['price'];
        $quantity = $row['quantity'];
    ?>
    var quantity = parseInt($('#quantity_cart_product_<?php echo $row['id']; ?>').val());
    var price = parseInt($('#cart_product_price_<?php echo $row['id']; ?>').text());
    var subTotal = quantity * price;
    totalSubTotal += subTotal;
    <?php } ?>
    $('#product_total_amt_cart_').text(totalSubTotal.toFixed(2));
}
</script>