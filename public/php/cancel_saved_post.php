<?php
session_start();
include ("connect.php");

$id = $_GET["id"];

$sql4 = "UPDATE `news` SET `saved post` = '0' WHERE `news`.`id` = " . $id;
if (mysqli_query($conn, $sql4)) {
    header("Location: ../../src/alpha/index.php");
//    echo $sql4;
} else {
    $message = ' Lỗi gì đó rồi 222222';
    echo "<script type='text/javascript'>alert('$message');history.go(-1);</script>";
}
?>