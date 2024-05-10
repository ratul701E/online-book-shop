<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
    <!-- fahim: profile table -->
    <!-- ratul: info fetch kor, ei file e admin nijer info dekhte parbo + manage erte view click korleo einei anbi -->
    <table class="profile-table" id="profile-table">
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