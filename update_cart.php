<?php
include "includes/config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'];
    $newQuantity = $_POST['quantity'];
    $updateProductStmt = $conn->prepare("UPDATE `add_to_carts` SET `quantity` = ? WHERE `product_id` = ?");
    $updateProductStmt->execute([$newQuantity, $productId]);
    if ($updateProductStmt->rowCount() > 0) {
        echo json_encode(['status' => 'success', 'message' => 'Product quantity updated successfully']);
    } else {

        echo json_encode(['status' => 'error', 'message' => 'Failed to update product quantity']);
    }
} else {

    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}

