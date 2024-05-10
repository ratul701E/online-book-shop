<?php
    session_start();
    require('../model/user-model.php');
    $user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>

    <a href="edit-profile-info.php">Edit Profile Info</a>

    <!-- fahim: profile table -->
    <!-- ratul: info fetch kor -->
    <table class="profile-table" id="profile-table">
        <tr>
            <td>
                Fullname: <?= $user['full_name'] ?>
                Email: <?= $user['email'] ?>
                Mobile Number: <?= $user['mobile_number'] ?>
                Address: <?= $user['address'] ?>
                Username: <?= $user['username'] ?>
                NID: <?= $user['nid'] ?>
            </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>