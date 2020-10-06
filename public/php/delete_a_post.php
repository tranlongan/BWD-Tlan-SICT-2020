<?php
session_start();
include ("connect.php");

$id = $_GET["id"];
$sql = "DELETE FROM `news` WHERE `news`.`id` = ".$id;

if(mysqli_query($conn,$sql)){
    header("Location: ../../src/alpha/index.php");
}
else{
    $message = ' Lỗi gì đó rồi ';
    echo "<script type='text/javascript'>alert('$message');history.go(-1);</script>";
}
?>
