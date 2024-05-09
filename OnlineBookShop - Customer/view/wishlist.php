<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
</head>
<body>
    <!-- fahim: back button  -->
    <a href="customer-home.php">Back</a>
    <?php require_once ('navbar.php') ?>

    <!-- fahim: wishlist table  -->
    <!-- ratul: wishlist fetch kor  -->
    <table class="wishlist-table" id="wishlist-table">
        <tr>
            <td>
                <h2>Wishlist</h2>
            </td>
        </tr>
        <tr>
            <td>
                Title: <br>
                Author Name: <br>
                <img src="" alt="x"><br>
                Taka: 
                <!-- ratul: remove koris wishlist erte  -->
                <a href="">Remove from Wishlist</a>
            </td>
        </tr>
    </table>
    <?php require_once ('footer.php') ?>
</body>
</html>