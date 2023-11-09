<?php

include 'includes/config.php';



if (($_SERVER["REQUEST_METHOD"] == "POST")) {

  if (($_POST['first_name'] != '') && ($_POST['last_name'] != '') && ($_POST['email'] != '') && ($_POST['phone'] != '') && ($_POST['country'] != '') && ($_POST['city'] != '') && ($_POST['street_address'] != '') && ($_POST['street_addressop'] != '') && ($_POST['dist'] != '') && ($_POST['pin_code'] != '')) {

    $userId = 1;
$orderId = "ORS" . (10000 + rand(1, 90000));
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

      $sql = "INSERT INTO `biling_details`(`user_id`, `product_id`, `order_id`, `first_name`, `last_name`, `phone`, `email`, `country`, `city`, `street_address`, `street_addressop`, `dist`, `pin_code`, `quantity`, `price`,`payment_system`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $array = [$userId,$cart['product_id'],$orderId, $_POST['first_name'], $_POST['last_name'], $_POST['phone'], $_POST['email'], $_POST['country'], $_POST['city'], $_POST['street_address'], $_POST['street_addressop'], $_POST['dist'], $_POST['pin_code'],  $cart['quantity'], $product['price'],$paymentSystem];
      $insert = $conn->prepare($sql);
      $result1 = $insert->execute($array);
   
      
    }
  }else{
    http_response_code(200);
      echo json_encode(['status' => 'error', 'message' => 'Cart is empty']);
  }



    if ($result1) {

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

}
?>