<?php include "./includes/header.php"; ?>

<?php

$fetchServiceStmt = $conn->prepare("SELECT * FROM `products` LIMIT 6");

$fetchServiceStmt->execute();
?>
<!-- offcanvas menu-->
<!-- offcanvas overlay -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas overlay -->

<!-- offcanvas mainmenu -->
<div class="offcanvas header-offcanvas2">
    <div class="offcanvas-cancel">
        <img src="assets/img/icons/close-button.svg" class="svg" alt="">
    </div>
</div>
<!-- offcanvas mainmenu -->

<!-- cart list -->
<div class="offcanvas offcanvas-cart-list">
    <div class="offcanvas-head">
        <div class="head-text">
            <img src="assets/img/icons/add-bag2.svg" class="svg" alt="">
            <h3>Cart List</h3>
        </div>
        <div class="offcanvas-cancel">
            <img src="assets/img/icons/close-button.svg" class="svg" alt="">
        </div>
    </div>

    <div class="offcanvas-inner">
        <div class="added-cart-list">
            <!-- single cart list -->
            <div class="single-added-list">
                <!-- single cart list left -->
                <div class="single-item-left media align-items-center">
                    <img src="assets/img/clients/wishlist1.png" alt="">
                    <div class="single-item-details midea-body">
                        <h5><a href="#">Women's Strap Sandal</a> </h5>
                        <p>25 X 2</p>
                    </div>
                </div>
                <!-- End of single cart list left -->

                <!-- Single wish list right -->
                <div class="single-item-right text-right">
                    <a href="#"><img src="assets/img/icons/remove.svg" alt="" class="svg"></a>
                    <div class="product-quantity">
                                        <span class="minus"><img src="assets/img/icons/minus.svg" class="svg" alt=""></span>
                                        <input id="quantity" type="text" value="0" class="product-quantity-list product-size">
                                        <span class="plus"><img src="assets/img/icons/plus.svg" class="svg" alt=""></span>
                                    </div>
                    <h6 id="product_total_amt">0.00</h6>
                </div>
                
                <!-- End of Single cart list right -->
            </div>
            <!-- End of single cart list -->

            <!-- single cart list -->
            <div class="single-added-list">
                <!-- single cart list left -->
                <div class="single-item-left media align-items-center">
                    <img src="assets/img/clients/wishlist2.png" alt="">
                    <div class="single-item-details midea-body">
                        <h5><a href="#">Wilson Dynasty 29” Basketball</a></h5>
                        <p>25 X 1</p>
                    </div>
                </div>
                <!-- End of singlecart list left -->

                <!-- Single cart list right -->
                <div class="single-item-right text-right">
                    <a href="#"><img src="assets/img/icons/remove.svg" alt="" class="svg"></a>
                    <div class="product-quantity">
                                        <span class="minus me-1" > <img src="assets/img/icons/minus.svg" class="svg" alt=""> </span>
                                        <input id="quantity" type="text" value="0" class="product-quantity-list product-size">
                                        <span class="plus ms-1"> <img src="assets/img/icons/plus.svg" class="svg" alt=""> </span>
                                    </div>
                    <h6 id="product_total_amt1111111">0.00</h6>
                </div>
                <!-- End of Single cart list right -->
            </div>
            <!-- End of single cart list -->
        </div>
        <!-- total price -->
        <div class="total-price">
            <h5>Sub Total</h5>
            <h3 >$<span id="product_total_amt">0.00</span></h3>
        </div>
        <!-- End of total price -->

        <!-- add to button an support -->
        <div class="view-cart-check-btn text-center">
            <a href="#" class='btn btn-fill-type'>View Cart List</a>
            <a href="#" class='btn btn-fill-type'>Check Out</a>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>
        <div class="cart-support">
            <p class="roboto">Support</p>
            <ul class="list-unstyled">
                <li>
                    <span><i class="fa fa-phone"></i></span>
                    Phone: +00 654 321 9874
                </li>
                <li>
                    <span><i class="fa fa-map-marker"></i></span>
                    1622 Colins Street West, Strawberry (Le), ITALY
                </li>
            </ul>
        </div>
        <!-- add to button an support -->
    </div>
</div>
<!-- End of cart list -->

