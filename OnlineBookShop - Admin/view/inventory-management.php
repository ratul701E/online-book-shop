<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
<!-- fahim: inventory table -->
<!-- ratul: fetch kor -->
    <table class="inventory-table" id="inventory-table">
        <tr>
            <td colspan="5">
                Inventory Details
            </td>
            <td>
                <!-- ratul: employee create kor notun -->
                <a href="add-book.php">Add Book</a>
            </td>
        </tr>
        <tr>
            <td> Book ID </td>
            <td> Book Title </td>
            <td> Stock </td>
            <td colspan="3"> Action </td>
        </tr>
        <tr>
            <td> 1 </td>
            <td> Rianul Amin </td>
            <td> 5 </td>
            <td> <a href="book-details.php">View Details</a> </td>
            <td> <a href="edit-book-info.php">Update Information</a> </td>
            <td> <a href="">Delete Book</a> </td>
        </tr>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>