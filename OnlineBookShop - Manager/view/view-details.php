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
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('right-panel.php') ?>
    <!-- fahim: profile table -->
    <!-- ratul: info fetch kor, ei file e admin nijer info dekhte parbo + manage erte view click korleo einei anbi -->
    <div class="container">
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
    </div>
</body>
</html>