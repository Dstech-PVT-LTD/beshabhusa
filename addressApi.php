<?php
include 'includes/config.php';
session_start();
               $user_id = $_SESSION['id'];

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["type"])) {

    if ($_POST["type"] == 'insertAddress') {
        if (
            isset($_POST['user_id'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['country'], $_POST['city'], $_POST['street_address'], $_POST['street_addressOpt'], $_POST['dist'], $_POST['postcode']) &&
            !empty($_POST['user_id']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['country']) && !empty($_POST['city']) && !empty($_POST['street_address']) && !empty($_POST['street_addressOpt']) && !empty($_POST['dist']) && !empty($_POST['postcode'])
        ) {
            $sql = "INSERT INTO `address`(`user_id`, `first_name`, `last_name`, `phone`, `email`, `country`, `city`, `street_address`, `street_addressOpt`, `dist`, `postcode`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $array = [
                $_POST['user_id'], $_POST['first_name'], $_POST['last_name'], $_POST['phone'],
                $_POST['email'], $_POST['country'], $_POST['city'], $_POST['street_address'],
                $_POST['street_addressOpt'], $_POST['dist'], $_POST['postcode']
            ];

            $insert = $conn->prepare($sql);
            $result1 = $insert->execute($array);

            if ($result1) {
                echo json_encode(['status' => 'success', 'message' => 'Address successfully added']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Database error. Please try again.', 'error' => $insert->errorInfo()]);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Fill in all required fields.']);
        }
    } elseif ($_POST["type"] == 'updateAddress') {
        if (
            $_POST['first_name'] != '' &&  $_POST['last_name'] != '' && $_POST['phone'] != '' && $_POST['email'] != '' &&  $_POST['country'] != '' && $_POST['city'] != '' &&  $_POST['street_address'] != '' &&  $_POST['street_addressOpt'] != '' &&  $_POST['dist'] != '' &&  $_POST['postcode'] != '' &&  $_POST['id'] != ''
        ) {
            $sql = "UPDATE `address` SET `first_name`=?, `last_name`=?, `phone`=?, `email`=?, `country`=?, `city`=?, `street_address`=?, `street_addressOpt`=?, `dist`=?, `postcode`=? WHERE `id`=? AND `user_id`=?" ;
            $array = [
                 $_POST['first_name'], $_POST['last_name'], $_POST['phone'],
                $_POST['email'], $_POST['country'], $_POST['city'], $_POST['street_address'],
                $_POST['street_addressOpt'], $_POST['dist'], $_POST['postcode'], $_POST['id'], $user_id
            ];

            $update = $conn->prepare($sql);
            $result = $update->execute($array);

            if ($result) {
                echo json_encode(['status' => 'success', 'message' => 'Address successfully updated']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Database error. Please try again.', 'error' => $update->errorInfo()]);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Fill in all required fields.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request type.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>
