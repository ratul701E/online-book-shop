<?php

require '../controller/status-message.php'
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
<?php require_once('side-panel.php') ?>

    <!-- fahim: change password table -->
    <!-- ratul: password verify koira password update kor  => DONE -->
    <!-- message -->
    <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
    <form action="../controller/change-password-controller.php" method="post">
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
<?php require_once('footer.php') ?>
</body>
</html>