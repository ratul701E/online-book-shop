<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
<!-- fahim: add user table -->
<!-- ratul: ein dia employee ar manager 2 account e khulte parbi -->
    <form action="" method="post">
    <table class="create-user-table" id="create-user-table">
        <tr>
            <td>
                Fullname <br>
                <input type="text" name="full_name"><br><br>
                Email <br>
                <input type="text" name="email"><br><br>
                Mobile Number <br>
                <input type="text" name="mobile_number"><br><br>
                Address <br>
                <textarea type="text" name="Address"> </textarea><br><br>
                Username <br>
                <input type="text" name="username"><br><br>
                Password <br>
                <input type="text" name="password"><br><br>
                NID <br>
                <input type="text" name="nid"><br><br>
                <!-- fahim: Create User button -->
                <button>Create User</button>
            </td>
        </tr>
    </table>
    </form>
<?php require_once('footer.php') ?>
</body>
</html>