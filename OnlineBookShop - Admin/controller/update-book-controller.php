<?php
require_once ('../model/book-model.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_id = $_POST['book_id'];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $genre = $_POST["genre"];
    $isbn = $_POST["isbn"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $stock_quantity = $_POST["stock_quantity"];

    update_book($book_id, $title, $author, $genre, $isbn, $price, $description, $stock_quantity, '');
    header("Location: ../view/inventory-management.php");
    exit();
} else {
    header("Location: ../view/add-book.php");
}
?>