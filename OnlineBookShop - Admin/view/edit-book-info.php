<?php
    require_once ('../model/book-model.php');

    $book = get_book_by_id($_GET['book_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book Info</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
<!-- fahim: add book table -->
    <form action="../controller/update-book-controller.php" method="post">
        <input type="hidden" name="book_id" value="<?=$book['book_id']?>">
        <table class="edit-book-info-table" id="edit-book-info-table">
            <tr>
                <td>
                    Book Title <br>
                    <input type="text" name="title" value="<?=$book['title']?>"><br><br>
                    Author <br>
                    <input type="text" name="author" value="<?=$book['author']?>"><br><br>
                    Genre <br>
                    <input type="text" name="genre" value="<?=$book['genre']?>"><br><br>
                    ISBN <br>
                    <input type="text" name="isbn" value="<?=$book['isbn']?>"><br><br>
                    Price <br>
                    <input type="text" name="price" value="<?=$book['price']?>"><br><br>
                    Description <br>
                    <textarea type="text" name="description" > <?=$book['description']?> </textarea><br><br>
                    Stock Quantity <br>
                    <input type="text" name="stock_quantity" value="<?=$book['stock_quantity']?>"><br><br>
                    <!-- fahim: add book button -->
                    <button>Save Changes</button>
                </td>
            </tr>
        </table>
    </form>
<?php require_once('footer.php') ?>
</body>
</html>