    <?php
        require '../controller/status-message.php'
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <script src="../controller/js/authScript.js"></script>
        <link rel="stylesheet" href="css/authStyles.css" />
    </head>

    <body>
        <div class="tempNavBar">
            <h1>Online Book Shop</h1>
        </div>
        <div class="container">
            <!-- fahim: signup button -->

            <form action="../controller/sign-in-controller.php" method="post" onsubmit="return validateSignInForm()">
<<<<<<< HEAD
                <!-- fahim: login table -->
                <!-- message -->
=======
                 fahim: login table -->
                 message -->
>>>>>>> parent of 07e05e9 (updated)
                <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
                <table class="sign-in-table" id="sign-in-table">
                    <tr>
                        <td>
                            Username <br>
                            <input type="text" name="username" placeholder=""><br><br>
                            Password <br>
                            <input type="text" name="password"><br><br>
<<<<<<< HEAD
                            <!-- fahim: sign in button -->
=======
                             fahim: sign in button -->
>>>>>>> parent of 07e05e9 (updated)
                            <button class="sign-in-button" id="sign-in-button">Sign In</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </body>

    </html>