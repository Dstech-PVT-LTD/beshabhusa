<?php

include 'includes/config.php';



if (($_SERVER["REQUEST_METHOD"] == "POST")) {

  if (($_POST['first_name'] != '') && ($_POST['last_name'] != '') && ($_POST['email'] != '') && ($_POST['phone'] != '') && ($_POST['country'] != '') && ($_POST['city'] != '') && ($_POST['street_address'] != '') && ($_POST['street_addressop'] != '') && ($_POST['dist'] != '') && ($_POST['pin_code'] != '')) {

          $userId =1;
          $sql = "INSERT INTO `biling_details`(`user_id`, `first_name`, `last_name`, `phone`, `email`, `country`, `city`, `street_address`, `street_addressop`, `dist`, `pin_code` ) VALUES (? , ? , ? , ? , ? , ? , ? , ? , ? , ?,? )";

          $array = [ $userId,$_POST['first_name'], $_POST['last_name'], $_POST['phone'], $_POST['email'], $_POST['country'], $_POST['city'], $_POST['street_address'], $_POST['street_addressop'], $_POST['dist'], $_POST['pin_code']];


          $insert = $conn->prepare($sql);
          $result1 = $insert->execute($array);
          if ($result1) {
          
            http_response_code(200);
            echo json_encode(['status' => 'success', 'message' => 'Successfully Check Out']);
          } else {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'Check Out failed to add. Please try again.']);
          }
        } else {
          http_response_code(400);
          echo json_encode(['status' => 'error', 'message' => 'Fill All Requeied Fill.']);
        }
     
    }
  ?>
