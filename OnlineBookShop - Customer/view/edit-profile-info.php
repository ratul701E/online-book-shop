<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Info</title>
</head>
<body>
<?php require_once('navbar.php') ?>
    <!-- fahim: back button -->
    <a href="profile.php">Back</a>

    <!-- fahim: edit profile table -->
    <!-- ratul: info fetch kor -->
    <table class="edit-profile-table" id="edit-profile-table">
        <tr>
            <td>
                Fullname <br>
                <input type="text" name="full_name"><br><br>
                Email <br>
                <input type="text" name="email"><br><br>
                Mobile Number <br>
                <input type="text" name="mobile_number"><br><br>
                Username <br>
                <input type="text" name="username"><br><br>
                NID <br>
                <input type="text" name="nid"><br><br>
                <!-- fahim: save changes button -->
                <button class="save-changes-button" id="save-changes-button">Save Changes</button>
            </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>