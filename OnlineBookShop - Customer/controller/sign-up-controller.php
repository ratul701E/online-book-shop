<?php
require_once '../model/user-model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $address = $_POST["Address"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nid = $_POST["nid"];

    //validation

    
    create_user($username, $email, $password, 'Customer', 'Active', $full_name, $nid, $address, $mobile_number);
    
    header("Location: ../view/sign-in.php");
    exit();
}
?>
