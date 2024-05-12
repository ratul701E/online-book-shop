<?php
require_once '../model/user-model.php';
session_start();

// if (!isset($_SESSION['user'])) {
//     header("Location: ../view/sign-in.php");
//     exit();
// }

//validation

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["full_name"]) || empty($_POST["email"]) || empty($_POST["mobile_number"]) || empty($_POST["username"]) || empty($_POST["nid"])) {
        header("Location: ../view/update-information.php?status=2");
        exit();
    }
    $user = get_user_by_id($_POST['user_id']);
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $username = $_POST["username"];
    $nid = $_POST["nid"];

    update_user($user['user_id'], $username, $email, $user['password'], $user['role'], 'Active', $full_name, $nid, $user['address'], $mobile_number);
    $user = get_user_by_username($username);
    $_SESSION['user'] = $user;
    header("Location: ../view/update-information.php?user_id=".$user['user_id']."&status=7");
    exit();
}
?>