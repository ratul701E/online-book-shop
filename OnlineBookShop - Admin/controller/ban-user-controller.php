<?php
require_once '../model/user-model.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../view/sign-in.php");
    exit();
}

//validation

$user_id = $_GET['user_id'];
ban_user($user_id);
header('location: ../view/manage-managers.php');

?>
