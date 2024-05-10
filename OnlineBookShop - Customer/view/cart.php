<?php
    session_start();
    require '../controller/status-message.php';
    $cart = $_SESSION['cart'];
    $total_price = 0;
?>

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
                <h2>Cart</h2> <br>
                <!-- msg -->
                <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?> 
            </td>
        </tr>
        <tr>
            <?php
                foreach($cart as $book) {
                    $total_price += $book['price'];
                    ?>
                        <td>
                            Title: <?= $book['title'] ?><br>
                            Author Name: <?= $book['author'] ?><br>
                            <img src="<?= $book['imgdir'] ?>" alt="x"><br>
                            Taka: <?= $book['price'] ?>
                            <!-- ratul: remove koris cart erte  -->
                            <a href="../controller/add-remove-book-from-cart.php?book_id=<?= $book['book_id'] ?>&action=2&return_url=cart.php?">Remove from Cart</a>
                        </td>
                    <?php
                }

            ?>
        </tr>
    </table>
    <!-- ratul: total price fetch koris  -->
    <button><a href="checkout.php">Checkout [<?=$total_price?>]</a></button>
    <?php require_once ('footer.php') ?>
</body>
</html>