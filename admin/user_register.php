<?php include "./settings/config.php"; ?>
<?php

// <!-- ============================================================== -->
// page presets and optional scripts
// <!-- ============================================================== -->
$title = "users";
$dataTableNeeded = false;
$quillNeeded = false;

?>
<?php include "./settings/header.php"; ?>


<?php include "./settings/sidebar.php"; ?>


    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">users</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Beshabhusa</a></li>
                            <li class="breadcrumb-item active">Add users</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                        // add new service
                        if (isset($_POST['submit'])) {

                            extract($_POST);
                            // print_r($_POST);
                            // echo $_FILES['image']['name'];
                            if (!empty($first_name) || !empty($last_name) || !empty($email) || !empty($mobile) || !empty($password) || !empty( $confirmPassword ))
                             {
                               
                             if( $newPassword != $confirmPassword ) {

                                        echo "<p class='alert alert-danger'>New And Confirm Password Doesnt Match.</p>";

                              } else {

                                // duplicate service check
                                $duplicateServiceCheckStmt = $conn->prepare("SELECT * FROM `users` WHERE `email` = ? OR `mobile` = ?");
                                $duplicateServiceCheckStmt->execute([$email, $mobile]);
                                $duplicateServiceCheckCount = $duplicateServiceCheckStmt->rowCount();

                                if ($duplicateServiceCheckCount > 0) {

                                    $error = "Account with same email or mobile Already Exists.";
                                } else {

                                    $usertype = "user";
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
                                        $success = "UsersS Added Successfully.";
                                        $from = "sumit@dstechs.in";
                                        $subject = "New Account Info.";
                                        $message = "Hello, <br> Your Account Has Been Created. <br> Your Login Details Are: <br> Email: $email <br> Password: $password <br> Thank You.";
                                        sendEmail($from, $email, $subject, $message);
                                    } else {
                                        $error = "Failed To Add Users";
                                    }
                                }
                             }
                            } else {

                                $error = "Please Fill All The Required FIelds.";
                            }
                         
                        }
                        ?>

                        <h4 class="card-title">Add users</h4>

                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="simpleinput">First Name <span class="text-danger">*</span></label>
                                        <input required type="text" id="simpleinput" class="form-control" placeholder="Enter First Name" name="first_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="simpleinput">Last Name <span class="text-danger">*</span></label>
                                        <input required type="text" id="simpleinput" class="form-control" placeholder="Enter Last Name" name="last_name">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Mobile Number <span class="text-danger">*</span></label>
                                        <input required type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Mobile Number" name="mobile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input required type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pass">Password <span class="text-danger">*</span></label>
                                        <input required type="password" class="form-control" id="pass" placeholder="Enter Password" name="password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <input name="submit" type="submit" class="btn btn-secondary waves-effect waves-light" value="Add users">
                            </div>

                        </form>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div> <!-- container-fluid -->



<?php include "./settings/footer.php"; ?>