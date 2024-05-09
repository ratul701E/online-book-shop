<?php
require_once '../model/user-model.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../view/sign-in.php");
    exit();
}

//validation

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_SESSION['user'];
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $username = $_POST["username"];
    $nid = $_POST["nid"];

    update_user($user['user_id'], $username, $email, $user['password'], $user['role'], 'Active', $full_name, $nid, $user['address'], $mobile_number);

       header("Location: ../view/edit-profile-info.php?status=7");
    exit();
}
?>
