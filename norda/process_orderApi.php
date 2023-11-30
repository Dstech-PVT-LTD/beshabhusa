<?php
include 'includes/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userId = $_POST['user_id'];
    // $productDetails = $_POST['product_details'];
    // $totalAmount = $_POST['total_amount'];
    
    $order_id = "ORS" . (10000 + rand(1, 90000));
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
    $shippingMethod = "COD";
    $paymentSystem = "Cash";

    

    $product_id = $_POST['product_id'];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    
    // $shipToDifferentAddress = isset($_POST["ship_to_different_address"]) ? 1 : 0;
    $insertBillingDetails = $conn->prepare("INSERT INTO `biling_details` (`user_id`, `product_id`, `order_id`, `first_name`, `last_name`, `phone`, `company_name`, `town`, `state`, `email`, `country`, `street_address`, `street_addressop`, `pin_code`, `quantity`, `price`, `shipping_method`, `payment_system`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $insertBillingDetails->execute([$userId, $product_id, $order_id, $firstName, $lastName, $phone, $companyName, $town, $state, $email, $country, $streetAddress, $streetAddressOp, $pinCode, $quantity, $price, $shippingMethod, $paymentSystem]);


    // if ($shipToDifferentAddress) {
    //     $shippingFirstName = $_POST["first_name"];
    //     $shippingLastName = $_POST["last_name"];
    //     $shippingCompanyName = $_POST["company_name"];
    //     $shippingCountry = $_POST["country"];
    //     $shippingStreetAddress = $_POST["street_address"];
    //     $shippingTown = $_POST["town"];
    //     $shippingState = $_POST["state"];
    //     $shippingPinCode = $_POST["pin_code"];
    //     $shippingPhone = $_POST["phone"];
    //     $shippingEmail = $_POST["email"];

        
    //     $insertShippingDetails = $conn->prepare("INSERT INTO `address` (`user_id`, `first_name`, `last_name`, `company_name`, `town`, `state`, `email`, `country`, `street_address`, `pin_code`, `phone`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    //     $insertShippingDetails->execute([$userId, $shippingFirstName, $shippingLastName, $shippingCompanyName, $shippingTown, $shippingState, $shippingEmail, $shippingCountry, $shippingStreetAddress, $shippingPinCode, $shippingPhone]);
    // }
    // Display success message
    echo "Order placed successfully!";
}

// Rest of your HTML code...

?>