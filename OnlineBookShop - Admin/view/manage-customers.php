<?php
    require('../model/user-model.php');
    session_start();
    $managers = get_users_by_role("Customer");

?>

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
            <td> ID </td>
            <td> Fullname </td>
            <td> Username </td>
            <td colspan="3"> Action </td>
        </tr>
        <?php
            foreach($managers as $user) {
                ?>
                    <tr>
                        <td> <?= $user['user_id'] ?> </td>
                        <td> <?= $user['full_name'] ?> </td>
                        <td> <?= $user['username'] ?> </td>
                        <td> <a href="view-profile.php?user_id=<?= $user['user_id'] ?>">View Details</a> </td>
                        <td> <a href="edit-profile-info.php?user_id=<?= $user['user_id'] ?>">Update Information</a> </td>
                        <td> <a href="../controller/ban-user-controller.php?user_id=<?=$user['user_id']?>">Ban Customer</a> </td>
                    </tr>
                <?php
            }
        ?>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>