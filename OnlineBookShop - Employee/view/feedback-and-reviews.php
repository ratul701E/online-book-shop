<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Reviews</title>
</head>
<body>
<?php require_once('navbar.php') ?>
<?php require_once('side-panel.php') ?>
    <!-- fahim: rating table table -->
    <table class="cutomer-ratings-table" id="cutomer-ratings-table">
        <tr>
            <td colspan="7">
                Customer Ratings
            </td>
        </tr>
        <tr>
            <td> Book ID </td>
            <td> Book Title </td>
            <td> Username </td>
            <td> Rating </td>
            <td colspan="3"> Action </td>
        </tr>
        <?php
            foreach($all_orders as $order){
                ?>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td> </td>
                        <td> <a href="">View Customer Details</a> </td>
                        <td> <a href="">Delete Rating</a> </td>
                        <td> <a href="">Ban Customer</a> </td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <!-- fahim: review table -->
    <table class="cutomer-reviews-table" id="cutomer-reviews-table">
        <tr>
            <td colspan="7">
                Customer Reviews
            </td>
        </tr>
        <tr>
            <td> Book ID </td>
            <td> Book Title </td>
            <td> Username </td>
            <td> Review </td>
            <td colspan="3"> Action </td>
        </tr>
        <?php
            foreach($all_orders as $order){
                ?>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td> </td>
                        <td>  </td>
                        <td> <a href="">View Customer Details</a> </td>
                        <td> <a href="">Delete Review</a> </td>
                        <td> <a href="">Ban Customer</a> </td>
                    </tr>
                <?php
            }
        ?>
    </table>
<?php require_once('footer.php') ?>
</body>
</html>