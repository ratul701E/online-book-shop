<?php
session_start();
require ('../model/user-model.php');
$users = get_users_by_status("Pending");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidates</title>
</head>

<body>
    <?php require_once ('navbar.php') ?>
    <?php require_once ('right-panel.php') ?>
    <!-- fahim: shundor format kor -->
    Candidates
    <?= count($users) ?> Total Person <!-- ratul: fetch kor -->
    <a href="create-new-employee.php">New</a>
    <!-- ratul: candidate bana, ora user but ogor account status pending, submit korle approved hoia jaibo -->
    <table class="candidate-table" id="candidate-table">

        <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td>
                    <img src="" alt=""> <!-- ratul: eine pic laga -->
                    <?= $user['full_name'] ?>
                    <?= $user['email'] ?>
                    <?= $user['mobile_number'] ?>
                    <!-- EX: 10 Years
                        Applied: 12 May, 2024 -->
                    <button><a href="view-details.php?user_id=<?= $user['user_id'] ?>">View</a></button>
                    <button><a
                            href="../controller/approve-candidate-controller.php?user_id=<?= $user['user_id'] ?>">Submit</a></button>
                    <!-- ratul: eine approve korbi pending erte -->
                </td>
            </tr>
            <?php
        }
        ?>

    </table>
</body>

</html>