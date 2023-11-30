<?php
include 'includes/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userId = 4;
    // $productDetails = $_POST['product_details'];
    // $totalAmount = $_POST['total_amount'];
    $product_id = 4;
    $order_id = 4;
   
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $phone = $_POST["phone"];
    $companyName = $_POST["company_name"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $streetAddress = $_POST["street_address"];
    $streetAddressOp = $_POST["street_addressop"];
    $town = $_POST["town"];
    $state = $_POST["state"];
    $pinCode = $_POST["pin_code"];
    $quantity = 1;
    $price = 1;
    $shippingMethod = "COD";
    $paymentSystem = "Cash";

   
    $insertBillingDetails = $conn->prepare("INSERT INTO `biling_details` (`user_id`, `product_id`, `order_id`, `first_name`, `last_name`, `phone`, `company_name`, `town`, `state`, `email`, `country`, `street_address`, `street_addressop`, `pin_code`, `quantity`, `price`, `shipping_method`, `payment_system`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $insertBillingDetails->execute([$userId, $product_id, $order_id, $firstName, $lastName, $phone, $companyName, $town, $state, $email, $country, $streetAddress, $streetAddressOp, $pinCode, $quantity, $price, $shippingMethod, $paymentSystem]);

    // Display success message
    echo "Order placed successfully!";
}

// Rest of your HTML code...

?>