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
                <h4 class="mb-0 font-size-18">Manage Order</h4>

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
                    INNER JOIN `users` u ON o.user_id = u.id WHERE status != 'pending'
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
                                                
                                                <button class="btn btn-primary waves-effect waves-light status-btn"
                                                    data-order-id="<?php echo $id; ?>" data-status-type="shipped"  <?php echo ($row['status'] == 'out_for_delivery' || $row['status'] == 'shipped' || $row['status'] == 'delivered') ?'disabled':'' ?>>Shipped</button>
                                                <button class="btn btn-success waves-effect waves-light status-btn"
                                                    data-order-id="<?php echo $id; ?>" data-status-type="out_for_delivery"  <?php echo ($row['status'] == 'out_for_delivery' || $row['status'] == 'delivered') ?'disabled':'' ?>>Out for
                                                    delivery</button>
                                                <button class="btn btn-secondary waves-effect waves-light status-btn"
                                                    data-order-id="<?php echo $id; ?>"
                                                    data-status-type="delivered"  <?php echo $row['status'] == 'delivered' ?'disabled':'' ?>>Delivered</button>
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
    <!-- Modal -->
    <div class="modal fade" id="shippedModal" tabindex="-1" role="dialog" aria-labelledby="shippedModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shippedModalLabel">Shipped Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                <p>Enter Tracking ID:</p>
                <input type="text" id="trackingIdInput" class="form-control">
            </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="confirmShippedBtn">Yes, Mark as Shipped</button>
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

        if (statusType === "shipped") {
            // Show the shipping modal
            $("#shippedModal").modal('show');
            $("#confirmShippedBtn").data("order-id", orderId);
            
        } else {
            updateOrderStatus(orderId, statusType);
        }
    });

    $("#confirmShippedBtn").click(function () {
        var orderId = $("#confirmShippedBtn").data("order-id");
        var trackingId = $("#trackingIdInput").val();
        updateOrderStatusWithTrackingId(orderId, trackingId);
        $("#shippedModal").modal('hide');
        window.location.href = 'manageOrder.php';
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
            }
        });
    }

    function updateOrderStatusWithTrackingId(orderId, trackingId) {
        $.ajax({
            url: 'manageOrderApi.php',
            type: 'POST',
            data: { 'shipped': orderId, 'trackingId': trackingId },
            dataType: 'json',
            success: function (response) {
                console.log("Status updated to: " + response.message);
                updateTrackingId(orderId, trackingId);
            },
            error: function (error) {
                console.error(error);
            }
        });
    }

    function updateTrackingId(orderId, trackingId) {
        $.ajax({
            url: 'manageOrderApi.php',
            type: 'POST',
            data: { 'updateTrackingId': true, 'orderId': orderId, 'trackingId': trackingId },
            success: function (response) {
                console.log("Tracking ID updated in the database: " + response);
            },
            error: function (error) {
                console.error(error);
            }
        });
    }
});

    </script>