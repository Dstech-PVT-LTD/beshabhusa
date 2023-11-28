<?php
include "./settings/config.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['processing'])) {
        $orderId = base64_decode($_POST['processing']);
        $updateStmt = $conn->prepare("UPDATE orders SET status = 'processing' WHERE id = ?");
        if ($updateStmt->execute([$orderId]) && $updateStmt->rowCount() > 0) {
            echo "Status updated to Processing successfully";
        } else {
            echo "Failed to update status to Processing";
        }
    } elseif (isset($_POST['shipped'])) {
        $orderId = base64_decode($_POST['shipped']);
        $trackingId = $_POST['trackingId'];

        $updateStmt = $conn->prepare("UPDATE orders SET status = 'shipped', tracking_id = ?,`updated_at`= CURTIME() WHERE id = ?");
        
        if ($updateStmt->execute([$trackingId, $orderId]) && $updateStmt->rowCount() > 0) {
            echo json_encode(['message' => "Status updated to Shipped successfully", 'trackingId' => $trackingId]);
        } else {
            echo json_encode(['error' => "Failed to update status to Shipped"]);
        }
    } elseif (isset($_POST['out_for_delivery'])) {
        $orderId = base64_decode($_POST['out_for_delivery']);
        $updateStmt = $conn->prepare("UPDATE orders SET status = 'out_for_delivery' WHERE id = ?");
        if ($updateStmt->execute([$orderId]) && $updateStmt->rowCount() > 0) {
            echo "Status updated to Out for delivery successfully";
        } else {
            echo "Failed to update status to Out for delivery";
        }
    } elseif (isset($_POST['delivered'])) {
        $orderId = base64_decode($_POST['delivered']);
        $updateStmt = $conn->prepare("UPDATE orders SET status = 'delivered' WHERE id = ?");
        if ($updateStmt->execute([$orderId]) && $updateStmt->rowCount() > 0) {
            echo "Status updated to Delivered successfully";
        } else {
            echo "Failed to update status to Delivered";
        }
    } elseif (isset($_POST['updateTrackingId']) && isset($_POST['orderId']) && isset($_POST['trackingId'])) {
        $orderId = base64_decode($_POST['orderId']);
        $trackingId = $_POST['trackingId'];
        
        $updateTrackingStmt = $conn->prepare("UPDATE orders SET tracking_id = ? WHERE id = ?");
        
        if ($updateTrackingStmt->execute([$trackingId, $orderId]) && $updateTrackingStmt->rowCount() > 0) {
            echo "Tracking ID updated successfully";
        } else {
            echo "Failed to update Tracking ID";
        }
    } else {
        echo "Invalid action";
    }

    exit();
}

header("Location: manageOrder.php");
exit();
?>
