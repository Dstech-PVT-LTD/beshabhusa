<?php include "./settings/config.php"; ?>
<?php

// <!-- ============================================================== -->
// page presets and optional scripts
// <!-- ============================================================== -->
$title = "Contact Us";
$dataTableNeeded = true;
$quillNeeded = true;

?>
<?php include "./settings/header.php"; ?>


<?php include "./settings/sidebar.php"; ?>

<?php 
  if (isset($_GET['delete'])) {

    $decodedId = base64_decode($_GET['delete']);

    $deleteProductsStmt = $conn->prepare("DELETE FROM `contact_us` WHERE `id` = ?");

    if ($deleteProductsStmt->execute([$decodedId])) {

        $success = "Product Deleted Successfully.";
    } else {

        $error = "Failed To Delete Product.";
    }
}
?>

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

                    $fetchServiceStmt = $conn->prepare("SELECT * FROM `contact_us` ORDER BY `id` DESC");

                    if ($fetchServiceStmt->execute([])) {

                        $count = $fetchServiceStmt->rowCount();

                        if ($count > 0) {

                    ?>

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
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
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['subject']; ?></td>
                                            <td><?php echo $row['message']; ?></td>
                                            <td>
                                                <a href="contactus.php?delete=<?php echo $id; ?>"><button class="btn btn-danger waves-effect waves-light">Delete</button></a>
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
