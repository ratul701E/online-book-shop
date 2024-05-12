<?php
session_start();

require_once '../model/user-model.php';
require_once 'status-message.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["title"]) || empty($_POST["author"]) || empty($_POST["genre"]) || empty($_POST["isbn"]) || empty($_POST["price"]) || empty($_POST["description"]) || empty($_POST["stock_quantity"])) {
        header("Location: ../view/create-new-book.php?status=2");
        exit();
    }

    $title = $_POST["title"];
    $author = $_POST["author"];
    $genre = $_POST["genre"];
    $isbn = $_POST["isbn"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $stock_quantity = $_POST["stock_quantity"];
} 
?>