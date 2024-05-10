<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
    <!-- fahim: book table -->
    <!-- ratul: info fetch kor -->
    <table class="book-table" id="book-table">
        <tr>
            <td>
                Book Title 
                Author 
                Genre 
                ISBN 
                Price 
                Description 
                Stock Quantity 
            </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>