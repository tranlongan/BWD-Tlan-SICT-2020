<?php
session_start();
include 'connect.php';
$search = $_GET["search"];
$sql = "SELECT * FROM `news` WHERE `category` LIKE  '%" . $search . "%' ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (!empty($result)) {
//    while ($data = mysqli_fetch_array($result)) {
//        echo '
//                <a href="" style="border-bottom: 1px solid #c2c2c2">
//                <div class="row rowOfPost"
//                     style="border-bottom: 1px solid #c2c2c2; padding-bottom: 10px;position: relative">
//
//                    <div>
//                        <div style="padding: 10px">
//                            <img class="iconAccount1" src="../public/images/picture%20home%20login/tenor.gif">
//                        </div>
//                        <div class="tfPost">
//                            <ul class="nav">
//                                <li class="nav-item itmeN_">
//                                    <a href="">
//                                        Norman
//                                    </a>
//                                </li>
//                                <li class="nav-item itmeN" style="padding-left: 32px">
//                                    @People - <a href="">Tháng 7</a>
//                                </li>
//                            </ul>
//                        </div>
//                    </div>
//                    <a href="">
//                        <div class="noteAndImgOfPost">
//                            <div>
//                                ' . $data["content"] . '
//                            </div>
//                            <div>
//                                    ' . $data["category"] . '
//                            </div>
//                            <div>
//                                <img class="imgOfPost"
//                                     src="../public/' . $data["link_image"] . '">
//                            </div>
//                        </div>
//                    </a>
//                    <div class="divHover">
//                        <ul class="nav">
//                            <li class="nav-item" style="padding-left: 70px">
//                                <a href="">
//                                    <div>
//                                        <img class="iconCmt"
//                                             src="../public/images/picture%20home%20login/icons8-speech-bubble-100.png">
//                                        1.2k
//                                    </div>
//                                </a>
//                            </li>
//                            <li class="nav-item fixItem">
//                                <a href="">
//                                    <div>
//                                        <img class="iconCmt"
//                                             src="../public/images/picture%20home%20login/icons8-heart-100.png">
//                                        1.2k
//                                    </div>
//                                </a>
//                            </li>
//                            <li class="nav-item fixItem">
//                                <a href="">
//                                    <div>
//                                        <img class="iconCmt"
//                                             src="../public/images/picture%20home%20login/icons8-level-up-50.png">
//                                    </div>
//                                </a>
//                            </li>
//                        </ul>
//                    </div>
//                </div>
//            </a>
//                        ';

//    }
    echo json_encode(array("posts" => mysqli_fetch_array($result)));
} else {
    echo 'Không có';
}
?>
