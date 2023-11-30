<?php
include "config.php";
    // session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   

    $productId = $_POST['product_id'];
    // $userId = $_SESSION['user_id'];
    $user_id =5;

    $deleteStmt = $conn->prepare("DELETE FROM `add_to_carts` WHERE `product_id` = ? AND `user_id` = ?");
     $result=$deleteStmt->execute([$productId, $userId]);

    if ($result) {
        http_response_code(200);
        echo json_encode(['status' => 'success', 'message' => 'Product delete successfully.']);
      } else {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Product delete failed.']);
      }
    }
?>
