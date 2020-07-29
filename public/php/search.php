<?php

include 'connect.php';
$text_search = $_POST["text_search"];

$sql = "SELECT * FROM `news` WHERE `category` LIKE  '%" . $text_search . "%'";
$result = mysqli_query($conn, $sql);
$arr = array();
while ($data = mysqli_fetch_assoc($result)){
    $arr[] = $data;
}
echo json_encode($arr);

