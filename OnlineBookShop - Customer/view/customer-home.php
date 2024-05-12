<?php
require '../model/book-model.php';

$all_books = array_slice(get_all_books(), 0, 5);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Home</title>
    <link rel="stylesheet" href="css/customerHomeStyles.css">
</head>

<body>
    <div class="container">
        <?php require_once ('navbar.php') ?>
        <!-- fahim: banner -->
        <table class="banner" id="banner">
            <tr>
                <td>
<<<<<<< HEAD
                    <!-- fahim: banner lagais ekta -->
=======
                     fahim: banner lagais ekta -->
>>>>>>> parent of 07e05e9 (updated)
                    <img src="../vendor/banner.png" alt="">
                </td>
            </tr>
        </table>

<<<<<<< HEAD
        <!-- fahim: best seller -->
=======
         fahim: best seller -->
>>>>>>> parent of 07e05e9 (updated)
        <table class="best-seller-table" id="best-seller-table">
            <tr>
                <td>
                    <h2>Best Seller</h2>
                    <a href="view-all-best-seller.php">View All</a>
                </td>
            </tr>
            <tr>
<<<<<<< HEAD
                <!-- ratul: daan dik borabor fetch koris td te 5 ta -->
=======
                 ratul: daan dik borabor fetch koris td te 5 ta -->
>>>>>>> parent of 07e05e9 (updated)
                <?php
                foreach($all_books as $book) {
                    ?>
                <td>
                <a href="book-page.php?book_id=<?= $book['book_id'] ?>">Title: <?= $book['title'] ?></a> <br>
                    Author Name: <?= $book['author'] ?> <br>
                    <img src="<?= $book['imgdir'] ?>" alt="x"><br>
                    Taka: <?= $book['price'] ?>
                </td>
                <?php
                }
            ?>
            </tr>
        </table>

        <!-- fahim: classics -->
        <table class="classics-table" id="classics-table">
            <tr>
                <td>
                    <h2>Classics</h2>
                    <a href="view-all-classics.php">View All</a>
                </td>
            </tr>
            <tr>
                <!-- ratul: daan dik borabor fetch koris td te 5 ta -->
                <?php
                foreach($all_books as $book) {
                    ?>
                <td>
                    <a href="book-page.php?book_id=<?= $book['book_id'] ?>">Title: <?= $book['title'] ?></a> <br>
                    Author Name: <?= $book['author'] ?> <br>
                    <img src="<?= $book['imgdir'] ?>" alt="x"><br>
                    Taka: <?= $book['price'] ?>
                </td>
                <?php
                }
            ?>
            </tr>
        </table>
    </div>
    <footer>
        <?php require_once ('footer.php') ?>
    </footer>


</body>

</html>