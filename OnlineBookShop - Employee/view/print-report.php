    Invoices 
    Total Earning: <?= $total_money['completed_money'] ?>  TK. 
    Pending: TK. <?= $total_money['pending_money'] ?> 
    Overdue: TK. 1000 <!-- ratul: hardcoded -->
    Essentials: TK. 1000 <!-- ratul: hardcoded -->

    <!-- ratul: fetch kor -->
    Total Orders: <?= $orders_count['total_count'] ?>
    Orders Pending: <?= $orders_count['pending_count'] ?>
    Completed Orders: <?= $orders_count['completed_count'] ?>
    Cancelled Orders: <?= $orders_count['cancelled_count'] ?>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>