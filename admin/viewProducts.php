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

                    $fetchServiceStmt = $conn->prepare("SELECT * FROM `products` ORDER BY `id` DESC");

                    if ($fetchServiceStmt->execute([])) {

                        $count = $fetchServiceStmt->rowCount();

                        if ($count > 0) {

                    ?>

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slog</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>short Description</th>
                                        <th>Datetime</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php

                                    $sl = 1;
                                    while ($row = $fetchServiceStmt->fetch()) {

                                        $id = base64_encode($row['id']);
                                    ?>
                                        <tr>
                                            <td><?php echo $sl; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['slugs']; ?></td>
                                            <td>
                                                <p>

                                                    <span class="font-weight-bold">M.R.P -> </span>
                                                    <span><?php echo $row['mrp']; ?></span>

                                                </p>
                                                <p>

                                                    <span class="font-weight-bold">Selling -> </span>
                                                    <span><?php echo $row['price']; ?></span>

                                                </p>
                                            </td>
                                            <td><img  width="438" height="100" src="<?php  echo $row['image']; ?>" alt="productsimage <?php echo $sl; ?>"></td>
                                            <td><?php echo $row['short_description']; ?></td>
                                            <td><?php echo $row['create_at']; ?></td>
                                            <td>
                                                <a href="editProduct.php?edit=<?php echo $id; ?>"><button class="btn btn-warning waves-effect waves-light">Edit</button></a>
                                                <a href="editProduct.php?delete=<?php echo $id; ?>"><button class="btn btn-danger waves-effect waves-light">Delete</button></a>
                                            </td>
                                        </tr>
                                    <?php
                                        $sl++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                    <?php
                        }
                    } else {

                        echo "<p>Failed To Fetch Service List</p>";
                    }

                    ?>


                    <?php

                    if ($success) {

                        echo "<p class=\"alert alert-success\">$success</p>";
                        echo "<script>setTimeout(\"location.href = viewProducts.php';\",2000);</script>";
                    }

                    if ($error) {

                        echo "<p class=\"alert alert-danger\">$error</p>";
                        echo "<script>setTimeout(\"location.href = 'viewProducts.php';\",2000);</script>";
                    }

                    ?>

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