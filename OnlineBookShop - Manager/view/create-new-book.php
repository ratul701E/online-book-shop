<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Book</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('right-panel.php') ?>
<!-- fahim: create book table -->
    <form action="" method="post">
        <table class="create-book-table" id="create-book-table">
            <tr>
                <td>
                    Book Title <br>
                    <input type="text" name="title"><br><br>
                    Author <br>
                    <input type="text" name="author"><br><br>
                    Genre <br>
                    <input type="text" name="genre"><br><br>
                    ISBN <br>
                    <input type="text" name="isbn"><br><br>
                    Price <br>
                    <input type="text" name="price"><br><br>
                    Description <br>
                    <textarea type="text" name="description"> </textarea><br><br>
                    Stock Quantity <br>
                    <input type="text" name="stock_quantity"><br><br>
                    <!-- fahim: add book button -->
                    <button>Create Book</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>