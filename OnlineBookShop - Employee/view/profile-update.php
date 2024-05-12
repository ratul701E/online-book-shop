<?php
    session_start();
    require_once('../model/user-model.php');
    $employees = get_users_by_role('Employee');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('side-panel.php') ?>
    <!-- fahim: add employee table -->
    <div class="container">
        <form action="../controller/add-user-controller.php" method="post">
            <table class="add-employee-table" id="add-employee-table">
                <tr>
                    <td>
                        Add Employee
                    </td>
                </tr>
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
                        <!-- fahim: add employee button -->
                        <button type="submmit">Confirm</button>
                    </td>
                </tr>
            </table>
        </form>
        <!-- fahim: employee table -->
        <table class="employee-table" id="employee-table">
            <tr>
                <td colspan="6">
                    Profile Update
                </td>
            </tr>
            <tr>
                <td> ID </td>
                <td> Employees Name </td>
                <td> Status </td>
                <td colspan="3"> Action </td>
            </tr>
            <?php
            foreach($employees as $user) {
                ?>
            <tr>
                <td> <?= $user['user_id'] ?> </td>
                <td> <?= $user['full_name'] ?> </td>
                <td> <?= $user['status'] ?> </td>
                <td> <a href="view-profile.php?user_id=<?= $user['user_id'] ?>">View
                        <!-- fahim: view korar icon -->
                    </a> </td>
                <td> <a href="edit-profile-info.php?user_id=<?= $user['user_id'] ?>">Edit
                        <!-- fahim: edit korar icon -->
                    </a> </td>
                <td> <a href="../controller/delete-user-controller.php?user_id=<?= $user['user_id'] ?>">Delete
                        <!-- fahim: delete korar icon -->
                    </a> </td>
            </tr>
            <?php
            }
        ?>
        </table>
    </div>
    <?php require_once('footer.php') ?>
</body>

</html>