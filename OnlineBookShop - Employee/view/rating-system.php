<?php
    session_start();
    require_once('../model/user-model.php');
    require_once('../model/user-attendance-model.php');
    $employees = get_users_by_role('Employee');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating System</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>

    <!-- fahim: rating system table -->
    <table class="rating-system-table" id="rating-system-table">
        <tr>
            <td colspan="4">
                Rating System
            </td>
        </tr>
        <tr>
            <td> ID </td>
            <td> Employees Name </td>
            <td> Attendance </td>
            <td> Action </td>
        </tr>
        <?php
            foreach($employees as $user) {
                ?>
                    <tr>
                        <td> <?= $user['user_id'] ?> </td>
                        <td> <?= $user['full_name'] ?> </td>
                        <td> <?= get_user_attendance($user['user_id'])?> </td>
                        <td> <a href="../controller/give-attendance-controller.php?user_id=<?= $user['user_id'] ?>"> Give Attendance </a> </td>
                    </tr>
                <?php
            }
        ?>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>