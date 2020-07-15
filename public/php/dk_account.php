<?php
session_start();
include "connect.php";

$dk_username = $_POST["dk_username"];
$nameAccount = $_POST["nameAccount"];
$dk_password = $_POST["dk_password"];
$title = "User";

if(!empty($dk_username)&&!empty($dk_password)){
   $sql = "INSERT INTO `account_login`(`username`,`nameAccount`, `password`, `title`) VALUES ('".$dk_username." ','".$nameAccount
       ." ','".$dk_password."','".$title."')";
    mysqli_query($conn,$sql);
    $message = ' Đăng ký thành công, bạn có thể đăng nhập ';
    echo "<script type='text/javascript'>alert('$message');history.go(-1);</script>";
}
?>
