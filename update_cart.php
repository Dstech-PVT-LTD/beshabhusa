<?php
include "includes/config.php";
session_start();
$user_id = $_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  $_POST['quantity'] != '') {
    $productId = $_POST['productId'];
    $newQuantity = $_POST['quantity'];
    $updateProductStmt = $conn->prepare("UPDATE `add_to_carts` SET `quantity` = ? WHERE `id` = ? AND `user_id` = ?");
    $result = $updateProductStmt->execute([$newQuantity, $productId, $user_id]);
    if ($result) {
        echo json_encode(['status' => 'success','product_id' =>$productId,'quantity' => $newQuantity,'id' => $user_id, 'message' => 'Product quantity updated successfully']);
    } else {

        echo json_encode(['status' => 'error', 'message' => 'Failed to update product quantity']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];


    $delete = $conn->prepare('DELETE FROM `add_to_carts` WHERE `id` = ?');
    $result = $delete->execute([$productId]);

    if ($result) {
        echo json_encode(['status' => 'success', 'message' => 'Product deleted successfully']);
    
    } else {
        echo "Failed to remove product";
    }
}
?>