<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
<!-- fahim: back button  -->
<!-- ratul: cart e direct kor  -->
<a href="cart.php">Back</a>
<?php require_once ('navbar.php') ?>
<!-- ratul: fetch kor  -->
<!-- fahim: checkout table  -->
    <table class="checkout-table" id="checkout-table">
        <tr>
            <td>
                username <br>
                phone <br>
                email <br>
                address <br><br>
                Total: total price <br><br>
                <!-- ratul: password thikmoto dile order confirm  -->
                <form action="">
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