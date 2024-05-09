<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Address Book</title>
</head>
<body>
<?php require_once('navbar.php') ?>
    <!-- fahim: back button -->
    <a href="profile.php">Back</a>

    <!-- fahim: manage address book table -->
    <!-- ratul: password verify koira address update kor -->
    <table class="manage-address-book-table" id="manage-address-book-table">
        <tr>
            <td>
                New Address <br>
                <textarea name="address" cols="30" rows="10"></textarea><br><br>
                Account Password <br>
                <input type="password" name="password"><br><br>
                <!-- fahim: save changes button -->
                <button class="save-changes-button" id="save-changes-button">Save Changes</button>
            </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>