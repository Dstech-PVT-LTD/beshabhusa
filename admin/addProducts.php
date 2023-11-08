<?php include "./settings/config.php"; ?>
<?php

// <!-- ============================================================== -->
// page presets and optional scripts
// <!-- ============================================================== -->
$title = "Products";
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
                <h4 class="mb-0 font-size-18">Product Management</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">beshabhusa</a></li>
                        <li class="breadcrumb-item active">Products</li>
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
                        if (!empty($name) || !empty($productSlogme) || !empty($_FILES['image']) || !empty($mrp) || !empty($price) || !empty($description) || !empty($shortDescription) || !empty($catId)) {

                            // duplicate service check
                            $duplicateServiceCheckStmt = $conn->prepare("SELECT * FROM `products` WHERE `name` = ?");
                            $duplicateServiceCheckStmt->execute([$name]);
                            $duplicateServiceCheckCount = $duplicateServiceCheckStmt->rowCount();

                            if ($duplicateServiceCheckCount > 0) {

                                $error = "Product Already Exists.";
                            } else {
                                $allowed_extensions = array("jpg", "jpeg", "png", "gif");
                                $logo_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

                                if (in_array($logo_ext, $allowed_extensions)) {

                                    $uploaddir = '../productUploads/';
                                    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                                    $image_link = $socket . '/productUploads/' . $_FILES['image']['name'];

                                    $sql = "INSERT INTO `products`(`name`, `slugs`, `image`, `catId`, `mrp`, `price`, `description`, `short_description`)VALUES (:name,:slug,:image,:catid,:mrp,:price, :description,:shortdescription)";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->bindParam(":name", $productName);
                                    $stmt->bindParam(":slug", $productSlug);
                                    $stmt->bindParam(":image", $image_link);
                                    $stmt->bindParam(":catid", $catId);
                                    $stmt->bindParam(":mrp", $mrp);
                                    $stmt->bindParam(":price", $price);
                                    $stmt->bindParam(":description", $description);
                                    $stmt->bindParam(":shortdescription", $shortDescription);


                                    if ($stmt->execute()) {
                                        $success = "Product Added Successfully.";
                                    } else {
                                        $error = "Failed To Add Product";
                                    }
                                } else {
                                    $error = "Invalid File";
                                }
                            }
                        } else {

                            $error = "Please Fill All The Required FIelds.";
                        }
                    }

                    $fetchCategoryStmt = $conn->prepare("SELECT * FROM `categories` ORDER BY `id` DESC");

                    $fetchCategoryStmt->execute([]);

                    ?>

                    <h4 class="card-title">Add Products</h4>

                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="simpleinput">Name <span class="text-danger">*</span></label>
                                    <input required type="text" id="simpleinput" class="form-control" placeholder="Enter Product Name" name="productName">
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="simpleinput">Slug <span class="text-danger">*</span></label>
                                    <input required type="text" id="simpleinput" class="form-control" placeholder="Enter Slug Name" name="productSlug">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-password">Image <span class="text-danger">*</span></label>
                                    <input required type="file" onchange="readURL(this)" id="example-password" class="form-control" value="image" accept="image/png, image/gif, image/jpeg" name="image">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="simpleinput">Choose Categories <span class="text-danger">*</span></label>

                                    <select name="catId" id="categories" class="form-control">
                                        <option value="">Categories</option>
                                        <?php

                                        $sl = 1;
                                        while ($row = $fetchCategoryStmt->fetch()) {

                                            $id = base64_encode($row['id']);
                                        ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        <?php
                                            $sl++;
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Price(M.R.P) <span class="text-danger">*</span></label>
                                    <input required type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter MRP Rate" name="mrp">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Selling Price <span class="text-danger">*</span></label>
                                    <input required type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selling Rate" name="price">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="simpleinput">Short Description<span class="text-danger">*</span></label>
                                    <input required type="text" id="simpleinput" class="form-control" placeholder="Enter Short Description" name="shortDescription">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control" id="summernote"></textarea>
                                </div>
                            </div>
                        </div>
                
                <div class="form-group mt-0">
                    <input name="submit" type="submit" class="btn btn-secondary waves-effect waves-light" value="Create New Product">
                </div>
                </form>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

</div> <!-- container-fluid -->




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