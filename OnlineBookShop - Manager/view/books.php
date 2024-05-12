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
    100 Total Books <!-- ratul: fetch kor -->
    <a href="create-new-book.php">New</a>
    <!-- fahim: book table -->
    <!-- ratul: fetch kor -->
    <table class="book-table" id="book-table">
        <tr>
            <td> Book ID </td>
            <td> Book Title </td>
            <td> Stock </td>
            <td colspan="3"> Action </td>
        </tr>
        <?php
                foreach($books as $book) {
                    ?>  
                        <tr>
                            <td><?=$book['book_id']?></td>
                            <td><?=$book['title']?></td>
                            <td><?=$book['stock_quantity']?></td>
                            <td><a href="">View</a></td>
                            <td><a href="">Edit</a></td>
                            <td><a href="">Remove</a></td>
                        </tr>
                    <?php
                }
            ?>
    </table>
</body>
</html>