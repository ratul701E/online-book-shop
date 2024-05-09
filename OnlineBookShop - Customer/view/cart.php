<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <!-- fahim: back button  -->
    <a href="customer-home.php">Back</a>
    <?php require_once ('navbar.php') ?>

    <!-- fahim: cart table  -->
    <!-- ratul: cart fetch kor  -->
    <table class="cart-table" id="cart-table">
        <tr>
            <td>
                <h2>Cart</h2>
            </td>
        </tr>
        <tr>
            <td>
                Title: <br>
                Author Name: <br>
                <img src="" alt="x"><br>
                Taka: 
                <!-- ratul: remove koris cart erte  -->
                <a href="">Remove from Cart</a>
            </td>
        </tr>
    </table>
    <!-- ratul: total price fetch koris  -->
    <button><a href="checkout.php">Checkout [Total Price]</a></button>
    <?php require_once ('footer.php') ?>
</body>
</html>