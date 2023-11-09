<?php
include("includes/config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo json_encode($_POST);
    extract($_POST);

    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Please Fill The Form']);
    } else {
        $hashed = password_hash($password, PASSWORD_BCRYPT);
        $loginStmt = $conn->prepare("SELECT * FROM `users` WHERE `email` = '$email' AND `usertype` = 'users'");
        $loginStmt->execute();
        $loginResult = $loginStmt->fetch(PDO::FETCH_ASSOC);
        $count = $loginStmt->rowCount();

        if ($count == 0) {
            echo json_encode(['success' => false, 'message' => 'Invalid Email Or Password']);
        } else {
            if (!password_verify($password, $loginResult['password'])) {
                echo json_encode(['success' => false, 'message' => 'Invalid Email Or Password']);
            } else {
                $userId = $loginResult['id'];
                session_start();
                $_SESSION['users'] = $loginResult['id'];
                $_SESSION['usersName'] = $loginResult['first_name'] . ' ' . $loginResult['last_name'];
                $_SESSION['usersEmail'] = $loginResult['email'];
                echo json_encode(['success' => true, 'message' => 'Login successful','userId' => $userId, 'redirect' => 'cart-lists.php']);
            }
        }
    }
}
?>
