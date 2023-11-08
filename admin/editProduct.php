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
                <h4 class="mb-0 font-size-18">Edit Products</h4>

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

                    if (isset($_GET['delete'])) {

                        $decodedId = base64_decode($_GET['delete']);

                        $deleteProductsStmt = $conn->prepare("DELETE FROM `products` WHERE `id` = ?");

                        if ($deleteProductsStmt->execute([$decodedId])) {

                            $success = "Product Deleted Successfully.";
                        } else {

                            $error = "Failed To Delete Product.";
                        }
                    }

                    if ($success) {

                        echo "<p class=\"alert alert-success\">$success</p>";
                        // js redirect after 2s
                        echo "<script>setTimeout(\"location.href = 'viewProducts.php';\",2000);</script>";
                    }

                    if ($error) {

                        echo "<p class=\"alert alert-danger\">$error</p>";
                        echo "<script>setTimeout(\"location.href = 'viewProducts.php';\",2000);</script>";
                    }
                    //detele end

                    if (isset($_GET['edit'])) {

                        $decodedId = base64_decode($_GET['edit']);

                        $fetchProductstmt = $conn->prepare("SELECT * FROM `products` WHERE `id` = ?");

                        if ($fetchProductstmt->execute([$decodedId])) {

                            $productsCount = $fetchProductstmt->rowCount();

                            if ($productsCount > 0) {

                                $productsRow = $fetchProductstmt->fetch();
                            } else {

                                $error = "Invalid Category ID";
                            }
                        } else {

                            $error = "Failed To Fetch Category Details";
                        }
                    }

                    // update the service
                    if (isset($_POST['update'])) {

                        extract($_POST);
                        // print_r($_POST);
                        $id = base64_decode($_GET['edit']);
                        if (!empty($productName) || !empty($productSlog) || !empty($mrp) || !empty($price) || !empty($id)) {

                            // duplicate service check
                            $duplicateProductsCheckSubmits = $conn->prepare("SELECT * FROM `products` WHERE `name` = ? AND `id` != ?");
                            $duplicateProductsCheckSubmits->execute([$productName, $id]);
                            $duplicateProductsCount = $duplicateProductsCheckSubmits->rowCount();

                            if ($duplicateProductsCount > 0) {

                                $error = "Same Name Already Available.";
                            } else {

                                if ($_FILES['image']['name'] == '') {
                                    $image_link = $productsRow['image'];
                                } else {

                                    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
                                    $logo_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

                                    if (in_array($logo_ext, $allowed_extensions)) {

                                        $uploaddir = '../categoryImages/';
                                        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                                        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                                        $image_link = $socket . '/productUpload/' . $_FILES['image']['name'];
                                    } else {
                                        $error = "Invalid File";
                                    }
                                }

                                $sql = "UPDATE `products` SET `name`=?,`slugs`=?,`image`=?,`mrp`=?,`price`=?,`description`=? WHERE `id` = ?";


                                $stmt = $conn->prepare($sql);

                                if ($stmt->execute([$productName, $productSlug, $image_link, $mrp, $price, $description, $id])) {
                                    $success = "Products Modified Successfully.";
                                } else {
                                    $error = "Failed To Add Products";
                                }
                            }
                        } else {

                            $error = "Please Fill All The Required FIelds.";
                        }
                    }

                    if ($success) {

                        echo "<p class=\"alert alert-success\">$success</p>";
                        echo "<script>setTimeout(\"location.href = viewProducts.php';\",2000);</script>";
                    }

                    if ($error) {

                        echo "<p class=\"alert alert-danger\">$error</p>";
                        echo "<script>setTimeout(\"location.href = 'viewProducts.php';\",2000);</script>";
                    }

                    ?>

                    <?php

                    if (isset($_GET['edit'])) {

                    ?>
                        <h4 class="card-title">Update Products</h4>

                        <p class="alert alert-warning">N.B- If you don't want to change the image keep the field as it is.</p>

                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="simpleinput">Name <span class="text-danger">*</span></label>
                                        <input required type="text" id="simpleinput" class="form-control" placeholder="Enter Product Name" name="productName" value="<?php echo $productsRow['name']; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="simpleinput">Slog <span class="text-danger">*</span></label>
                                            <input required type="text" id="simpleinput" class="form-control" placeholder="Enter Product Slug" name="productSlug" value="<?php echo $productsRow['slug']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-password">Image <span class="text-danger">*</span></label>
                                            <input type="file" onchange="readURL(this)" id="example-password" class="form-control" value="image" accept="image/png, image/gif, image/jpeg" name="image">
                                        </div>
                                        <div id="blah"><img src="<?php echo $productsRow['image']; ?>" alt="" width="150" height="100"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Price(M.R.P) <span class="text-danger">*</span></label>
                                            <input required type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter MRP Rate" name="mrp" value="<?php echo $productsRow['mrp']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Selling Price <span class="text-danger">*</span></label>
                                            <input required type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selling Rate" name="price" value="<?php echo $productsRow['price']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <textarea name="description" id="summernote"><?php echo $productsRow['description']; ?></textarea>
                                </div>

                                <div class="form-group mb-0">
                                    <input name="update" type="submit" class="btn btn-secondary waves-effect waves-light" value="Update Product">
                                </div>

                        </form>

                    <?php

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