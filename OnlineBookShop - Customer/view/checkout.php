<?php
    session_start();
    require('../model/user-model.php');
    require '../controller/status-message.php';
    $user = get_user_by_username($_SESSION['user']['username']);
    $cart = $_SESSION['cart'];

    $total_price = 0;
    foreach($cart as $item) {
        $total_price += $item['price'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
<!-- fahim: back button  -->
<a href="cart.php">Back</a>
<?php require_once ('navbar.php') ?>
<!-- fahim: checkout table  -->

    <!-- message -->
    <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>

    <table class="checkout-table" id="checkout-table">
        <tr>
            <td>
                <?=$user['username']?> <br>
                <?=$user['mobile_number']?> <br>
                <?=$user['email']?> <br>
                <?=$user['address']?> <br><br>
                Total: <?=$total_price?>  <br><br>
                <!-- ratul: password thikmoto dile order confirm  -->
                <form action="../controller/checkout-controller.php" method="post">
                    Password <br>
                    <input type="text" name="password"><br><br>
                    <button>Confirm Order</button>
                </form>
            </td>
        </tr>
    </table>
<?php require_once ('footer.php') ?>
</body>
</html>