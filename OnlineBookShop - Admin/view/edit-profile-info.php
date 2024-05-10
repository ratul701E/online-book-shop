<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Info</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
    <!-- fahim: edit profile table -->
    <!-- ratul: info fetch kor, ei file e admin nijer info dekhte parbo + manage erte view click korleo einei anbi -->
    <form action="" method="post">
        <table class="edit-profile-table" id="edit-profile-table">
            <tr>
                <td>
                    Fullname <br>
                    <input type="text" name="full_name" value=""><br><br>
                    Email <br>
                    <input type="text" name="email" value=""><br><br>
                    Mobile Number <br>
                    <input type="text" name="mobile_number" value=""><br><br>
                    Username <br> 
                    <input type="text" name="username" value=""><br><br> 
                    NID <br>
                    <input type="text" name="nid" value=""><br><br>
                    <!-- fahim: save changes button -->
                    <button class="save-changes-button" id="save-changes-button">Save Changes</button>
                </td>
            </tr>
        </table>
    </form>
<?php require_once('footer.php') ?>
</body>
</html>