<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Employees</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
<!-- fahim: manager table -->
<!-- ratul: fetch kor -->
    <table class="employees-table" id="employees-table">
        <tr>
            <td colspan="4">
                Employee Details
            </td>
            <td>
                <!-- ratul: employee create kor notun -->
                <a href="add-user.php">Add Employee</a>
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
            <td> <a href="view-profile.php">View Details</a> </td>
            <td> <a href="edit-profile-info.php">Update Information</a> </td>
            <td> <a href="">Ban Employee</a> </td>
            <td> <a href="">Promote to Manager</a> </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>