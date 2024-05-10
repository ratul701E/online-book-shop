<?php
    require '../controller/status-message.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    
    <form action="../controller/sign-in-controller.php" method="post">
    <!-- fahim: login table -->

    <!-- message -->
    <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
    <table class="sign-in-table" id="sign-in-table">
        <tr>
            <td>
                Username <br>
                <input type="text" name="username"><br><br>
                Password <br>
                <input type="text" name="password"><br><br>
                <!-- fahim: sign in button -->
                <button class="sign-in-button" id="sign-in-button">Sign In</button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>