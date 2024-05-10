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
                Number of Books Available: 
                Number of Books in Stock: 
                Number of Books Sold: 
                Total Revenue: 
                Number of Customers: 
                Number of Employees: 
                Number of Managers: 
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
            <td> Username </td>
            <td> Date </td>
            <td> Total </td>
            <td> Action </td>
        </tr>
        <tr>
            <td> 1 </td>
            <td> ppsppspsspss </td>
            <td> ajke </td>
            <td> 200 </td>
            <td> <a href="order-details.php">View Details</a> </td>
        </tr>
    </table>

<?php require_once('footer.php') ?>
</body>
</html>