
<html>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<?php
session_start();
include 'connect.php';
$search = $_POST["search"];
$sql = "SELECT * FROM `news` WHERE `category` LIKE  '%" . $search . "%'";
$result = mysqli_query($conn, $sql);

if (!empty($result)) {
    echo '<div style="margin: 32px; border: 1px #AAAAAA">
                    <a href="../../index.php">Trang chủ</a>
                </div>';
    while ($data = mysqli_fetch_array($result)) {
        echo '
                <div class="row"
                     style="border: 1px solid #c2c2c2; padding-bottom: 10px;position: relative">
                    <div>
                    <div>
                    Được đăng bởi
                    </div>
                        <div style="padding: 10px">
                            <img style="width: 32px; height: 32px"
                            src="../images/picture%20home%20login/tenor.gif">
                        </div>
                        <div>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="">
                                        ' .$data["username"].'
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div>
                                ' . $data["title"] . '
                            </div>
                            <div>
                                    ' . $data["category"] . '
                            </div>
                            <div>
                                <img style="max-width: inherit;width: 30%;max-height: inherit;height: 40%"
                                     src="../../public/' . $data["link_image"] . '">
                            </div>
                        </div>
                    </div>
                    <div class="divHover">
                        <ul class="nav">
                            <li class="nav-item">
                                <div>
                                    <div>
                                        <img style="width: 16px; height: 16px"
                                             src="../images/picture%20home%20login/icons8-speech-bubble-100.png">
                                        1.2k
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item fixItem">
                                <div >
                                    <div>
                                        <img style="width: 16px; height: 16px"
                                             src="../images/picture%20home%20login/icons8-heart-100.png">
                                        1.2k
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                        ';
    }
} else {
    echo 'Không có';
}
?>
</div>
</body>
</html>

