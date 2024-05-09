<?php
require_once 'db.php';

function create_user($username, $email, $password, $role, $status, $full_name, $nid, $address, $mobile_number)
{
    $conn = conn();
    $query = "INSERT INTO users (username, email, password, role, status, full_name, nid, address, mobile_number) 
              VALUES ('$username', '$email', '$password', '$role', '$status', '$full_name', '$nid', '$address', '$mobile_number')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_user_by_id($user_id)
{
    $conn = conn();
    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $user;
}

function update_user($user_id, $username, $email, $password, $role, $status, $full_name, $nid, $post, $mobile_number)
{
    $conn = conn();
    $query = "UPDATE users SET 
              username = '$username', 
              email = '$email', 
              password = '$password', 
              role = '$role', 
              status = '$status', 
              full_name = '$full_name', 
              nid = '$nid', 
              post = '$post', 
              mobile_number = '$mobile_number'
              WHERE user_id = $user_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function delete_user($user_id)
{
    $conn = conn();
    $query = "DELETE FROM users WHERE user_id = $user_id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function get_all_users()
{
    $conn = conn();
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $users;
}
?>