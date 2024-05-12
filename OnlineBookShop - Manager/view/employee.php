<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('right-panel.php') ?>
    <!-- fahim: shundor format kor -->
    Employees
    100 Total Person <!-- ratul: fetch kor -->
    <a href="create-new-employee.php">New</a>
    <!-- fahim: employees table -->
    <!-- ratul: fetch kor -->
    <table class="employees-table" id="employees-table">
        <tr>
            <th> ID </th>
            <th> Fullname </th>
            <th> Username </th>
            <th colspan="3"> Action </th>
        </tr>
        <?php
        foreach($employees as $user) {
            ?>
        <tr>
            <td> <?= $user['user_id'] ?> </td>
            <td> <?= $user['full_name'] ?> </td>
            <td> <?= $user['username'] ?> </td>
            <td> <a href="view-details.php">View Details</a> </td> <!-- ratul: kaam kor -->
            <td> <a href="update-information.php">Update Information</a> </td>
            <td> <a href="">Delete Account</a></td>
        </tr>
        <?php
        }
    ?>
    </table>
</body>
</html>