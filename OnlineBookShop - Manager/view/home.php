<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('right-panel.php') ?>

<!-- fahim: chhobi ajaira balsal dia bhorayla -->
<!-- ratul: ajker tarikh fetch kor eine (jigaisna ken) -->
5 May, 2024

<a href="edit-information.php">Edit Information</a> <!-- fahim: ei 2 da right corner e rakh profile er -->
<a href="change-password.php">Change Password</a>

<table class="manager-home-table" id="manager-home-table">
    <tr>
        <td>
            Manager Home 

            Fullname: <?= $user['full_name'] ?>
            Email: <?= $user['email'] ?>
            Mobile Number: <?= $user['mobile_number'] ?>
            Address: <?= $user['address'] ?>
            Username: <?= $user['username'] ?>
            NID: <?= $user['nid'] ?>
        </td>
    </tr>
</table>
</body>
</html>