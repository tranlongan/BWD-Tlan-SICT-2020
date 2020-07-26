<?php
include "connect.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$time = "".date("His").date("dmY");
$username = "Norman";
$title = $_POST["title"];
$category = $_POST["category"];
$chooseStatus = $_POST["chooseStatus"];
$content = $_POST["content"];
echo $content;
// File upload configuration
$targetDir = "uploads/";
$allowTypes = array('jpg','png','jpeg','gif');
if (isset($_FILES['image'])) {
    if ($_FILES['image']['error'] > 0){
        echo 'File Upload Bị Lỗi';
    }
    else{
        $img_type =pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], '../img_uploads/'.$time.'.jpg');

        if (!empty($title) && !empty($category) && !empty($chooseStatus)){
            $sql = "INSERT INTO `news`(`username`, `title`, `category`,`status`, `link_image`, `allowed`,`content_post`,`temp`) VALUES ('".$username."','".$title
                ."','".$category."','".$chooseStatus."','img_uploads/$time.jpg','0','".$content."','0')";
            mysqli_query($conn,$sql);
        }
    }
}
else{
    echo 'Bạn chưa chọn file upload';
}

?>
