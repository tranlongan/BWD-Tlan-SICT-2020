<?php
include "connect.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$content = $_POST["content"];

mysqli_query($conn, "UPDATE `news` SET `content_post` = '".$content."' AND `temp` = '0' WHERE `temp` = '1'");