<!-- log in and register -->
<div class="offcanvas offcanvas-account">
    <div class="offcanvas-head">
        <div class="head-text">
            <img src="assets/img/icons/account2.svg" class="svg" alt="">
            <h3>Account</h3>
        </div>
        <div class="offcanvas-cancel">
            <img src="assets/img/icons/close-button.svg" class="svg" alt="">
        </div>
    </div>

    <div class="offcanvas-inner">
        <!-- login register -->
        <div class="login-register-wrap">
            <!-- login register nav -->
            <div class="login-register-nav">
                <nav class="nav lr-nav text-center">
                    <a id="nav-login-tab" data-toggle="tab" href="#login" class="active">Log In</a>
                    <a id="nav-register-tab" data-toggle="tab" href="#reg">Register</a>
                </nav>
            </div>
            <!-- End of login register nav -->

            <!-- login register content -->
            <div class="login-register-content tab-content">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="nav-login-tab">
                    <div class="primary-form parsley-validate">
                        <form action="#">
                            <!-- loging input -->
                            <div class="name-input input-field">
                                <label>
                                    <img src="assets/img/icons/account3.svg" class="svg" alt="">
                                </label>
                                <input type="text" placeholder='User name / Email Address' class="theme-input-style" required>
                            </div>

                            <div class="password-input input-field">
                                <label>
                                    <img src="assets/img/icons/regi-icon.svg" class="svg" alt="">
                                </label>
                                <input type="password" placeholder='password' class="theme-input-style" required>
                            </div>
                            <!-- loging input -->
                            <button type="submit" class="btn btn-fill-type">log In</button>
                        </form>
                        <p>Don’t have an account,<a href="#"> register now!</a></p>
                    </div>
                </div>

                <div class="tab-pane fade" id="reg" role="tabpanel" aria-labelledby="nav-login-tab">
                    <div class="primary-form parsley-validate">
                        <form action="#">
                            <!-- register input -->
                            <div class="name-input input-field">
                                <label>
                                    <img src="assets/img/icons/account-icon.svg" class="svg" alt="">
                                </label>
                                <input type="text" placeholder='User name / Email Address' class="theme-input-style" required>
                            </div>

                            <div class="email-input input-field">
                                <label>
                                    <img src="assets/img/icons/email-icon.svg" class="svg" alt="">
                                </label>
                                <input type="email" placeholder='email' class="theme-input-style" required>
                            </div>

                            <div class="password-input input-field">
                                <label>
                                    <img src="assets/img/icons/regi-icon.svg" class="svg" alt="">
                                </label>
                                <input type="password" placeholder='password' class="theme-input-style" required>
                            </div>
                            <!-- register input -->
                            <button type="submit" class="btn btn-fill-type">Register</button>
                        </form>
                        <p>Have an account,<a href="#">Log In now!</a></p>
                    </div>
                </div>
            </div>
            <!-- End of login register content -->
        </div>
        <!-- End of login register -->

        <!-- add to button an support -->
        <div class="cart-support">
            <p class="roboto">Support</p>
            <ul class="list-unstyled">
                <li>
                    <span><i class="fa fa-phone"></i></span>
                    Phone: +00 654 321 9874
                </li>
                <li>
                    <span><i class="fa fa-map-marker"></i></span>
                    1622 Colins Street West, Strawberry (Le), ITALY
                </li>
            </ul>
        </div>
        <!-- add to button an support -->
    </div>
</div>
<!-- End of log in and ragister -->

<!-- End of offcanvas menu-->

<!-- banner area -->
<h1 style="margin-top: 200px;">hello</h1>
<div class="row">
<!-- cart images div -->





<!-- cart product details -->
<div class="col-md-7 col-11 mx-auto px-4 mt-2">
<div class="row">
<!-- product name  -->
<div class="col-6 card-title">
<h1 class="mb-4 product_name">Blue Zara Shirt</h1>

</div>
<!-- quantity inc dec -->
<div class="col-6">
<ul class="pagination justify-content-end set_quantity">
<li class="page-item">
<button class="page-link " onclick="decreaseNumber('textbox','itemval')">
<i class="fas fa-minus"></i> </button>
</li>
<li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox" >
</li>
<li class="page-item">
<button class="page-link" onclick="increaseNumber('textbox','itemval')"> <i class="fas fa-plus"></i></button>
</li>
</ul>
</div>
</div>
<!-- //remover move and price -->
<div class="row">

<div class="col-4 d-flex justify-content-end price_money">
<h3>$<span id="itemval">0.00 </span></h3>
</div>
</div>
</div>
</div>
<!-- End of Subscribe area -->
<script type="text/javascript">



const decreaseNumber = (incdec, itemprice) => {
var itemval = document.getElementById(incdec);
var itemprice = document.getElementById(itemprice);
console.log( itemprice.innerHTML);
// console.log(itemval.value);
if(itemval.value <= 0){
itemval.value = 0;
alert('Negative quantity not allowed');
}else{
itemval.value = parseInt(itemval.value) - 1;
itemval.style.background = '#fff';
itemval.style.color = '#000';
itemprice.innerHTML  = parseInt(itemprice.innerHTML) - 15;
product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) - 15;
total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
}
}
const increaseNumber = (incdec, itemprice) => {
var itemval = document.getElementById(incdec);
var itemprice = document.getElementById(itemprice);
// console.log(itemval.value);
if(itemval.value >= 5){
itemval.value = 5;
alert('max 5 allowed');
itemval.style.background = 'red';
itemval.style.color = '#fff';
}else{
itemval.value = parseInt(itemval.value) + 1;
itemprice.innerHTML  = parseInt(itemprice.innerHTML ) + 15;
product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + 15;
total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
}
}


</script>
<?php include "./includes/footer.php";
