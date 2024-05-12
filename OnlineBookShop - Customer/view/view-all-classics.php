<?php
require ('../model/book-model.php');

$classics = get_all_books();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classics</title>
    <link rel="stylesheet" href="css/viewAllStyles.css" />

</head>

<body>

    im: back button  -->
    <a href="customer-home.php">Back</a>
    <?php require_once ('navbar.php') ?>

    <div class="container">
         ratul: fetch kor back to back  -->
        <table class="classics-table" id="classics-table">
            <tr>
                <td>
                    <h2>Classics</h2>
                </td>
            </tr>
            <?php
            foreach ($classics as $book) {
                ?>
            <tr>
                <td>
                <a href="book-page.php?book_id=<?= $book['book_id'] ?>">Title: <?= $book['title'] ?></a><br>
                    Author Name: <?= $book['author'] ?><br>
                    <img src="<?= $book['imgdir'] ?>" alt="x"><br>
                    Taka: <?= $book['price'] ?>
                </td>
            </tr>
            <?php
            }
        ?>
        </table>
    </div>
    <?php require_once ('footer.php') ?>
</body>

</html>