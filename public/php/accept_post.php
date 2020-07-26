<?php
session_start();
include "connect.php";
$id = $_GET["id"];
$get_user_id = "SELECT * FROM `news` WHERE `news`.`id` = " . $id;

$result1 = mysqli_query($conn, $get_user_id);
while ($data = mysqli_fetch_array($result1)) {
    $user_name = $data["username"];
    $title = $data["title"];
}

$sql = "UPDATE `news` SET `allowed` = '1' WHERE `news`.`id` = " . $id;
$sql1 = "INSERT INTO `notification`(`user_id`, `title`, `done`) VALUES ('" . $user_name . "','" . $title . "','1')";


if (mysqli_query($conn, $sql)) {
    header("Location: ../../src/Admin/components-blog-posts.php");

}
if (mysqli_query($conn, $sql1)) {
    $message = 'OO';
    echo "<script type='text/javascript'>alert('$message');history.go(-1);</script>";
} else {
    $message = ' Lỗi gì đó rồi ';
    echo "<script type='text/javascript'>alert('$message');history.go(-1);</script>";
}
?>
