<?php
    require('../model/book-model.php');
    session_start();
    $books = get_all_books();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Information</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
    <!-- ratul: fetch kor -->
    <!-- fahim: reporting and analytics table -->
    <table class="order-info-table" id="order-info-table">
        <tr>
            <td colspan="5">
                Order Information
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
<?php require_once('footer.php') ?>
</body>
</html>