<?php
include "includes/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['quantity'] != '') {
    $user_id = 4; // Replace with the actual user ID retrieval logic
    $productId = $_POST['productId'];
    $newQuantity = $_POST['quantity'];

    $updateProductStmt = $conn->prepare("UPDATE `add_to_carts` SET `quantity` = ? WHERE `id` = ? AND `user_id` = ?");
    $result = $updateProductStmt->execute([$newQuantity, $productId, $user_id]);

    if ($result) {
        echo json_encode(['status' => 'success', 'product_id' => $productId, 'quantity' => $newQuantity, 'id' => $user_id, 'message' => 'Product quantity updated successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to update product quantity']);
    }
}


if (isset($_POST['product_id'])) {
   
    $productId = $_POST['product_id'];

    
    $deleteStmt = $conn->prepare('DELETE FROM `add_to_carts` WHERE `id` = ?');
    $result = $deleteStmt->execute([$productId]);

    
    if ($result) {
        
        echo json_encode(['status' => 'success', 'message' => 'Product deleted successfully']);
    } else {
        
        echo json_encode(['status' => 'error', 'message' => 'Failed to remove product']);
    }
} else {
    
    echo json_encode(['status' => 'error', 'message' => 'Product ID not provided']);
}
?>

