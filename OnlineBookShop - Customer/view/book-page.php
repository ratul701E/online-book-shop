<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Page</title>
</head>
<body>
<!-- fahim: back button  -->
<a href="customer-home.php">Back</a>
<?php require_once ('navbar.php') ?>
    <table>
        <tr>
            <td>
                <!-- fahim: boi er sobi -->
                <img src="" alt="">
            </td>
            <td>
                <!-- ratul: fetch kor -->
                <!-- fahim: formatting kor -->
                Book Title <br>
                by Author Name <br>
                ISBN: isbn <br>
                Genre: genre <br>
                4 Ratings | 2 Reviews <br>
                Description: description <br>
                <strike>Price</strike> Tk 1200 (20 Taka Off!) <br>
                In Stock (Only 3 Copies left) <br>
                Order before out of stock <br><br>
                <button><a href="">Add to Cart</a></button> <br>
                <!-- fahim: icon gular leiga img tag disi -->
                <img src="" alt=""> The opportunity to pay the price by getting the book <img src="" alt=""> Exchange opportunity within 7 days <br>
                <!-- ratul: wishlist e add kor -->
                <img src="" alt=""><a href="">Add to Wishlist</a>
            </td>
        </tr>
    </table>
    <!-- fahim: related products -->
    <!-- ratul: genre match kore emon 5 ta fetch koira nia ay -->
    <table class="related-products-table" id="related-products-table">
        <tr>
            <td>
                <h2>Related Products</h2>
                <!-- ratul: genre da oi file e patha and oi file e same genre er shob dia table populate kor -->
                <a href="view-all-related-products.php">View All</a>
            </td>
        </tr>
        <tr>
            <!-- ratul: daan dik borabor fetch koris td te 5 ta jedir genre match kore -->
            <td>
                Title: <br>
                Author Name:   <br>
                <img src="" alt="x"><br>
                Taka: 
            </td>
        </tr>
    </table>
    <!-- fahim: bame rating daane review -->
    <table class="reviews-and-ratings-table" id="reviews-and-ratings-table">
        <tr>
            <td>
                <!-- ratul: ei boida kinna thakle rating dite parbo -->
                4.8 <br>
                5 people have rated this. <br>
                <!-- ratul: einte rating nis -->
                <form action="" method="post">
                <input type="radio" name="rating"> * <!-- fahim: eine star er icon bohais -->
                <input type="radio" name="rating"> **
                <input type="radio" name="rating"> ***
                <input type="radio" name="rating"> ****
                <input type="radio" name="rating"> ***** <br><br>
                <button>Submit Rating</button>
                </form>
                <br><br>
                Product Q&A <br>
                Have a question regarding this product? Ask us.
            </td>
            <td>
                <!-- ratul: review gula fetch koris lomba koira tr dia -->
                <table class="reviews-table" id="reviews-table">
                    <tr>
                        <td>
                            username <br>
                            review
                            <!-- ratul: nijer review hoile delete korte parbo -->
                        </td>
                    </tr>
                </table>
                <!-- ratul: ei boida kinna thakle review post korte parbo -->
                <form action="">
                    <textarea name="review"></textarea><br>
                    <button>Post</button>
                </form>
            </td>
        </tr>
    </table>
    <?php require_once ('footer.php') ?>
</body>
</html>