<?php
session_start();
include "connect.php";

$username = $_POST["username"];
$password = $_POST["password"];
$title = "User";

$sql = "SELECT * FROM `account_login` WHERE `username` = '" . $username . "' AND `password`= '" . $password . "' ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) == 0) {
    $message = ' Tài khoản hoặc mật khẩu không chính xác ';
    echo "<script type='text/javascript'>alert('$message');history.go(-1);</script>";


} else {
    header("Location: ../../src/alpha/index.php");
}

?>
