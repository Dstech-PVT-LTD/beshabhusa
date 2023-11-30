<?php

include 'includes/config.php';
if (($_SERVER["REQUEST_METHOD"] == "POST")) {

if (($_POST['first_name'] != '') && ($_POST['last_name'] != '') && ($_POST['email'] != '') && ($_POST['phone'] != '') && ($_POST['company_name'] != '') && ($_POST['town'] != '') && ($_POST[' state'] != '') && ($_POST['country'] != '') && ($_POST['city'] != '') && ($_POST['street_address'] != '') && ($_POST['pin_code'] != '')) {
 $email = $_POST['email'];
  $userId = 4;

$paymentSystem = isset($_POST['payment_system']) ? $_POST['payment_system'] : '';

  $sql = "SELECT * FROM `add_to_carts` WHERE `user_id` = ?";
  $select = $conn->prepare($sql);
  $select->execute([$userId]);
  $carts = $select->fetchAll(PDO::FETCH_ASSOC);
if($carts){

  foreach ($carts as $cart) {
    $product = $conn->prepare("SELECT * FROM `products` WHERE `id` = ?");
    $product->execute([$cart["product_id"]]);
    $product = $product->fetch(PDO::FETCH_ASSOC);
    $total = $product['price'] * $cart['quantity'];

    $sql = "INSERT INTO `biling_details`(`user_id`, `product_id`, `order_id`, `first_name`, `last_name`, `phone`, `email`, `country`, `city`, `street_address`, `state`,`town`,`company_name`, `pin_code`, `quantity`, `price`,`payment_system`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $array = [$userId,$cart['product_id'],$orderId, $_POST['first_name'], $_POST['last_name'], $_POST['phone'], $_POST['email'], $_POST['country'], $_POST['city'], $_POST['street_address'], $_POST['state'],$_POST['town'],$_POST['company_name'],$_POST['pin_code'],  $cart['quantity'], $product['price'],$paymentSystem];
    $insert = $conn->prepare($sql);
    $result1 = $insert->execute($array);
 $delete = $conn->prepare('DELETE FROM `add_to_cart` WHERE `id`=?');
 $result2 = $delete->execute([$cart['id']]);
    
  }
}else{
  http_response_code(200);
    echo json_encode(['status' => 'error', 'message' => 'Cart is empty']);
}
    http_response_code(200);
    echo json_encode(['status' => 'success', 'message' => 'Successfully Check Out']);
  } else {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Check Out failed to add. Please try again.']);
  }
} else {
  http_response_code(400);
  echo json_encode(['status' => 'error', 'message' => 'Fill All Requeied Fill.']);
}


?>