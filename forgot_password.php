<?php include "./includes/header.php"; ?>

<?php
if (isset($_POST['submit'])) {

    extract($_POST);

    // login in php
    if (empty($email) || empty($password) || empty($cpassword)) {
        echo "<p class='alert alert-danger'>Please Fill The Form.</p>";
    } else {
        if ($password != $cpassword) {
            echo "<p class='alert alert-danger'>New password and confirm password do not match</p>";
            exit;
        }

        $hashed = password_hash($password, PASSWORD_BCRYPT);

       
        $sql = $conn->prepare("UPDATE `users` SET `password` = :hashed WHERE `email` = :email");
        $sql->bindParam(':hashed', $hashed, PDO::PARAM_STR);
        $sql->bindParam(':email', $email, PDO::PARAM_STR);
        
        if ($sql->execute()) {
            echo "<p class='alert alert-success'>Password reset successful!</p>";
        } else {
            echo "<p class='alert alert-danger'>Unsuccessful Password reset!</p>";
        }
    }
}
?>

<section class="pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- login register -->
                <div class="login-register-wrap text-center main-log-regi">
                    <!-- login register nav -->
                    <div class="login-register-nav">
                        <nav class="nav lr-nav text-center">
                            <a id="nav-login-tab2" data-toggle="tab" href="#login2" class="active">Reset password</a>
                        </nav>
                    </div>
                    <!-- End of login register nav -->

                    <!-- login register content -->
                    <div class="login-register-content tab-content">
                        <div class="tab-pane fade show active" id="login2" role="tabpanel" aria-labelledby="nav-login-tab2">
                            <div class="primary-form parsley-validate">
                                <form method="post">
                                    <!-- login input -->
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
                                        <input type="password" placeholder='new password' class="theme-input-style" name="password" required>
                                    </div>
                                    <div class="password-input input-field">
                                        <label>
                                            <img src="assets/img/icons/regi-icon.svg" class="svg" alt="">
                                        </label>
                                        <input type="password" placeholder='confirm password' class="theme-input-style" name="cpassword" required>
                                    </div>
                                    <!-- login input -->
                                    <button type="submit" class="btn btn-fill-type" name="submit">Submit</button>
                                </form>
                                <p>Don’t have an account,<a href="#">register now!</a></p>
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

<!-- footer area -->
<?php include "./includes/footer.php"; ?>
