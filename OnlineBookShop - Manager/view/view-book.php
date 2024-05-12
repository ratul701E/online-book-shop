<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Book</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('right-panel.php') ?>
    <!-- fahim: book table -->
    <!-- ratul: info fetch kor -->
    <table class="book-table" id="book-table">
        <tr>
            <td>
                Book Title: <?=$book['title']?>
                Author: <?=$book['title']?>
                Genre: <?=$book['genre']?>
                ISBN: <?=$book['isbn']?>
                Price: <?=$book['price']?>
                Description: <?=$book['description']?>
                Stock Quantity: <?=$book['stock_quantity']?>
            </td>
        </tr>
    </table>
</body>
</html>