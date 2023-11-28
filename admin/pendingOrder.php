<?php include "./settings/config.php"; ?>
<?php

// <!-- ============================================================== -->
// page presets and optional scripts
// <!-- ============================================================== -->
$title = "Orders";
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
                <h4 class="mb-0 font-size-18">Pending Orders</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">beshabhusa</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <?php

                    $fetchServiceStmt = $conn->prepare("SELECT o.*, u.first_name, u.last_name FROM `orders` o
                    INNER JOIN `users` u ON o.user_id = u.id
                    WHERE o.status = 'pending'
                    ORDER BY o.id DESC");

                    if ($fetchServiceStmt->execute([])) {

                        $count = $fetchServiceStmt->rowCount();

                        if ($count > 0) {

                            ?>
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>S.n</th>
                                        <th>Order Id</th>
                                        <th>User Name</th>
                                        <th>Products</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                        <th>Datetime</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $sl = 1;
                                    while ($row = $fetchServiceStmt->fetch()) {

                                        $id = base64_encode($row['id']);
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $sl; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['order_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['first_name'] . ' ' . $row['last_name']; ?>
                                            </td>
                                            <td>
                                                <?php

                                                $products = json_decode($row['products']);
                                                foreach ($products as $value) {
                                                    echo $value->Product;
                                                    echo "<br>";
                                                    // print_r($value);
                                                }


                                                ?>

                                            </td>
                                            <td>
                                                <?php

                                                $products = json_decode($row['products']);
                                                foreach ($products as $value) {
                                                    echo $value->quantity;
                                                    echo "<br>";
                                                    // print_r($value);
                                                }


                                                ?>

                                            </td>
                                            <td>
                                                <p>


                                                    Rs.
                                                    <?php echo $row['amt']; ?>


                                                </p>

                                            </td>


                                            <td>
                                                <?php echo $row['created_at']; ?>
                                            </td>

                                            <td>
                                                <button class="btn btn-info waves-effect waves-light status-btn"
                                                    data-order-id="<?php echo $id; ?>"
                                                    data-status-type="processing"  <?php echo ($row['status'] == 'processing') ?>>Processing</button>
                                                
                                            </td>
                                            <td>
                                                <?php echo $row['status']; ?>
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


                </div>
            </div>
        </div>


    </div>

    

    <?php include "./settings/footer.php"; ?>
    <script>
    $(document).ready(function () {
        $(".status-btn").click(function () {
            

            var orderId = $(this).data("order-id");
            var statusType = $(this).data("status-type");

            
                updateOrderStatus(orderId, statusType);
            
        });

        function updateOrderStatus(orderId, statusType) {
            $.ajax({
                url: 'manageOrderApi.php',
                type: 'POST',
                data: { [statusType]: orderId },
                success: function (response) {
                    console.log("Status updated to: " + response);
                    
                    window.location.href = 'manageOrder.php';
                },
                error: function (error) {
                    console.error(error);
                },
                
            });
        }
    });
</script>
