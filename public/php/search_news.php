<?php

include 'connect.php';

$sql = "SELECT * FROM `news` WHERE `allowed` ='1'";
$result = mysqli_query($conn, $sql);
$arr = array();
while ($data = mysqli_fetch_assoc($result)){
    $arr[] = $data;
}
echo json_encode($arr);

