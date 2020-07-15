<?php
session_start();
include "connect.php";

$username = $_POST["username_admin"];
$password = $_POST["password_admin"];

$sql = "SELECT * FROM `account_admin` WHERE `username` = '" . $username . "' AND `password`= '" . $password . "' ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) == 0) {
    $message = ' Tài khoản hoặc mật khẩu không chính xác';
    echo "<script type='text/javascript'>alert('$message');history.go(-1);</script>";


} else {
    header("Location: ../../src/Admin/index.html");
}
?>
