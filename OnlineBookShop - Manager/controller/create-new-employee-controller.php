<?php
session_start();

require_once '../model/user-model.php';
require_once 'status-message.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["full_name"]) || empty($_POST["email"]) || empty($_POST["mobile_number"]) || empty($_POST["Address"]) || empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["nid"])) {
        header("Location: ../view/create-new-employee.php?status=2"); 
        exit();
    }

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $address = $_POST["Address"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nid = $_POST["nid"];

} 
?>