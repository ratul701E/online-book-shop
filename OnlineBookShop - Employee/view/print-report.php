<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Report</title>
</head>
<body>

    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>

    <!-- ratul: fetch kor ar pdf bana -->
    <!-- fahim: shundor kor -->
    Number of Books Available: <?=$counts['total_books'] ?> 
    Number of Books in Stock: <?=$counts['total_stock'] ?>
    Number of Books Sold: <?=$counts['total_sold'] ?>
    Number of Customers: <?=$users['total_customers'] ?>
    Number of Employees: <?=$users['total_employees'] ?>
    Number of Managers: <?=$users['total_managers'] ?>
    Total Orders: <?= $orders_count['total_count'] ?>
    Orders Pending: <?= $orders_count['pending_count'] ?>
    Completed Orders: <?= $orders_count['completed_count'] ?>
    Cancelled Orders: <?= $orders_count['cancelled_count'] ?>
    Total Revenue: TK. <?= $total_money['completed_money'] ?>  
    Pending: TK. <?= $total_money['pending_money'] ?> 
    Employee Salary: TK. <?= $total_money['completed_money'] ?>  
    Profit: TK. <?= $total_money['pending_money'] ?> 

    <button>Print Report</button>

    <?php require_once('footer.php') ?>
</body>
</html>