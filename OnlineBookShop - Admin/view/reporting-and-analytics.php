<?php
    require('../model/order-model.php');
    require('../model/book-model.php');
    require('../model/user-model.php');

    $all_orders = get_all_orders();
    $counts = get_book_counts();
    $users = get_user_counts();
    $total_money = get_total_money_by_status();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting and Analytics</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>

    <!-- ratul: fetch kor -->
    <!-- fahim: reporting and analytics table -->
    <table class="reporting-and-analytics-table" id="reporting-and-analytics-table">
        <tr>
            <td>
                Number of Books Available: <?=$counts['total_books'] ?>
                Number of Books in Stock: <?=$counts['total_stock'] ?>
                Number of Books Sold: <?=$counts['total_sold'] ?>
                Total Revenue: <?=$total_money['completed_money']?>
                Number of Customers: <?=$users['total_customers'] ?>
                Number of Employees: <?=$users['total_employees'] ?>
                Number of Managers: <?=$users['total_managers'] ?>
            </td>
        </tr>
    </table>
    <!-- ratul: fetch kor -->
    <!-- fahim: reporting and analytics table -->
    <table class="order-info-table" id="order-info-table">
        <tr>
            <td colspan="5">
                Order Info
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