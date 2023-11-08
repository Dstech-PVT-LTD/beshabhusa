<?php include "./settings/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login || beshabhusa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Purifier Admin Login" name="description" />
    <meta content="Dstech" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
 
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center mb-5">
                                            <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                                <i class="mdi mdi-alpha-x-circle"></i> <b>Beshabhusa</b>
                                            </a>
                                        </div>
                                        <h1 class="h5 mb-1">Welcome Back!</h1>
                                        <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                                        
                                        <?php 
                                            session_start();

                                            if( isset( $_POST['submit'] ) ) {

                                                extract($_POST);
                                                // print_r($_POST);
                                                // login in php
                                                if( empty( $email ) || empty( $password ) ) {

                                                    echo "<p class='alert alert-danger'>Please Fill The Form.</p>";

                                                } else {

                                                    $hashed = password_hash($password, PASSWORD_BCRYPT);

                                                    $loginStmt = $conn->prepare("SELECT * FROM `users` WHERE `email` = '$email' AND `usertype` = 'admin'");
                                                    $loginStmt->execute();
                                                    $loginResult = $loginStmt->fetch(PDO::FETCH_ASSOC);
                                                    $count = $loginStmt->rowCount();

                                                    if( $count == 0 ) {

                                                        echo "<p class='alert alert-danger'>Invalid Email Or Password.</p>";

                                                    } else {
                                                        
                                                        if( !password_verify( $password, $loginResult['password'] ) ) {
                                                                
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
                                        
                                        <form class="user" method="post">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                            </div>
                                            <div class="form-group">
                                                <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                            </div>
                                            <button name="submit" type="submit" class="btn btn-success btn-block waves-effect waves-light">Log In</button>

                                            <!-- <div class="text-center mt-4">
                                                <h5 class="text-muted font-size-16">Sign in using</h5>
                                            
                                                <ul class="list-inline mt-3 mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                                    </li>
                                                </ul>
                                            </div> -->
                                            
                                        </form>

                                        <div class="row mt-4">
                                            <div class="col-12 text-center">
                                                <p class="text-muted mb-2"><a href="forgot_pass.php" class="text-muted font-weight-medium ml-1">Forgot your password?</a></p>
                                                <!-- <p class="text-muted mb-0">Don't have an account? <a href="pages-register.html" class="text-muted font-weight-medium ml-1"><b>Sign Up</b></a></p> -->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>