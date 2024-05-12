<?php
    session_start();
    require('../model/user-model.php');
    $user = get_user_by_id($_GET['user_id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <link rel="stylesheet" href="css/allTableStyles.css">
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>
<<<<<<< HEAD
    <!-- fahim: profile table -->
    <!-- ratul: info fetch kor, ei file e admin nijer info dekhte parbo + manage erte view click korleo einei anbi -->
=======
     fahim: profile table -->
     ratul: info fetch kor, ei file e admin nijer info dekhte parbo + manage erte view click korleo einei anbi -->
>>>>>>> parent of 07e05e9 (updated)
    <div class="container">
        <h1 align="center">View Details</h1>
        <table class="profile-table" id="profile-table">
            <tr>
                <td>
                    <p><strong>Fullname:</strong> <?= $user['full_name'] ?></p>
                    <p><strong>Email:</strong> <?= $user['email'] ?></p>
                    <p><strong>Mobile Number:</strong> <?= $user['mobile_number'] ?></p>
                    <p><strong>Address:</strong> <?= $user['address'] ?></p>
                    <p><strong>Username:</strong> <?= $user['username'] ?></p>
                    <p><strong>NID:</strong> <?= $user['nid'] ?></p>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>