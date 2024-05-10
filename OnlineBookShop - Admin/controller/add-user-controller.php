<?php
require_once ('../model/user-model.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $address = $_POST["Address"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nid = $_POST["nid"];

    $role = $_POST['role'];

    create_user($username, $email, $password, $role, 'Active', $full_name, $nid, $address, $mobile_number);

    header('location: ../view/manage-'.strtolower($role).'s.php');
    exit();
} else {
    echo "Method not allowed.";
}
?>