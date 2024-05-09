<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

    <!-- fahim: back button -->
    <a href="sign-in.php">Back</a>

    <!-- fahim: registration form -->
    <form action="" method="post">
    <table class="registration-table" id="registration-table">
        <tr>
            <td>
                Fullname <br>
                <input type="text" name="full_name"><br><br>
                Email <br>
                <input type="text" name="email"><br><br>
                Mobile Number <br>
                <input type="text" name="mobile_number"><br><br>
                Address <br>
                <textarea type="text" name="Address"><br><br>
                Username <br>
                <input type="text" name="username"><br><br>
                Password <br>
                <input type="text" name="password"><br><br>
                NID <br>
                <input type="text" name="nid"><br><br>
                <!-- fahim: sign up button -->
                <button class="sign-up-button" id="sign-up-button">Sign Up</button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>