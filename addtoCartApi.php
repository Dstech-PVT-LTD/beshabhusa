<?php
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['type'] == 'addtocart') {
  $size = $_POST['size'];
  $color = 'red'; 
  $productId = $_POST['productId'];
  $quantity = $_POST['quantity'];
  $userid = 1;

  $fetchServiceStmt = $conn->prepare("SELECT * FROM `add_to_carts` WHERE `user_id` = ? AND `product_id` = ?");
  $fetchServiceStmt->execute([$userid, $productId]);
  $fetchService = $fetchServiceStmt->fetch(PDO::FETCH_ASSOC);
  $rowCount = $fetchServiceStmt->rowCount();
  $qnt = $fetchService['quantity'];

  if ($rowCount == 0) {
    $sql = $conn->prepare('INSERT INTO `add_to_carts`(`product_id`, `user_id`, `quantity`, `size`, `color`) VALUES (?,?,?,?,?)');
    $result = $sql->execute([$productId, $userid, $quantity, $size, $color]);

    if ($result) {
      http_response_code(200);
      echo json_encode(['status' => 'success', 'message' => 'Product added successfully.']);
    } else {
      http_response_code(400);
      echo json_encode(['status' => 'error', 'message' => 'Product add failed.']);
    }
  } else {
      
    $total_quantity = ($quantity+$qnt) ;

    $sql = $conn->prepare('UPDATE `add_to_carts` SET `quantity` = ? WHERE `user_id` = ? AND `product_id` = ?');
    $result = $sql->execute([$total_quantity, $userid, $productId]);

    if ($result) {
      http_response_code(200);
      echo json_encode(['status' => 'success', 'message' => 'Product updated successfully.']);
    } else {
      http_response_code(400);
      echo json_encode(['status' => 'error', 'message' => 'Product update failed.']);
    }
  }
}
?>
