<?php
session_start();
include 'connect.php';
$search = $_POST["search"];
$sql = "SELECT * FROM `news` WHERE `category` LIKE  '%" . $search . "%'";
$result = mysqli_query($conn, $sql);

if (!empty($result)) {
    while ($data = mysqli_fetch_array($result)) {
        echo '
                <div style="margin: 32px; border-bottom: 1px #AAAAAA">
                    <a href="../../src/Home_Login.php">Trang chủ</a>
                </div>
                <a href="" style="border-bottom: 1px solid #c2c2c2">
                <div class="row"
                     style="border-bottom: 1px solid #c2c2c2; padding-bottom: 10px;position: relative">
                    <div>
                        <div style="padding: 10px">
                            <img style="width: 32px; height: 32px"
                            src="../../public/images/picture%20home%20login/tenor.gif">
                        </div>
                        <div>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="">
                                        Norman
                                    </a>
                                </li>
                                <li class="nav-item" style="padding-left: 32px">
                                    @People - <a href="">Tháng 7</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="">
                        <div>
                            <div>
                                ' . $data["content"] . '
                            </div>
                            <div>
                                    ' . $data["category"] . '
                            </div>
                            <div>
                                <img style="max-width: inherit;width: 30%;max-height: inherit;height: 40%"
                                     src="../../public/' . $data["link_image"] . '">
                            </div>
                        </div>
                    </a>
                    <div class="divHover">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="">
                                    <div>
                                        <img style="width: 16px; height: 16px"
                                             src="../../public/images/picture%20home%20login/icons8-speech-bubble-100.png">
                                        1.2k
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item fixItem">
                                <a href="">
                                    <div>
                                        <img style="width: 16px; height: 16px"
                                             src="../../public/images/picture%20home%20login/icons8-heart-100.png">
                                        1.2k
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item fixItem">
                                <a href="">
                                    <div>
                                        <img style="width: 16px; height: 16px"
                                             src="../../public/images/picture%20home%20login/icons8-level-up-50.png">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </a>
                        ';

    }
} else {
    echo 'Không có';
}
?>
