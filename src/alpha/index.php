<?php
include "../../public/php/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>D.I.Y | Do it yourself</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/icons8-light-on-16.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/formPost.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="css/sideNav.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" class="preloading" onload="initialize()">
<div class="load">
    <img src="../../public/images/picture%20home%20login/106633326_264158891546129_8621630981574718303_n.gif?"
         alt="">
</div>

<div class="container-fluid">
    <div class="row">
        <!--        col 3-->
        <div id="slide-out" class="sidenav col3 col-8 fixed-top div3 h-100 w-100"
             style="background-color: #fafafa;border-right: 1px solid #c2c2c2;overflow: auto;">
            <div class="custom-scrollbar">
                <!--            gif icon home-->
                <div class="pb-5 pt-5 divImgHome1">
                    <a href="index.php">
                        <img class="rounded-circle imgHome"
                             src="../../public/images/picture%20icon%20gif/506491bb384d29a5-animate-bulb-by-cabaroc-dribbble.gif">
                    </a>
                </div>

                <!--            list col3-->
                <nav class="nav w-100 flex-column nav-pills listNav" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                    <a class="nav-link active aImg a1" id="v-pills-home-tab"
                       data-toggle="pill" href="#v-pills-home" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-home-80.png"/>
                        <span class="tf">
                        Home
                    </span>
                    </a>

                    <a class="nav-link aImg a2" id="v-pills-myPost-tab"
                       data-toggle="pill" href="#v-pills-myPost" role="tab"
                       aria-controls="v-pills-myPost" aria-selected="false" data-toggle="tooltip"
                       title="Bài viết của bạn">
                        <img style="width: 25px; height: 25px" src="../../public/images/sticky-note.png"/>
                        <span class="tf">
                        Bài viết của bạn
                    </span>
                    </a>

                    <a class="nav-link aImg a3" id="v-pills-forIdea-tab"
                       data-toggle="pill" href="#v-pills-forIdea" role="tab"
                       aria-controls="v-pills-forIdea" aria-selected="false" data-toggle="tooltip"
                       title="Khám phá các ý tưởng">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-info-squared-100.png"/>
                        <span class="tf">
                        Khám phá các ý tưởng
                    </span>
                    </a>

                    <a class="nav-link aImg a4" id="v-pills-notification-tab"
                       data-toggle="pill" href="#v-pills-notification" role="tab"
                       aria-controls="v-pills-notification" aria-selected="false" data-toggle="tooltip"
                       title="Thông báo">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-notification-50.png"/>
                        <span class="tf">
                        Thông báo
                    </span>
                    </a>

                    <a class="nav-link aImg a5" id="v-pills-history-tab" data-toggle="pill"
                       href="#v-pills-history" role="tab"
                       aria-controls="v-pills-history" aria-selected="false" data-toggle="tooltip" title="Lịch sử">
                        <img style="width: 25px; height: 25px" src="../../public/images/history.png"/>
                        <span class="tf">
                        Lịch sử
                    </span>
                    </a>

                    <a class="nav-link aImg a6" id="v-pills-profile-tab" data-toggle="pill"
                       href="#v-pills-profile" role="tab"
                       aria-controls="v-pills-profile" aria-selected="false" data-toggle="tooltip" title="Cá nhân">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-customer-50.png"/>
                        <span class="tf">
                        Cá nhân
                    </span>
                    </a>

                    <a style="max-width: inherit; width: 100%; color: #55ACEE" class="nav-link" data-toggle="tooltip"
                       title="Nhiều hơn">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-view-more-50.png"/>
                        <span class="tf">
                        Nhiều hơn
                    </span>
                    </a>
                </nav>

                <!--            btn đăng bài-->
                <nav class="nav w-100 hdn" style="padding-bottom: 64px">
                    <li class="nav-item">
                        <button class="btn btn-primary rounded-pill" style="padding: 16px; width: 200px"
                                onclick="document.getElementById('id01').style.display='block'" ; style="outline: none">
                            Đăng bài
                        </button>
                    </li>
                </nav>

                <!--            btn đăng bài-->
                <nav class="nav w-100 hdn1" style="padding-bottom: 64px">
                    <li class="nav-item">
                        <button class="btn btn-primary rounded-circle" style="padding: 16px;"
                                onclick="document.getElementById('id01').style.display='block'" ;>
                            <img class="rounded-circle imgBtn"
                                 src="../../public/images/picture%20home%20login/icons8-quill-with-ink-80.png">
                        </button>
                    </li>
                </nav>
            </div>
            <div class="sidenav-bg"></div>
        </div>

        <!--        col 3_1-->
        <div class="col-3 col3_1 fixed-top div3 h-100 scrollbar scrollbar-primary bordered-primary thin"
             style="background-color: #fafafa;border-right: 1px solid #c2c2c2;overflow: auto">
            <div class="force-overflow">
                <!--            gif icon home-->
                <div class="pb-5 pt-5 divImgHome">
                    <a href="index.php">
                        <img class="rounded-circle imgHome"
                             src="../../public/images/picture%20icon%20gif/506491bb384d29a5-animate-bulb-by-cabaroc-dribbble.gif">
                    </a>
                </div>

                <!--            list col3-->
                <nav class="nav w-100 flex-column nav-pills listNav" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                    <a class="nav-link active aImg a1" id="v-pills-home-tab"
                       data-toggle="pill" href="#v-pills-home" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-home-80.png"/>
                        <span class="tf">
                        Home
                    </span>
                    </a>

                    <a class="nav-link aImg a2" id="v-pills-myPost-tab"
                       data-toggle="pill" href="#v-pills-myPost" role="tab"
                       aria-controls="v-pills-myPost" aria-selected="false" data-toggle="tooltip"
                       title="Bài viết của bạn">
                        <img style="width: 25px; height: 25px" src="../../public/images/sticky-note.png"/>
                        <span class="tf">
                        Bài viết của bạn
                    </span>
                    </a>

                    <a class="nav-link aImg a3" id="v-pills-forIdea-tab"
                       data-toggle="pill" href="#v-pills-forIdea" role="tab"
                       aria-controls="v-pills-forIdea" aria-selected="false" data-toggle="tooltip"
                       title="Khám phá các ý tưởng">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-info-squared-100.png"/>
                        <span class="tf">
                        Khám phá các ý tưởng
                    </span>
                    </a>

                    <a class="nav-link aImg a4" id="v-pills-notification-tab"
                       data-toggle="pill" href="#v-pills-notification" role="tab"
                       aria-controls="v-pills-notification" aria-selected="false" data-toggle="tooltip"
                       title="Thông báo">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-notification-50.png"/>
                        <span class="tf">
                        Thông báo <span class="badge badge-danger ml-2"></span>
                        </span>
                    </a>

                    <a class="nav-link aImg a5" id="v-pills-history-tab" data-toggle="pill"
                       href="#v-pills-history" role="tab"
                       aria-controls="v-pills-history" aria-selected="false" data-toggle="tooltip" title="Lịch sử">
                        <img style="width: 25px; height: 25px" src="../../public/images/history.png"/>
                        <span class="tf">
                        Lịch sử
                    </span>
                    </a>

                    <a class="nav-link aImg a6" id="v-pills-profile-tab" data-toggle="pill"
                       href="#v-pills-profile" role="tab"
                       aria-controls="v-pills-profile" aria-selected="false" data-toggle="tooltip" title="Cá nhân">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-customer-50.png"/>
                        <span class="tf">
                        Cá nhân
                    </span>
                    </a>

                    <a style="max-width: inherit; width: 100%; color: #55ACEE" class="nav-link" data-toggle="tooltip"
                       title="Nhiều hơn">
                        <img style="width: 25px; height: 25px"
                             src="../../public/images/picture%20home%20login/icons8-view-more-50.png"/>
                        <span class="tf">
                        Nhiều hơn
                    </span>
                    </a>
                </nav>

                <!--            btn đăng bài-->
                <nav class="nav w-100 hdn" style="padding-bottom: 64px">
                    <li class="nav-item">
                        <button class="btn btn-primary rounded-pill" style="padding: 16px; width: 200px"
                                onclick="document.getElementById('id01').style.display='block'" ; style="outline: none">
                            Đăng bài
                        </button>
                    </li>
                </nav>

                <!--            btn đăng bài-->
                <nav class="nav w-100 hdn1" style="padding-bottom: 64px">
                    <li class="nav-item">
                        <button class="btn btn-primary rounded-circle" style="padding: 16px;"
                                onclick="document.getElementById('id01').style.display='block'" ;>
                            <img class="rounded-circle imgBtn"
                                 src="../../public/images/picture%20home%20login/icons8-quill-with-ink-80.png">
                        </button>
                    </li>
                </nav>

                <!--            btn account-->
                <div class="a dropdown" onclick="myFunction1()">
                    <div class="nav1">
                        <nav class="nav lighten-4 dropbtn1">
                            <a class="nav-link dropbtn1">
                                <img class="rounded-circle " style="border: 1px solid #c2c2c2;width: 54px;height: 54px"
                                     src="../../public/images/picture%20home%20login/tenor.gif">
                            </a>
                            <a class="nav-link dropbtn1">
                            <span class="tf">
                                Norman<br/>
                                <font style="color: #AAAAAA">@People</font>
                            </span>
                            </a>
                        </nav>
                    </div>

                    <div id="myDropdown1" class="dropdown-content1">
                        <div>
                            <table class="table table-borderless tbDrp1">
                                <tr>
                                    <td style="width: 25%">
                                        <img class="rounded-circle" style="width: 56px;height: 56px"
                                             src="../../public/images/picture%20home%20login/tenor.gif">
                                    </td>
                                    <td>
                                        Norman
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <hr style="padding: 0; margin: 0"/>
                        <a href="" class="aaa_x">
                            <nav class="nav">
                                <li class="nav-item">
                                    <img style="width: 16px;height: 16px"
                                         src="../../public/images/picture%20home%20login/settings.png">
                                </li>
                                <li class="nav-item pl-3">
                                    Quản lý tài khoản
                                </li>
                            </nav>
                        </a>

                        <a href="../../public/php/log_out.php" type="submit" class="aaa_x">
                            <nav class="nav">
                                <li class="nav-item">
                                    <img style="width: 16px;height: 16px"
                                         src="../../public/images/picture%20home%20login/out.png">
                                </li>
                                <li class="nav-item pl-3">
                                    Đăng xuất
                                </li>
                            </nav>
                        </a>
                      

                    </div>
                </div>
            </div>
        </div>

        <!--        col 5-->
        <div class="col-lg-5 col-md-9 col-xl-5 col5 offset-sm-3 h-100" style="background-color: #fafafa;padding: 0">
            <!--            navbar trang chủ-->
            <div class="offset-sm-3 fixed-top px-3 p-2"
                 style="background-color: #fafafa ;max-width: inherit;width:100%;border-bottom: 1px solid #c2c2c2">
                <a class="aHome" style="color: #1a1a1a; font-weight: bolder" href="">
                    Trang chủ
                </a>
                <div class="bg">
                    <!-- SideNav slide-out button -->
                    <a style="padding: 0;margin: 0" href="#" data-activates="slide-out"
                       class="btn btn-dark button-collapse">
                        <img style="width: 16px;height: 16px" src="../../public/images/open-menu.png">
                    </a>
                </div>
            </div>

            <!--            phần bài đăng -->
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active c" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">

                    <!--            phần đăng bài-->
                    <div style="padding-top: 32px;background-color: white;border-bottom: 8px solid #c2c2c2">
                        <nav class="nav nav-pills nav-justified">
                            <nav class="nav" style="max-width: inherit;width: 15%">
                                <li class="nav-item">
                                    <img class="w-50 rounded-circle" style="border: 1px solid #c2c2c2"
                                         src="../../public/images/picture%20home%20login/tenor.gif">
                                </li>
                            </nav>
                            <nav class="nav" style="max-width: inherit;width: 85%;padding-bottom: 15px">
                                <li class="nav-item">
                                    <input class="input-group-append w-100" style="border: 0;height: 48px;outline: none"
                                           onclick="document.getElementById('id01').style.display='block'"
                                           placeholder="Bạn có ý tưởng gì">
                                </li>
                            </nav>
                        </nav>

                        <nav class="nav">
                            <nav class="nav nav-pills nav-justified" style="max-width: inherit;width: 15%">
                                <li class="nav-item"></li>
                            </nav>
                            <nav class="nav nav1" style="max-width: inherit;width: 74%">
                                <li class="nav-item">
                                    <img class="w-25"
                                         src="../../public/images/picture%20home%20login/icons8-full-image-100.png">
                                </li>
                                <li class="nav-item">
                                    <img class="w-25"
                                         src="../../public/images/picture%20home%20login/icons8-video-playlist-100.png">
                                </li>
                                <li class="nav-item">
                                    <img class="w-25"
                                         src="../../public/images/picture%20home%20login/icons8-questions-80.png">
                                </li>
                                <li class="nav-item">
                                    <img class="w-25"
                                         src="../../public/images/picture%20home%20login/icons8-happy-100.png">
                                </li>
                            </nav>
                        </nav>
                    </div>
                    <hr/>

                    <!--                    phần bài đăng của user-->
                    <?php
                    $sql = " SELECT * FROM `news` WHERE `allowed` = '1'";
                    $result = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($result)) {
                        echo '
                        <div class="b">
                        <nav class="nav nav-pills flex-sm-row">
                            <a class="nav-link" href="#">
                                <img class="rounded-circle" style="width: 54px;height: 54px; border: 1px solid #1a1a1a"
                                     src="../../public/images/picture%20home%20login/tenor.gif">
                            </a>
                            <a class="nav-link pt-4 aName" style="color: #1a1a1a" href="#">
                                 ' . $data["username"] . '
                            </a>
                            <a class="nav-link pt-4" style="color: #818182" href="#">
                                @Admin-Tháng 7
                            </a>
                        </nav>
                        <a href="#" style="color: #1a1a1a">
                        <div class="pl-5 pr-3">
                            <div>
                                ' . $data["title"] . '
                            </div>
                            <div>
                                ' . $data["category"] . '
                            </div>
                            <div>
                                <a href="../../src/alpha/detail.php?id='.$data["id"].'">
                                    - Chi tiết
                                </a>
                            </div>
                            <div class="float-right" style="font-size: 12px">
                                ' . $data["status"] . '
                            </div>
                            <img class="rounded-lg" style="max-width: inherit;width: 100%;height: 300px "
                                 src="../../public/' . $data["link_image"] . '">
                        </div>
                         <div style="padding: 8px 0 8px 0">
                            <nav class="nav nav3 float-right" style="font-size: 11px">
                                <li class="nav-item">750 bình luận</li>
                                <li style="padding:0 16px 0 16px" class="nav-item">245 chia sẻ</li>
                            </nav>
                        </div>
                        <nav class="nav nav-pills nav-fill">
                            <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img style="width: 24px;height: 24px" src="../../public/images/picture%20home%20login/icons8-heart-100.png">
                                <span>
                                    1.2k
                                </span>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img style="width: 24px;height: 24px" src="../../public/images/picture%20home%20login/icons8-speech-bubble-100.png">
                                <span>
                                    Bình luận
                                </span>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <img style="width: 24px;height: 24px" src="../../public/images/picture%20home%20login/icons8-share-160.png">
                                <span>
                                    Chia sẻ
                                </span>
                                </a>
                            </li>
                        </nav>
                        </div>
                        </a>
                        <hr/>
                        ';
                    }
                    ?>
                </div>

                <!--                phần my post-->
                <div class="tab-pane fade pt-2" id="v-pills-myPost" role="tabpanel"
                     aria-labelledby="v-pills-myPost-tab">
                    <div>
                        <?php
                        $sql = " SELECT * FROM `news` WHERE `allowed` = '1'";
                        $result = mysqli_query($conn, $sql);
                        while ($data = mysqli_fetch_array($result)) {
                            echo '
                        <div class="b">
                        <nav class="nav nav-pills flex-sm-row">
                            <a class="nav-link" href="#">
                                <img class="rounded-circle" style="width: 54px;height: 54px; border: 1px solid #1a1a1a"
                                     src="../../public/images/picture%20home%20login/tenor.gif">
                            </a>
                            <a class="nav-link pt-4 aName" style="color: #1a1a1a" href="#">
                                 ' . $data["username"] . '
                            </a>
                            <a class="nav-link pt-4" style="color: #818182" href="#">
                                @Admin-Tháng 7
                            </a>
                        </nav>
                        <a href="#" style="color: #1a1a1a">
                        <div class="pl-5 pr-3">
                            <div>
                                ' . $data["title"] . '
                            </div>
                            <div>
                                ' . $data["category"] . '
                            </div>
                            <div>
                                <a href="../../src/alpha/detail.php?id='.$data["id"].'">
                                    - Chi tiết
                                </a>
                            </div>
                            <div class="float-right" style="font-size: 12px">
                                ' . $data["status"] . '
                            </div>
                            <img class="rounded-lg" style="max-width: inherit;width: 100%;height: 300px "
                                 src="../../public/' . $data["link_image"] . '">
                        </div>
                         <div style="padding: 8px 0 8px 0">
                            <nav class="nav nav3 float-right" style="font-size: 11px">
                                <li class="nav-item">750 bình luận</li>
                                <li style="padding:0 16px 0 16px" class="nav-item">245 chia sẻ</li>
                            </nav>
                        </div>
                        <nav class="nav nav-pills nav-fill">
                            <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img style="width: 24px;height: 24px" src="../../public/images/picture%20home%20login/icons8-heart-100.png">
                                <span>
                                    1.2k
                                </span>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img style="width: 24px;height: 24px" src="../../public/images/picture%20home%20login/icons8-speech-bubble-100.png">
                                <span>
                                    Bình luận
                                </span>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <img style="width: 24px;height: 24px" src="../../public/images/picture%20home%20login/icons8-share-160.png">
                                <span>
                                    Chia sẻ
                                </span>
                                </a>
                            </li>
                        </nav>
                        </div>
                        </a>
                        <hr style="margin: 0"/>
                        ';
                        }
                        ?>
                    </div>
                </div>

                <!--                khám phá các ý tưởng-->
                <div class="tab-pane fade pt-2" id="v-pills-forIdea" role="tabpanel"
                     aria-labelledby="v-pills-forIdea-tab">
                    <div>
                        <div>
                            <img style="max-width: inherit; width: 100%; height: auto"
                                 src="../../public/images/picture%20home%20login/file-20200612-93521-lbqvzj.jpg">
                        </div>
                        <div style="font-weight: bolder; font-size: 24px; border-bottom: 1px solid #c2c2c2">
                            Khám phá các ý tưởng
                        </div>
                        <div class="moreBox1">
                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Xây dựng</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Sơn</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Sửa chữa</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <div style="padding: 0">
                                <a id="loadMore1">Hiển thị thêm</a>
                            </div>
                        </div>

                        <div class="moreBox1 blogBox1" style="display: none">
                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Trang trí</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Lau dọn</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Trồng trọt</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Phòng ngủ</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Phòng khách</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Phòng tắm</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <a href="">
                                <div style="padding: 8px 0 8px 8px; border-bottom: 1px solid #c2c2c2">
                                    <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                                    <font>#Cầu thang</font><br/>
                                    <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                                </div>
                            </a>

                            <div style="padding: 8px 0 8px 8px">
                                <a>Hiển thị thêm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                Thông báo-->
                <div class="tab-pane fade pt-2" id="v-pills-notification" role="tabpanel"
                     aria-labelledby="v-pills-notification-tab">
                    <div class="h-100">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all"
                                   role="tab"
                                   aria-controls="nav-all" aria-selected="true">Tất cả</a>
                                <a class="nav-item nav-link" id="nav-tag-tab" data-toggle="tab" href="#nav-tag"
                                   role="tab"
                                   aria-controls="nav-profile" aria-selected="false">Đề cập</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                 aria-labelledby="nav-all-tab">
                                <?php
                                $sql = " SELECT * FROM `notification` WHERE `done`= 1";
                                $result = mysqli_query($conn, $sql);
                                while ($data = mysqli_fetch_array($result)) {
                                    echo ' <div>' . $data["user_id"] . '</div>
                                            <div>' . $data["title"] . '</div>
                                    ';
                                }
                                ?>
                                Bài viết của bạn đã được phê duyệt
                            </div>
                            <div class="tab-pane fade" id="nav-tag" role="tabpanel"
                                 aria-labelledby="nav-tag-tab">
                                <div style="text-align: center">
                                    Không có ai đề cập đến bạn cả
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                Lịch sử-->
                <div class="tab-pane fade pt-2" id="v-pills-history" role="tabpanel"
                     aria-labelledby="v-pills-history-tab">
                    Lịch sử
                </div>

                <!--                profile-->
                <div class="tab-pane fade pt-2" id="v-pills-profile" role="tabpanel"
                     aria-labelledby="v-pills-profile-tab">
                    <div>
                        <div style="background-color: #818182; height: 160px; padding: 0"></div>
                        <div class="pl-3">
                            <nav class="nav">
                                <li class="nav-item">
                                    <img class="position-absolute rounded-circle"
                                         style="width: 120px;height: 120px;top: 120px;border: 1px solid #c2c2c2"
                                         src="../../public/images/picture%20home%20login/tenor.gif">
                                    <div style="padding-top: 75px;padding-bottom: 16px;">
                                        <font style="font-size: 28px; font-weight: bolder">Norman</font>
                                        <div class="tfPrf">@ People</div>
                                        <div class="tfPrf"> Đã tham gia tháng 7 năm 2020</div>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <div class="position-relative rps">
                                        <button class="btn btn-primary rounded-pill" type="submit">
                                            Chỉnh hồ sơ
                                        </button>
                                    </div>
                                </li>
                            </nav>
                        </div>

                        <!--                        tab nav-->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home"
                                   aria-selected="true">Theo dõi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile"
                                   aria-selected="false">Lượt thích</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                   aria-controls="contact"
                                   aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!--                            bạn đang theo dõi-->
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div style="font-size: 20px; font-weight: bolder;border-bottom: 1px solid #AAAAAA; padding: 8px">
                                    Bạn đang theo dõi
                                </div>
                                <div class="d2">
                                    <nav class="nav" style="padding: 16px;border-bottom: 1px solid #AAAAAA">
                                        <li class="nav-item">
                                            <a href="">
                                                <img class="rounded-circle"
                                                     style="width: 45px;height: 45px; border: 1px solid #c2c2c2"
                                                     src="../../public/images/picture%20home%20login/tenor%20(2).gif">
                                            </a>
                                        </li>
                                        <li class="nav-item pl-3">
                                            <a href="">People1</a>
                                            <div>
                                                @Pl1
                                            </div>
                                        </li>
                                    </nav>
                                </div>

                                <div class="d2">
                                    <nav class="nav" style="padding: 16px;border-bottom: 1px solid #AAAAAA">
                                        <li class="nav-item">
                                            <a href="">
                                                <img class="rounded-circle"
                                                     style="width: 45px;height: 45px; border: 1px solid #c2c2c2"
                                                     src="../../public/images/picture%20home%20login/tenor%20(3).gif">
                                            </a>
                                        </li>
                                        <li class="nav-item pl-3">
                                            <a href="">People2</a>
                                            <div>
                                                @Pl2
                                            </div>
                                        </li>
                                    </nav>
                                </div>

                                <div class="d2">
                                    <nav class="nav" style="padding: 16px;border-bottom: 1px solid #AAAAAA">
                                        <li class="nav-item">
                                            <a href="">
                                                <img class="rounded-circle"
                                                     style="width: 45px;height: 45px; border: 1px solid #c2c2c2"
                                                     src="../../public/images/picture%20home%20login/tenor%20(4).gif">
                                            </a>
                                        </li>
                                        <li class="nav-item pl-3">
                                            <a href="">People3</a>
                                            <div>
                                                @Pl3
                                            </div>
                                        </li>
                                    </nav>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div style="text-align: center">
                                    <font style="font-weight: bolder">Bạn không có bất kỳ lượt thích nào</font><br/>
                                    Nhấn trái tim trên bất kỳ D.I.Y nào để thể hiện sự yêu thích. Khi bạn làm vậy, trái
                                    tim sẽ hiển thị ở đây.
                                </div>
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!--        col 4-->
        <div class="col-md-4 col4 fixed-top offset-8 h-100 scrollbar scrollbar-primary bordered-primary thin"
             style="background-color: #fafafa ;border-left: 1px solid #c2c2c2;overflow: auto">
            <div class="force-overflow">
                <form action="../../public/php/search_news.php" method="post"
                      enctype="multipart/form-data">
                    <div class="input-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text cyan lighten-2" id="basic-text1">
                                    <i class="fas fa-search text-white" aria-hidden="true"></i>
                                </span>
                        </div>
                        <input class="form-control my-0 py-1" name="search" type="text"
                               placeholder="Tìm kiếm trên D.I.Y" aria-label="Search">
                    </div>
                    <button type="submit" style="border: 0; opacity: 0"></button>
                </form>

                <div style="border: 1px solid #c2c2c2; border-radius: 16px;background-color: rgba(76, 175, 80, 0.1)">
                    <div class="p-2" style="font-size: 20px;font-weight: 900">
                        Xu hướng cho bạn
                        <span style="float: right">
                        <a href="">
                            <img style="width: 28px;height: 28px"
                                 src="../../public/images/picture%20home%20login/icons8-settings-50.png">
                        </a>
                    </span>
                    </div>
                    <hr style="margin: 0"/>
                    <div class="moreBox">
                        <a href="">
                            <div>
                                Văn phòng tại nhà<br/>
                                <b>#Phòng & Không gian</b>
                            </div>
                            <hr/>
                        </a>
                        <a href="">
                            <div>
                                Xây dựng<br/>
                                <b>#Làm thế nào</b>
                            </div>
                            <hr/>
                        </a>
                        <a href="">
                            <div>
                                Cầu thang<br/>
                                <b>#Phòng và không gian</b>
                            </div>
                            <hr/>
                        </a>
                        <a href="">
                            <div>
                                Dọn dẹp<br/>
                                <b>#làm thế nào</b>
                            </div>
                            <hr/>
                        </a>
                        <a id="loadMore">
                            <div>
                                Xem thêm
                            </div>
                        </a>
                    </div>
                    <div class="moreBox blogBox" style="display: none">
                        <a href="">
                            <div>
                                Văn phòng tại nhà<br/>
                                <b>#Phòng & Không gian</b>
                            </div>
                            <hr/>
                        </a>
                        <a href="">
                            <div>
                                Xây dựng<br/>
                                <b>#Làm thế nào</b>
                            </div>
                            <hr/>
                        </a>
                        <a href="">
                            <div>
                                Cầu thang<br/>
                                <b>#Phòng và không gian</b>
                            </div>
                            <hr/>
                        </a>
                        <a href="">
                            <div>
                                Dọn dẹp<br/>
                                <b>#làm thế nào</b>
                            </div>
                            <hr/>
                        </a>
                        <a id="loadMore">
                            <div>
                                Xem thêm
                            </div>
                        </a>
                    </div>
                </div>

                <div class="mt-3"
                     style="border: 1px solid #c2c2c2; border-radius: 16px;background-color: rgba(76, 175, 80, 0.1)">
                    <div class="p-2" style="font-size: 20px; font-weight: 900">
                        Những người khác cũng theo dõi
                    </div>
                    <hr style="margin: 0"/>
                    <div class="moreBox2">
                        <a href="">
                            <nav class="nav p-2">
                                <li class="nav-item pl-3">
                                    <img class="rounded-circle"
                                         style="width: 56px;height: 56px; border: 1px solid #c2c2c2"
                                         src="../../public/images/picture%20home%20login/tenor%20(4).gif">
                                </li>
                                <li class="nav-item p-1">
                                    People 4<br/>
                                    <font style="color: #818182">@People4</font>
                                </li>
                                <li class="nav-item; pl-5">
                                    <button class="btn btn-primary rounded-pill">Theo dõi</button>
                                </li>
                            </nav>
                            <hr/>
                        </a>

                        <a href="">
                            <nav class="nav p-2">
                                <li class="nav-item pl-3">
                                    <img class="rounded-circle"
                                         style="width: 56px;height: 56px; border: 1px solid #c2c2c2"
                                         src="../../public/images/picture%20home%20login/tenor%20(4).gif">
                                </li>
                                <li class="nav-item p-1">
                                    People 4<br/>
                                    <font style="color: #818182">@People4</font>
                                </li>
                                <li class="nav-item; pl-5">
                                    <button class="btn btn-primary rounded-pill">Theo dõi</button>
                                </li>
                            </nav>
                            <hr/>
                        </a>

                        <a id="loadMore2">
                            <div class="pl-4 pb-2">
                                Xem thêm
                            </div>
                        </a>
                    </div>
                    <div class="moreBox2 blogBox2" style="display: none">
                        <a href="">
                            <nav class="nav p-2">
                                <li class="nav-item pl-3">
                                    <img class="rounded-circle"
                                         style="width: 56px;height: 56px; border: 1px solid #c2c2c2"
                                         src="../../public/images/picture%20home%20login/tenor%20(4).gif">
                                </li>
                                <li class="nav-item p-1">
                                    People 4<br/>
                                    <font style="color: #818182">@People4</font>
                                </li>
                                <li class="nav-item; pl-5">
                                    <button class="btn btn-primary rounded-pill">Theo dõi</button>
                                </li>
                            </nav>
                            <hr/>
                        </a>

                        <a href="">
                            <nav class="nav p-2">
                                <li class="nav-item pl-3">
                                    <img class="rounded-circle"
                                         style="width: 56px;height: 56px; border: 1px solid #c2c2c2"
                                         src="../../public/images/picture%20home%20login/tenor%20(4).gif">
                                </li>
                                <li class="nav-item p-1">
                                    People 4<br/>
                                    <font style="color: #818182">@People4</font>
                                </li>
                                <li class="nav-item; pl-5">
                                    <button class="btn btn-primary rounded-pill">Theo dõi</button>
                                </li>
                            </nav>
                            <hr/>
                        </a>

                        <a id="loadMore2">
                            <div class="pl-4 pb-2">
                                Xem thêm
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- form đăng bài -->
    <div id="id01" class="modal">
        <form id="loginbox" class="modal-content animate" action="../../public/php/upload_news.php" method="POST"
              enctype="multipart/form-data">
            <div style="padding: 30px">

                <div style="margin-top: 16px ; margin-bottom: 16px">
                    <select name="chooseStatus" class="mdb-select md-form colorful-select dropdown-primary">
                        <option value="15" disabled selected>Lựa chọn tình trạng</option>
                        <option value="Đề xuất ý tưởng">-Đề xuất ý tưởng</option>
                        <option value="Cần tư vấn">-Cần tư vấn</option>
                    </select>
                    <label class="mdb-main-label">Tình trạng</label>

                    <div class="md-form">
                            <textarea name="title" id="textarea-char-counter" class="form-control md-textarea"
                                      length="324" rows="1"></textarea>
                        <label for="textarea-char-counter">Nhập nội dung</label>
                    </div>

                    <div class="md-form">
                        <input name="category" id="input-char-counter" type="text" length="124"
                               class="form-control">
                        <label for="input-char-counter">Thể loại</label>
                    </div>

                </div>

                <div class="md-form" action="#">
                    <div class="file-field medium">
                        <div class="btn btn-outline-primary waves-effect float-left">
                            <span>Chọn file<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
                            <input id="myfile" name="image" type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text"
                                   style="border: 0" disabled placeholder="File vừa chọn có tên">
                        </div>
                    </div>
                </div>
                <br/>

                <button class="btn btn-primary" type="submit">
                    Đăng bài
                </button>
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                      title="Close Modal">&times;</span>
        </form>
        <form class="position-absolute" style="top: -20px">
            <button type="button" data-toggle="modal" data-target="#modalPush" class="btn btn-primary">
                Viết bài hoàn chỉnh
            </button>
        </form>
    </div>

</div>
<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Thông báo </p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

                <p>Bạn sẽ được chuyển tới 1 trang mới để làm việc!!! Bạn có muốn chuyển không?</p>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a href="post.php" class="btn btn-info">Có</a>
                <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Không</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalPush-->

</div>
<!-- End your project here-->

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="../../public/js/loadMore.js"></script>
<script>
    function myFunction1() {
        document.getElementById("myDropdown1").classList.toggle("show1");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn1')) {
            console.log("drop")
            const dropdowns = document.getElementsByClassName("dropdown-content1");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show1')) {
                    openDropdown.classList.remove('show1');
                }
            }
        }
    }

</script>
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    $(window).on('load', function (event) {
        $('body').removeClass('preloading');
        $('.load').delay(2000).fadeOut('fast');
    });
</script>
<script>
    $(document).ready(() => {
        // SideNav Button Initialization
        $(".button-collapse").sideNav();
        // SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(sideNavScrollbar);
    });
</script>
<script>
    $(document).ready(function () {
        $('.mdb-select').materialSelect();
    });
</script>
</body>
</html>
