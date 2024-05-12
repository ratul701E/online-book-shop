<?php
    session_start();
    require('../model/user-model.php');
    require('../controller/status-message.php');
    $user = get_user_by_id($_GET['user_id']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
    <link rel="stylesheet" href="css/allFormStyles.css">
    <script src="../controller/js/script.js"></script>
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>

    <div class="container">
        <h1 align="center">Update Information</h1>

        im: edit profile table -->
        <form action="../controller/edit-profile-info-controller.php" method="post"
            onsubmit="return validateEditProfileForm()">
            <br><?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
            <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
            <table class="edit-profile-table" id="edit-profile-table">
                <tr>
                    <td>
                        Fullname <br>
                        <input type="text" name="full_name" value="<?= $user['full_name'] ?>"><br><br>
                        Email <br>
                        <input type="text" name="email" value="<?= $user['email'] ?>"><br><br>
                        Mobile Number <br>
                        <input type="text" name="mobile_number" value="<?= $user['mobile_number'] ?>"><br><br>
                        Username <br>
                        <input type="text" name="username" value="<?= $user['username'] ?>"><br><br>
                        NID <br>
                        <input type="text" name="nid" value="<?= $user['nid'] ?>"><br><br>
                        im: update information button -->
                        <button class="update-information-button" id="update-information-button">Update
                            Information</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>