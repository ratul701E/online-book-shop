<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Sheet</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>

    <!-- fahim: salary sheet table -->
    <!-- ratul: fetch kor -->
    <table class="salary-sheet-table" id="salary-sheet-table">
        <tr>
            <td colspan="4">
                Salary Sheet
            </td>
        </tr>
        <tr>
            <td> ID </td>
            <td> Employees Name </td>
            <td> Salary </td>
            <td> Action </td>
        </tr>
        <?php
            foreach($managers as $user) {
                ?>
                    <tr>
                        <!-- ratul: salary fetch koris -->
                        <td> <?= $user['user_id'] ?> </td>
                        <td> <?= $user['full_name'] ?> </td>
                        <td> salary </td>
                        <td> <a href="view-profile.php?user_id=<?= $user['user_id'] ?>"> <!-- fahim: view korar icon --></a> </td>
                    </tr>
                <?php
            }
        ?>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>