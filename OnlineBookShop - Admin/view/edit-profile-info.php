<?php
    require_once('../model/user-model.php');
    require_once '../controller/status-message.php';
    session_start();
    $user = get_user_by_id($_GET['user_id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Info</title>
    <link rel="stylesheet" href="css/addBookAndUserStyles.css">
    <script src="../controller/js/script.js"></script>

</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>


    <div class="container">
        <form action="../controller/edit-profile-info-controller.php" method="post"
            onsubmit="return validateEditProfileForm()">
            <h1 align="center">Edit Profile</h1>
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

                        <button class="save-changes-button" id="save-changes-button">Save Changes</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>