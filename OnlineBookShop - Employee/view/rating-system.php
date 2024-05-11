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
    <!-- ratul: fetch kor -->
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
            foreach($managers as $user) {
                ?>
                    <tr>
                        <!-- ratul: attendance fetch koris -->
                        <td> <?= $user['user_id'] ?> </td>
                        <td> <?= $user['full_name'] ?> </td>
                        <td> Attendance </td>
                        <td> <a href=""> Give Attendance </a> </td>
                    </tr>
                <?php
            }
        ?>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>