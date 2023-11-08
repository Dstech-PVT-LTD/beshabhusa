<?php
include "includes/config.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    $email = $_POST['email'];
   
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        $sql = "INSERT INTO `contact_us`(`name`, `email`, `subject`, `message`) VALUES (:name,:email, :subject, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":name", $name);

        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":subject", $subject);
        $stmt->bindParam(":message", $message);

        if ($stmt->execute()) {
            echo json_encode(["isSuccess" => true, "successMessage" => "Success Submit", "errorMessage" => null]);
        } else {
            echo json_encode(["isSuccess" => false, "successMessage" => null, "errorMessage" => 'Failed To contact', "data" => null]);
        }
    } else {
        echo json_encode(["isSuccess" => false, "successMessage" => null, "errorMessage" => 'Please fill all the required fields.', "data" => null]);
    }
}
?>


