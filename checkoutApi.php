<?php

include 'includes/config.php';

require('vendor/autoload.php');


$sendgrid_api_key = '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';
function sendEmail($from, $to, $fromUserName, $subject, $mailContent)
{
    global $sendgrid_api_key;
    // echo "<script>console.log('$from, $to, $fromUserName, $subject, $mailContent')</script>";
    // echo "<script>console.log('send email started')</script>";
    // SMTP
    $msg = strip_tags($mailContent);
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom($from, $fromUserName);
    $email->setSubject("$subject");
    $email->addTo($to, "User");
    $email->addContent("text/plain", "$msg");
    $email->addContent(
        "text/html",
        "$mailContent"
    );
    $sendgrid = new \SendGrid($sendgrid_api_key);
    try {
        $response = $sendgrid->send($email);
        // print_r($response);
        if ($response->statusCode() != 202) {
            // echo "<script>console.log('Sendgrid Failed, SMTP used')</script>";
            $subject = "$subject";
            $message = $mailContent;
            $header = "From: $from \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            mail($to, $subject, $message, $header);
        }
    } catch (Exception $e) {
        $subject = "$subject";
        $message = $mailContent;
        $header = "From: $from \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        mail($to, $subject, $message, $header);
        echo "<script>console.log('In send mail catch')</script>";
    }
}



if (($_SERVER["REQUEST_METHOD"] == "POST")) {

  if (($_POST['first_name'] != '') && ($_POST['last_name'] != '') && ($_POST['email'] != '') && ($_POST['phone'] != '') && ($_POST['country'] != '') && ($_POST['city'] != '') && ($_POST['street_address'] != '') && ($_POST['street_addressop'] != '') && ($_POST['dist'] != '') && ($_POST['pin_code'] != '')) {
   $email = $_POST['email'];
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
            
    $from = 'support@beshabhusa.in';
    $to = $email;
    $fromUserName = 'beshabhusa';
   $subject = 'Submission From localhero Contact Form';
   $mailContent = 'userid: ur email ,password:phone number';
   sendEmail($from, $to, $fromUserName, $subject, $mailContent);
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