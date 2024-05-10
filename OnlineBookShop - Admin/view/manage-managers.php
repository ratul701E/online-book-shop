<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Managers</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
<!-- fahim: manager table -->
<!-- ratul: fetch kor -->
    <table class="managers-table" id="managers-table">
        <tr>
            <td colspan="5">
                Manager Details
            </td>
            <td>
                <!-- ratul: employee create kor notun -->
                <a href="add-user.php">Add Manager</a>
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
            <td> <a href="">Ban Manager</a> </td>
            <td> <a href="">Demote to Employee</a> </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>