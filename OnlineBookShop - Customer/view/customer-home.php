<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Home</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<!-- fahim: banner -->
<table class="banner" id="banner">
    <tr>
        <td>
            <!-- fahim: banner lagais ekta -->
            <img src="" alt="">
        </td>
    </tr>
</table>

<!-- fahim: best seller -->
<table class="best-seller-table" id="best-seller-table">
    <tr>
        <td>
            <h2>Best Seller</h2>
            <a href="view-all-best-sellers.php">View All</a>
        </td>
    </tr>
    <tr>
        <!-- ratul: daan dik borabor fetch koris td te 5 ta -->
        <td>
            Title <br>
            Author Name <br>
            <img src="" alt=""><br>
            Taka
        </td>
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
        <td>
            Title <br>
            Author Name <br>
            <img src="" alt=""><br>
            Taka
        </td>
    </tr>
</table>
<?php require_once('footer.php') ?>
</body>
</html>