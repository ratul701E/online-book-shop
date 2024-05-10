<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>

    <!-- ratul: fetch kor -->
    Invoices 
    Total Earning: TK. 21000 
    Pending: TK. 1000
    Overdue: TK. 1000 <!-- ratul: hardcoded -->
    Essentials: TK. 1000 <!-- ratul: hardcoded -->

    <!-- ratul: fetch kor -->
    Total Orders: 
    Orders Pending: 
    Completed Orders:  
    Cancelled Orders: 

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
        <tr>
            <td> 1 </td>
            <td> delivered </td>
            <td> ajke </td>
            <td> 200 </td>
            <td> <a href="order-details.php">View Details</a> </td>
        </tr>
    </table>

<?php require_once('footer.php') ?>
</body>
</html>