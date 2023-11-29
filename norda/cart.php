<?php include "./includes/header.php"; ?>
<?php
// session_start();
// $user_id = $_SESSION['id'];
$user_id = 4;
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
                <li class="active">Cart Page</li>
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
                                    <th>Unit Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($fetchService as $row) {
                                    $fetchProductStmt = $conn->prepare("SELECT * FROM `products` WHERE `id`= ?");
                                    $fetchProductStmt->execute([$row['product_id']]);
                                    $fetchProduct = $fetchProductStmt->fetch(PDO::FETCH_ASSOC);

                                    $price = $fetchProduct['price'];
                                    $quantity = $row['quantity'];
                                    $subtotal = $quantity * $price;
                                    ?>
                                    <tr data-product-id="<?php echo $row['id']; ?>">
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">
                                                <?php echo $fetchProduct['name']; ?>
                                            </a>
                                        </td>
                                        <td class="product-price-cart" id="cart_product_price_<?php echo $row['id']; ?>">
                                            <span class="amount">
                                                <?php echo $price; ?>
                                            </span>
                                        </td>
                                        <td class="product-quantity pro-details-quality">
                                            <div class="cart-plus-minus" data-product-id="<?php echo $row['id']; ?>">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="<?php echo $quantity; ?>"
                                                    id="quantity_cart_product_<?php echo $row['id']; ?>">
                                            </div>
                                        </td>
                                        <td class="product-subtotal" id="product_subtotal_<?php echo $row['id']; ?>">
                                            <?php echo $subtotal; ?>
                                        </td>
                                        <td class="product-remove">
                                            <a href="#"><i class="icon_close"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="#">Continue Shopping</a>
                                </div>
                                <div class="cart-clear">
                                    <button>Update Cart</button>
                                    <a href="#">Clear Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="cart-tax">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                            </div>
                            <div class="tax-wrapper">
                                <p>Enter your destination to get a shipping estimate.</p>
                                <div class="tax-select-wrapper">
                                    <div class="tax-select">
                                        <label>
                                            * Country
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            * Region / State
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            * Zip/Postal Code
                                        </label>
                                        <input type="text">
                                    </div>
                                    <button class="cart-btn-2" type="submit">Get A Quote</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6">
                        <div class="discount-code-wrapper">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                            </div>
                            <div class="discount-code">
                                <p>Enter your coupon code if you have one.</p>
                                <form>
                                    <input type="text" required="" name="name">
                                    <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                            </div>
                            <h5>Total products <span id="cart_total"></span></h5>
                            <!-- <div class="total-shipping">
                                <h5>Total shipping</h5>
                                <ul>
                                    <li><input type="checkbox"> Standard <span>$20.00</span></li>
                                    <li><input type="checkbox"> Express <span>$30.00</span></li>
                                </ul>
                            </div> -->
                            <h4 class="grand-totall-title">Grand Total <span id="grand_total"></span></h4>
                            <a href="#">Proceed to Checkout</a>
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
                    <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate=""
                        target="_blank" name="mc-embedded-subscribe-form" method="post"
                        action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                        <div id="mc_embed_signup_scroll" class="mc-form">
                            <input class="email" type="email" required="" placeholder="Enter your email address"
                                name="EMAIL" value="">
                            <div class="mc-news" aria-hidden="true">
                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                            </div>
                            <div class="clear">
                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe"
                                    value="Subscribe">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./includes/footer.php"; ?>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        
        $('.incQty').on('click', function () {
        
          
            var productId = $(this).closest('div.cart-plus-minus').data('product-id');
            
            plusCartQuantity(productId);
        });

       
        $('.decQty').on('click', function () {
            var productId = $(this).closest('div.cart-plus-minus').data('product-id');
            minusCartQuantity(productId);
        });

        // Initial calculation
        updateCatTotal();
    });

    function minusCartQuantity(id) {
        var quantityInput = $('#quantity_cart_product_' + id);
        var quantity = parseInt(quantityInput.val());
        if (quantity >= 1) {
            var price = parseFloat($('#cart_product_price_' + id).text());
            quantity = quantity - 1;
            quantityInput.val(quantity);
            updateSubtotal(id, quantity, price);
            updateCatTotal();
            updateCartQuantity(id, quantity);

            updateDatabase(id, quantity);
        }
    }

    function plusCartQuantity(id) {
        var quantityInput = $('#quantity_cart_product_' + id);
        var quantity = parseInt(quantityInput.val());
        if (quantity >= 1) {
            var price = parseFloat($('#cart_product_price_' + id).text());
            quantity = quantity + 1;
            quantityInput.val(quantity);
            updateSubtotal(id, quantity, price);
            updateCatTotal();
            updateDatabase(id, quantity);
            updateCartQuantity(id, quantity);
        }
    }

    function updateCartQuantity(id, newQuantity) {
        var price = parseFloat($('#cart_product_price_' + id).text());
        $('#quantity_cart_product_' + id).val(newQuantity);
        updateSubtotal(id, newQuantity, price);
    }

    function updateSubtotal(id, quantity, price) {
        var subtotal = quantity * price;
        $('#product_subtotal_' + id).text(subtotal.toFixed(2));
    }

    function updateCatTotal() {
            var totalSubTotal = 0;
            <?php foreach ($fetchService as $row) : ?>
                var quantity = parseInt($('#quantity_cart_product_<?= $row['id']; ?>').val());
                var price = parseFloat($('#cart_product_price_<?= $row['id']; ?>').text());
                var subTotal = quantity * price;
                totalSubTotal += subTotal;
                updateSubtotal(<?= $row['id']; ?>, quantity, price);
            <?php endforeach; ?>
            $('#cart_total').text(totalSubTotal.toFixed(2));

            var shippingTotal = 0;
            var grandTotal = totalSubTotal + shippingTotal;
            $('#grand_total').text(grandTotal.toFixed(2));
        }
    
        function updateDatabase(id, quantity) {
            $.ajax({
                type: 'POST',
                url: 'updateCart.php', 
                data: {
                    productId: id,
                    quantity: quantity
                },
                success: function (response) {
                   
                    console.log(response);
                },
                error: function (error) {
                    
                    console.error(error);
                }
            });
        }

      
        updateCatTotal();
    
</script>
