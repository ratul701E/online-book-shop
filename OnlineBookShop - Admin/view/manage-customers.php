<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Customers</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
<!-- fahim: customer table -->
<!-- ratul: fetch kor -->
    <table class="customers-table" id="customers-table">
        <tr>
            <td colspan="6">
                Customer Details
            </td>
        </tr>
        <tr>
            <td> Customer ID </td>
            <td> Fullname </td>
            <td> Username </td>
            <td colspan="3"> Action </td>
        </tr>
        <tr>
            <td> 1 </td>
            <td> Rianul Amin </td>
            <td> ppsppspsspss </td>
            <!-- ratul: eki file shobar leiga oi file gulay id pass koira dis edit view ban -->
            <td> <a href="view-profile.php">View Details</a> </td>
            <td> <a href="edit-profile-info.php">Update Information</a> </td>
            <td> <a href="">Ban Customer</a> </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>