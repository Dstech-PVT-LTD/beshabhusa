<?php
include 'includes/config.php';
session_start();
$user_id = $_SESSION['id'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['address_id'] != '') {
        $total_price = 0;
        $array = [];
        $orderId = "ORS" . (10000 + rand(1, 90000));
        $sql = "SELECT * FROM `add_to_carts` WHERE `user_id` = ?";
        $select = $conn->prepare($sql);
        $select->execute([$user_id]);
        $carts = $select->fetchAll(PDO::FETCH_ASSOC);
        if ($carts) {

            foreach ($carts as $cart) {
                $product = $conn->prepare("SELECT * FROM `products` WHERE `id` = ?");
                $product->execute([$cart["product_id"]]);
                $product = $product->fetch(PDO::FETCH_ASSOC);
                $total = $product['price'] * $cart['quantity'];
                $total_price += $total;

                $newArr = ["product_id" => $cart["product_id"] , "Product" => $product['name'] ,"quantity" => $cart['quantity']];
                $array[] = $newArr;
                $delete = $conn->prepare('DELETE FROM `add_to_carts` WHERE `id`=?');
                $result2 = $delete->execute([$cart['id']]);
                
            }
            $orders = $conn->prepare('INSERT INTO `orders`(`order_id`, `user_id`, `address_id`, `products`, `amt`, `dis_amt`, `total_amt`) VALUES (? ,? , ? ,? ,? , ? , ?)');
            $result = $orders->execute([$orderId, $user_id, $_POST['address_id'],json_encode($array),$total_price , 0,0]);
            if($result){
                http_response_code(200);
                echo json_encode(['status' => '', 'message' => 'Order Successfully']);
            }else{
                http_response_code(400);
                echo json_encode(['status' => 'error', 'message' => 'something went error']);
            }
        } else {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Cart is empty']);
        }
    } else {
        echo json_encode(["message" => "Select Address ID"]);
    }
}
?>