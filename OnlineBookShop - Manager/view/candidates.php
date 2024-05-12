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
    <link rel="stylesheet" href="css/allTableStyles.css">

</head>

<body>
    <?php require_once ('navbar.php') ?>
    <?php require_once ('right-panel.php') ?>
    <!-- fahim: shundor format kor -->
    <div class="container">

        <h1>Candidates</h1>
        <?= count($users) ?> Total Person
        <!-- ratul: fetch kor -->
        <a href="create-new-employee.php">New</a>
        <!-- ratul: candidate bana, ora user but ogor account status pending, submit korle approved hoia jaibo -->
        <table class="candidate-table" id="candidate-table">

            <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td class="candidate">
                    <img src="" alt=""> <!-- ratul: eine pic laga -->
                    <p><strong>Name: </strong><?= $user['full_name'] ?></p>
                    <p><strong>Email: </strong><?= $user['email'] ?></p>
                    <p><strong>Contact: </strong><?= $user['mobile_number'] ?></p>
                    <!-- EX: 10 Years
                Applied: 12 May, 2024 -->
                </td>
                <td>
                    <a href="view-details.php?user_id=<?= $user['user_id'] ?>">View</a>
                </td>
                <td>
                    <a href="../controller/approve-candidate-controller.php?user_id=<?= $user['user_id'] ?>">Active</a>
                    <!-- ratul: eine approve korbi pending erte -->
                </td>
                </td>
            </tr>
            <?php
        }
        ?>

        </table>
    </div>
</body>

</html>