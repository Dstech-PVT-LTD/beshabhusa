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

                $_SESSION['id'] = $loginResult['id'];
                $_SESSION['adminName'] = $loginResult['first_name'] . ' ' . $loginResult['last_name'];
                $_SESSION['adminEmail'] = $loginResult['email'];

                echo "<script>location.href = 'index.php';</script>";
                header("Location:index.php");
            }
        }
    }
}


?>
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">login - register </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-register-area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ms-auto me-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-bs-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form  method="post">
                                                <input type="email" name="email" placeholder="UserEmail">
                                                <input type="password" name="password" placeholder="Password">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit"name="login">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form method="post">
                                                <input type="text" name="first_name" placeholder="User First Name">
                                                <input type="text" name="last_name" placeholder="User Last Name">
                                                <input name="email" placeholder="Email" type="email">
                                                <input name="mobile" placeholder="Phone number" type="number">
                                                <input type="password" name="password" placeholder="Password">
                                                <input type="password" name="confirmpassword" placeholder="confirm Password">
                                                <div class="button-box">
                                                    <button type="submit"name="register">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subscribe-area bg-gray pt-115 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title">
                            <h2>keep connected</h2>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "./includes/footer.php"; ?>