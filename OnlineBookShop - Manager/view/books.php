<?php
    require('../model/book-model.php');
    session_start();
    $books = get_all_books();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>
    <?php require_once('navbar.php') ?>
    <?php require_once('right-panel.php') ?>
    <!-- fahim: shundor format kor -->
    Books
    100 Total Books
    <!-- ratul: fetch kor -->
    <a href="create-new-book.php">New</a>
    <!-- fahim: book table -->
    <!-- ratul: fetch kor -->
    <table class="book-table" id="book-table">
        <tr>
            <th> Book ID </th>
            <th> Book Title </th>
            <th> Stock </th>
            <th colspan="3"> Action </th>
        </tr>
        <?php
                foreach($books as $book) {
                    ?>
        <tr>
            <td><?=$book['book_id']?></td>
            <td><?=$book['title']?></td>
            <td><?=$book['stock_quantity']?></td>
            <td><a href="view-book.php?book_id=<?=$book['book_id']?>">View</a></td>
            <td><a href="edit-book.php?book_id=<?=$book['book_id']?>">Edit</a></td>
            <td><a href="../controller/remove-book-controller.php?book_id=<?=$book['book_id']?>">Delete</a></td>
        </tr>
        <?php
                }
            ?>
    </table>
</body>

</html>