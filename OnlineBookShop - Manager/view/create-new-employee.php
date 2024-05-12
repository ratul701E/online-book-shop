<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Employee</title>
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>
    <!-- fahim: create new employee table -->
    <!-- ratul: ein dia employee account e khulte parbi -->
    <form action="" method="post">
        <table class="create-new-employee-table" id="create-new-employee-table">
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
                    <!-- fahim: Create Employee button -->
                    <button type="submit">Create Employee</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>