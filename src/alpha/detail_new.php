<?php
include "../../public/php/connect.php";
$id = $_GET["id"];
$sql = "SELECT * FROM `news` WHERE `news`.`id`=".$id;
$result = mysqli_query($conn, $sql);

$arr = array();
while ($data = mysqli_fetch_assoc($result)) {
    $arr[] = $data;
}
echo json_encode($arr);