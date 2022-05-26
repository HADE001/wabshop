<?php
require("./connect.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `user` WHERE `user_username` ='$username' AND `user_password` = '$password';"; 
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
if($user){
    $_SESSION['user'] = $user;
    header("Location: index.php");
} else {
    header("Location: login.php");
}