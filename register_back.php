<?php
require("./connect.php");

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];

$sql ="INSERT INTO `user` (`user_id`, `user_name`, `user_username`, `user_password`) VALUES (NULL, '$name', '$username', '$password');";
$result = mysqli_query($conn , $sql);
header("location: login.php");