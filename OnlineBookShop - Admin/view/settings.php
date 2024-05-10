<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>

    <!-- fahim: sobi laga  -->
    <a href="edit-profile-info.php?user_id=<?=$_SESSION['user']['user_id']?>">Edit Profile Info</a>
    <a href="change-password.php">Change Password</a>

<?php require_once('footer.php') ?>
</body>
</html>