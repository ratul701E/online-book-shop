<?php
    require('../model/order-model.php');
    require('../model/user-model.php');

    if(!isset($_GET['order_id'])) $_GET['order_id'] = 1;
    $order = get_order_details($_GET['order_id']);
    $user_details = get_user_by_id($order['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
    <!-- fahim: order details table -->
    <table class="order-details-table" id="order-details-table">
        <tr>
            <td>
                Username: <?= $user_details['username'] ?>
                Order ID: <?= $order['order_id'] ?>
                Order Date: <?= $order['order_date'] ?>
                Total Amount: <?= $order['total_price'] ?>
                Order Status: <?= $order['status'] ?>
            </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>