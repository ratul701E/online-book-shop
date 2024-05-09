<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<?php require_once('navbar.php') ?>
    <!-- fahim: back button -->
    <a href="customer-home.php">Back</a>
    <a href="edit-profile-info.php">Edit Profile Info</a>
    <a href="manage-address-book.php">Manage Address Book</a>

    <!-- fahim: profile table -->
    <!-- ratul: info fetch kor -->
    <table class="profile" id="profile">
        <tr>
            <td>
                Fullname:
                Email:
                Mobile Number:
                Address:
                Username:
                NID: 
            </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>