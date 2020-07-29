<?php
session_start();
include 'connect.php';
$search = $_POST["search"];
$sql = "SELECT * FROM `news` WHERE `category` LIKE  '%" . $search . "%'";
$result = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_assoc($result)){
    $get_tile = $data["tile"];
    $get_category = $data["category"];

}
?>
