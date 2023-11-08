<?php include "./includes/header.php"; ?>
<?php


if (isset($_POST['register'])) {
    extract($_POST);
    //print_r($_POST);
    // echo $_FILES['image']['name'];
    if (!empty($first_name) || !empty($last_name) || !empty($email) || !empty($mobile) || !empty($password) || !empty($confirmPassword)) {

        if ($Password != $confirmPassword) {

            echo "<p class='alert alert-danger'>New And Confirm Password Doesnt Match.</p>";
        } else {

            // duplicate service check
            $duplicateServiceCheckStmt = $conn->prepare("SELECT * FROM `users` WHERE `email` = ? OR `mobile` = ?");
            $duplicateServiceCheckStmt->execute([$email, $mobile]);
            $duplicateServiceCheckCount = $duplicateServiceCheckStmt->rowCount();

            if ($duplicateServiceCheckCount > 0) {

                $error = "Account with same email or mobile Already Exists.";
            } else {

                $usertype = "users";
                $hashed = password_hash($password, PASSWORD_BCRYPT);
                $sql = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `mobile`, `password`, `usertype`) VALUES (:first_name,:last_name,:email,:mobile, :password, :usertype)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(":first_name", $first_name);
                $stmt->bindParam(":last_name", $last_name);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":mobile", $mobile);
                $stmt->bindParam(":password", $hashed);
                $stmt->bindParam(":usertype", $usertype);

                if ($stmt->execute()) {
                    $success = "Users Added Successfully.";
                    //$from = "sumit@dstechs.in";
                    // $subject = "New Account Info.";
                    //$message = "Hello, <br> Your Account Has Been Created. <br> Your Login Details Are: <br> Email: $email <br> Password: $password <br> Thank You.";
                    //sendEmail($from, $email, $subject, $message);
                } else {
                    $error = "Failed To Add users";
                }
            }
        }
    } else {

        $error = "Please Fill All The Required FIelds.";
    }
}


if (isset($_POST['login'])) {

    extract($_POST);
    // print_r($_POST);
    // login in php
    if (empty($email) || empty($password)) {

        echo "<p class='alert alert-danger'>Please Fill The Form.</p>";
    } else {

        $hashed = password_hash($password, PASSWORD_BCRYPT);

        $loginStmt = $conn->prepare("SELECT * FROM `users` WHERE `email` = '$email' AND `usertype` = 'users'");
        $loginStmt->execute();
        $loginResult = $loginStmt->fetch(PDO::FETCH_ASSOC);
        $count = $loginStmt->rowCount();

        if ($count == 0) {

            echo "<p class='alert alert-danger'>Invalid Email Or Password.</p>";
        } else {

            if (!password_verify($password, $loginResult['password'])) {

                echo "<p class='alert alert-danger'>Invalid Email Or Password.</p>";
            } else {

                session_start();

                $_SESSION['admin'] = $loginResult['id'];
                $_SESSION['adminName'] = $loginResult['first_name'] . ' ' . $loginResult['last_name'];
                $_SESSION['adminEmail'] = $loginResult['email'];

                echo "<script>location.href = 'index.php';</script>";
                header("Location:index.php");
            }
        }
    }
}


?>
<!-- offcanvas menu-->

<!-- offcanvas overlay -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas overlay -->

<!-- offcanvas mainmenu -->
<div class="offcanvas offcanvas-mainmenu">
    <div class="offcanvas-cancel">
        <img src="assets/img/icons/close-button.svg" class="svg" alt="">
    </div>
</div>
<!-- offcanvas mainmenu -->


<!-- End of offcanvas menu-->
<!-- page title -->
<section class="page-title-inner" data-bg-img='assets/img/page-titlebg.png'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- page title inner -->
                <div class="page-title-wrap">
                    <div class="page-title-heading">
                        <h1 class="h2">My Account<span>Profile</span></h1>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="active"><a href="#">Log In</a></li>
                    </ul>
                </div>
                <!-- End of page title inner -->
            </div>
        </div>
    </div>
