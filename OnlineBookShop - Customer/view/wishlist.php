<?php
    session_start();
    require('../model/wishlist-model.php');
    require('../model/book-model.php');
    require('../controller/status-message.php');
    $wishlist = get_wishlist($_SESSION['user']['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
</head>
<body>
    <!-- fahim: back button  -->
    <a href="customer-home.php">Back</a>
    <?php require_once ('navbar.php') ?>

    <!-- fahim: wishlist table  -->
    <!-- ratul: wishlist fetch kor  -->
    <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?>
    <table class="wishlist-table" id="wishlist-table">
        <tr>
            <td>
                <h2>Wishlist</h2>
            </td>
        </tr>

        <?php
            foreach($wishlist as $wish){
                $book = get_book_by_id($wish['book_id']);
                ?>
                    <tr>
                        <td>
                            Title: <?= $book['title'] ?><br>
                            Author Name: <?= $book['author'] ?><br>
                            <img src="<?= $book['imgdir'] ?>" alt="x"><br>
                            Taka: <?= $book['price'] ?>
                            <form action="../controller/remove-book-from-wishlist-controller.php" method="post">
                                <input type="hidden" name="book_id" value="<?= $book['book_id'] ?>">
                                <button class="delete" type="submit">Remove From Wishlist</button>
                            </form>
                        </td>
                    </tr>
                <?php
            }

        ?>


    </table>
    <?php require_once ('footer.php') ?>
</body>
</html>