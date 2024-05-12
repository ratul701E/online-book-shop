<?php

require '../controller/status-message.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/profileStyles.css" />
</head>

<body>
    <?php require_once('navbar.php') ?>
     fahim: back button -->
    <h1 align="center">Change Password</h1>
    <div class="container">

         fahim: change password table -->
         ratul: password verify koira password update kor  => DONE -->
         message -->
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
                         changes button -->
                        <button class="save-changes-button" id="save-changes-button">Save Changes</button>
                    </td>
                </tr>
            </table>
        </form>
        <a href="profile.php"><button>Back</button></a>

    </div>
    <?php require_once('footer.php') ?>
</body>

</html>