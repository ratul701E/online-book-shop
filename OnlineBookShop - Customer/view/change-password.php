<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
<?php require_once('navbar.php') ?>
    <!-- fahim: back button -->
    <a href="profile.php">Back</a>

    <!-- fahim: change password table -->
    <!-- ratul: password verify koira password update kor -->
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
<?php require_once('footer.php') ?>
</body>
</html>