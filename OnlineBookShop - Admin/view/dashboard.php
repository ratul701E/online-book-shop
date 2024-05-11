<?php
    require('../model/order-model.php');
    session_start();
    $orders_count = get_order_counts();
    $total_money = get_total_money_by_status();
    $all_orders = get_all_orders();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboardStyles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>

    <div class="container">
        <div>
            <?php require_once('side-panel.php') ?>
        </div>
        <div>
            <!-- ratul: fetch kor -->
            Invoices
            Total Earning: <?= $total_money['completed_money'] ?> TK.
            Pending: TK. <?= $total_money['pending_money'] ?>
            Overdue: TK. 1000
            <!-- ratul: hardcoded -->
            Essentials: TK. 1000
            <!-- ratul: hardcoded -->

            <!-- ratul: fetch kor -->
            Total Orders: <?= $orders_count['total_count'] ?>
            Orders Pending: <?= $orders_count['pending_count'] ?>
            Completed Orders: <?= $orders_count['completed_count'] ?>
            Cancelled Orders: <?= $orders_count['cancelled_count'] ?>

            <!-- ratul: fetch kor -->
            <!-- fahim: last details table -->
            <table class="last-details-table" id="last-details-table">
                <tr>
                    <td colspan="5">
                        Last Details
                    </td>
                </tr>
                <tr>
                    <td> Order ID </td>
                    <td> Status </td>
                    <td> Date </td>
                    <td> Total </td>
                    <td> Action </td>
                </tr>
                <?php
            foreach($all_orders as $order){
                ?>
                <tr>
                    <td> <?= $order['order_id'] ?> </td>
                    <td> <?= $order['status'] ?> </td>
                    <td> <?= $order['order_date'] ?> </td>
                    <td> <?= $order['total_price'] ?> </td>
                    <td> <a href="order-details.php?order_id=<?= $order['order_id'] ?>">View Details</a> </td>
                </tr>
                <?php
            }

        ?>
            </table>
        </div>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>