</section>
<!-- End of page title -->

<!-- logout register wrap -->
<section class="pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- login register -->
                <div class="login-register-wrap text-center main-log-regi">
                    <!-- login register nav -->
                    <div class="login-register-nav">
                        <nav class="nav lr-nav text-center">
                            <a id="nav-login-tab2" data-toggle="tab" href="#login2" class="active">Log In</a>
                            <a id="nav-register-tab2" data-toggle="tab" href="#reg2">Register</a>
                        </nav>
                    </div>
                    <!-- End of login register nav -->

                    <!-- login register content -->
                    <div class="login-register-content tab-content">
                        <div class="tab-pane fade show active" id="login2" role="tabpanel" aria-labelledby="nav-login-tab2">
                            <div class="primary-form parsley-validate">
                                <form method="post">
                                    <!-- loging input -->
                                    <div class="email-input input-field">
                                        <label>
                                            <img src="assets/img/icons/email-icon.svg" class="svg" alt="">
                                        </label>
                                        <input type="email" placeholder='email' class="theme-input-style" name="email" required>
                                    </div>

                                    <div class="password-input input-field">
                                        <label>
                                            <img src="assets/img/icons/regi-icon.svg" class="svg" alt="">
                                        </label>
                                        <input type="password" placeholder='password' class="theme-input-style" name="password" required>
                                    </div>
                                    <!-- loging input -->
                                    <button type="login" class="btn btn-fill-type" name="login">log In</button>
                                </form>
                                <p>Don’t have an account,<a href="#">register now!</a> | <a href="forgot_password.php">forgot password!</a></p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="reg2" role="tabpanel" aria-labelledby="nav-register-tab2">
                            <div class="primary-form parsley-validate">
                                <form method="post">
                                    <!-- register input -->
                                    <div class="name-input input-field">
                                        <label>
                                            <img src="assets/img/icons/account-icon.svg" class="svg" alt="">
                                        </label>
                                        <input type="text" placeholder='first name ' class="theme-input-style" name="first_name" required>
                                    </div>
                                    <div class="name-input input-field">
                                        <label>
                                            <img src="assets/img/icons/account-icon.svg" class="svg" alt="">
                                        </label>
                                        <input type="text" placeholder='last name ' class="theme-input-style" name="last_name" required>
                                    </div>

                                    <div class="email-input input-field">
                                        <label>
                                            <img src="assets/img/icons/email-icon.svg" class="svg" alt="">
                                        </label>
                                        <input type="email" placeholder='email' class="theme-input-style" name="email" required>
                                    </div>
                                    <div class="name-input input-field">
                                        <label>
                                            <img src="assets/img/icons/account-icon.svg" class="svg" alt="">
                                        </label>
                                        <input type="text" placeholder='mobile no: ' class="theme-input-style" name="mobile" required>
                                    </div>

                                    <div class="password-input input-field">
                                        <label>
                                            <img src="assets/img/icons/regi-icon.svg" class="svg" alt="">
                                        </label>
                                        <input type="password" placeholder='password' class="theme-input-style" name="password" required>
                                    </div>
                                    <div class="password-input input-field">
                                        <label>
                                            <img src="assets/img/icons/regi-icon.svg" class="svg" alt="">
                                        </label>
                                        <input type="password" placeholder='confirm password' class="theme-input-style" name="confirmpassword" required>
                                    </div>
                                    <!-- register input -->
                                    <button type="submit" class="btn btn-fill-type" name="register">Register</button>
                                
                                </form>
                                <p>Have an account,<a href="#">Log In now!</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End of login register content -->
                </div>
                <!-- End of login register -->
            </div>
        </div>
    </div>
</section>
<!-- End of logout register wrap -->

<!-- footer area -->
<?php include "./includes/footer.php"; ?>