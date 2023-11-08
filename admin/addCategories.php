<?php require "./settings/config.php"; ?>

<?php

// <!-- ============================================================== -->
// page presets and optional scripts
// <!-- ============================================================== -->
$title = "Add Category || Beshabhusa";
$dataTableNeeded = true;
$quillNeeded = true;

?>
<?php include "./settings/header.php"; ?>


<?php include "./settings/sidebar.php"; ?>





    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Category Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">bhesbhusa</a></li>
                            <li class="breadcrumb-item active">Category</li>
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

                        if (isset($_GET['edit'])) {

                            $decodedId = base64_decode($_GET['edit']);

                            $fetchCategoryStmt = $conn->prepare("SELECT * FROM `categories` WHERE `id` = ?");

                            if ($fetchCategoryStmt->execute([$decodedId])) {

                                $serviceCount = $fetchCategoryStmt->rowCount();

                                if ($serviceCount > 0) {

                                    $serviceRow = $fetchCategoryStmt->fetch();
                                } else {

                                    $error = "Invalid Category ID";
                                }
                            } else {

                                $error = "Failed To Fetch Category Details";
                            }
                        }

                        // add new service
                        if (isset($_POST['submit'])) {

                            extract($_POST);
                            // print_r($_POST);
                            // echo $_FILES['image']['name'];
                            if (!empty($name) || !empty($_FILES['image']['name'])) {

                                // duplicate service check
                                $duplicateCategoryStmt = $conn->prepare("SELECT * FROM `categories` WHERE `name` = ?");
                                $duplicateCategoryStmt->execute([$name]);
                                $duplicateCategoryCount = $duplicateCategoryStmt->rowCount();

                                if ($duplicateCategoryCount > 0) {

                                    $error = "Category Already Exists.";
                                } else {
                                    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
                                    $logo_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

                                    if (in_array($logo_ext, $allowed_extensions)) {

                                        $uploaddir = '../categoryImages/';
                                        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                                        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                                        $image_link = $socket . '/categoryImages/' . $_FILES['image']['name'];

                                        $sql = "INSERT INTO `categories`(`name`, `image`) VALUES (:name,:image)";
                                        $stmt = $conn->prepare($sql);
                                        $stmt->bindParam(":name", $categoryName);
                                        $stmt->bindParam(":image", $image_link);
                                        if ($stmt->execute()) {
                                            $success = "Category Added Successfully.";
                                        } else {
                                            $error = "Failed To Add Category";
                                        }
                                    } else {
                                        $error = "Invalid File";
                                    }
                                }
                            } else {

                                $error = "Please Fill All The Required FIelds.";
                            }
                        }

                        // update the service
                        if (isset($_POST['update'])) {

                            extract($_POST);
                            // print_r($_POST);
                            $id = base64_decode($_GET['edit']);
                            if (!empty($categoryName) || !empty($id)) {

                                // duplicate service check
                                $duplicatecategoryCheckSubmited = $conn->prepare("SELECT * FROM `categories` WHERE `name` = ? AND `id` != ?");
                                $duplicatecategoryCheckSubmited->execute([$categorryName, $id]);
                                $duplicateCategoryCount = $duplicatecategoryCheckSubmited->rowCount();

                                if ($duplicateCategoryCount > 0) {

                                    $error = "Same Name Already Available.";
                                } else {

                                    if ($_FILES['image']['name'] == '') {
                                        $image_link = $serviceRow['image'];
                                    } else {

                                        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
                                        $logo_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

                                        if (in_array($logo_ext, $allowed_extensions)) {

                                            $uploaddir = '../categoryImages/';
                                            $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                                            move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                                            $image_link = $socket . '/categoryImages/' . $_FILES['image']['name'];
                                        } else {
                                            $error = "Invalid File";
                                        }
                                    }

                                    $sql = "UPDATE `categories` SET `name`=?,`image`=? WHERE `id` = ?";

                                    $stmt = $conn->prepare($sql);

                                    if ($stmt->execute([$categoryName, $image_link, $id])) {
                                        $success = "Category Modified Successfully.";
                                    } else {
                                        $error = "Failed To Add Category";
                                    }
                                }
                            } else {

                                $error = "Please Fill All The Required FIelds.";
                            }
                        }

                        if ($success) {

                            echo "<p class=\"alert alert-success\">$success</p>";
                            echo "<script>setTimeout(\"location.href = 'addCategories.php';\",2000);</script>";
                        }

                        if ($error) {

                            echo "<p class=\"alert alert-danger\">$error</p>";
                            echo "<script>setTimeout(\"location.href = 'addCategories.php';\",2000);</script>";
                        }

                        ?>

                        <?php

                        if (isset($_GET['edit'])) {

                        ?>
                            <h4 class="card-title">Update Category</h4>

                            <p class="alert alert-warning">N.B- If you don't want to change the image keep the field as it is.</p>

                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="simpleinput">Name <span class="text-danger">*</span></label>
                                            <input required type="text" id="simpleinput" class="form-control" placeholder="Enter Category Name" name="categoryName" value="<?php echo $serviceRow['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-password">Image <span class="text-danger">*</span></label>
                                            <input type="file" onchange="readURL(this)" id="example-password" class="form-control" value="image" accept="image/png, image/gif, image/jpeg" name="image">
                                        </div>
                                        <div id="blah"><img src="<?php echo $serviceRow['image']; ?>" alt="" width="150" height="100"></div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <input name="update" type="submit" class="btn btn-secondary waves-effect waves-light" value="Update Product">
                                </div>

                            </form>

                        <?php

                        } else {

                        ?>
                            <h4 class="card-title">Add Category</h4>

                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="simpleinput">Name <span class="text-danger">*</span></label>
                                            <input required type="text" id="simpleinput" class="form-control" placeholder="Enter Category Name" name="categoryName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-password">Image <span class="text-danger">*</span></label>
                                            <input required type="file" onchange="readURL(this)" id="example-password" class="form-control" value="image" accept="image/png, image/gif, image/jpeg" name="image">
                                        </div>
                                        <div id="blah"></div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <input name="submit" type="submit" class="btn btn-secondary waves-effect waves-light" value="Create New Category">
                                </div>

                            </form>
                        <?php
                        }
                        ?>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">List Of Category</h4>
                        <?php

                        // delete service
                        if (isset($_GET['delete'])) {

                            $decodedId = base64_decode($_GET['delete']);

                            $deleteCategoryStmt = $conn->prepare("DELETE FROM `categories` WHERE `id` = ?");

                            if ($deleteCategoryStmt->execute([$decodedId])) {

                                $success = "Product Deleted Successfully.";
                            } else {

                                $error = "Failed To Delete Product.";
                            }
                        }

                        if ($success) {

                            echo "<p class=\"alert alert-success\">$success</p>";
                            // js redirect after 2s
                            echo "<script>setTimeout(\"location.href = 'addCategories.php';\",2000);</script>";
                        }

                        if ($error) {

                            echo "<p class=\"alert alert-danger\">$error</p>";
                            echo "<script>setTimeout(\"location.href = 'addCategories.php';\",2000);</script>";
                        }

                        // Functionalities and queries
                        $fetchCategoryStmt = $conn->prepare("SELECT * FROM `categories` ORDER BY `id` DESC");

                        if ($fetchCategoryStmt->execute([])) {

                            $count = $fetchCategoryStmt->rowCount();

                            if ($count > 0) {

                        ?>

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Datetime</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php

                                        $sl = 1;
                                        while ($row = $fetchCategoryStmt->fetch()) {

                                            $id = base64_encode($row['id']);
                                        ?>
                                            <tr>
                                                <td><?php echo $sl; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><img width="200" height="100" src="<?php echo $row['image']; ?>" alt="category image <?php echo $sl; ?>"></td>
                                                <td><?php echo $row['created_at']; ?></td>
                                                <td>
                                                    <a href="addCategories.php?edit=<?php echo $id; ?>"><button class="btn btn-warning waves-effect waves-light">Edit</button></a>
                                                    <a href="addCategories.php?delete=<?php echo $id; ?>"><button class="btn btn-danger waves-effect waves-light">Delete</button></a>
                                                </td>
                                            </tr>
                                        <?php
                                            $sll++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                        <?php
                            }
                        } else {

                            echo "<p>Failed To Fetch Category List</p>";
                        }

                        ?>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>

    </div>



<?php include "./settings/footer.php"; ?>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').html(`<img src='${e.target.result}' width='150' height='150'>`);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#summernote").summernote();
</script>