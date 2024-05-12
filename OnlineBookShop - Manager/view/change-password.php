<?php
    session_start();
    require('../controller/status-message.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>

    <!-- fahim: change password table -->
    <!-- message -->
    <div class="container">
        <h1 align="center">Change Password</h1>
        <form action="../controller/change-password-controller.php" method="post"
            onsubmit="return validateChangePasswordForm()">
            <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
            <table class="change-password-table" id="change-password-table">
                <tr>
                    <td>
                        Enter Old Password <br>
                        <input type="password" name="password"><br><br>
                        New Password <br>
                        <input type="password" name="npassword"><br><br>
                        Confirm New Password <br>
                        <input type="password" name="cnpassword"><br><br>
                        <!-- fahim: save changes button -->
                        <button class="save-changes-button" id="save-changes-button">Save Changes</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>