<?php
session_start();
include "connect.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$time = "".date("His").date("dmY");
$title = "Norman";
$content = $_POST["content"];
$category = $_POST["category"];
if (isset($_FILES['image'])) {
    if ($_FILES['image']['error'] > 0){
        echo 'File Upload Bị Lỗi';
    }
    else{
        $img_type =pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], '../img_uploads/'.$time.'.jpg');

        if (!empty($content) && !empty($category)){
            $sql = "INSERT INTO `news`(`title`, `content`, `category`, `link_image`) VALUES ('".$title."','".$content
                ."','".$category."','img_uploads/$time.jpg')";
            mysqli_query($conn,$sql);
            header("Location: ../../src/Home_Login.php");
        }
    }
}
else{
    echo 'Bạn chưa chọn file upload';
}

?>
