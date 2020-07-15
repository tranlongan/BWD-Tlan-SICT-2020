<?php
include "../public/php/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>D.I.Y | Do it yourself</title>
    <style>
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    reponsive-->
    <link rel="stylesheet" href="../public/stylesheets/stylesheet_HomeLogin/responsive_HomeLogin.css">
    <!--     stylesheets-->
    <link rel="stylesheet" href="../public/stylesheets/style2.css">
    <link rel="stylesheet" href="../public/stylesheets/stylesheet_HomeLogin/styleHl.css">
    <link rel="stylesheet" href="../public/stylesheets/stylesheet_HomeLogin/form_post.css">

    <!--    slide stylesheets-->
    <link rel="stylesheet" href="../public/stylesheets/slide.css">
    <!--    set icon-->
    <link rel="stylesheet" href="../public/stylesheets/stylesheet_HomeLogin/iconHomeLogin.css">
    <link rel="stylesheet" href="../public/stylesheets/icon.css">
    <!--    set a_link-->
    <link rel="stylesheet" href="../public/stylesheets/a_link.css">
    <!--    dropdown-->
    <link rel="stylesheet" href="../public/stylesheets/cssOfDropdown.css">
    <link rel="stylesheet" href="../public/stylesheets/stylesheet_HomeLogin/dropDown.css">
    <!--    list-->
    <link rel="stylesheet" href="../public/stylesheets/list.css">
    <!--import owl.carousel-->
    <link rel="stylesheet" href="..public/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../public/owlcarousel/assets/owl.theme.default.min.css">
    <title>Home Login</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" class="preloading" onload="initialize()">
<div class="load">

    <img src="../public/images/picture%20home%20login/106633326_264158891546129_8621630981574718303_n.gif" alt="">
</div>
<!--    khởi đầu-->
<div class="container-fluid" style="display: flex;flex-direction: column;height: 100%;width: 100%">
    <!--    phần thân-->
    <div class="row rp1">
        <!--        phần của col 3-->
        <div class="col-lg-3 col2"
             style="background-color: #f1f8e9;">
            <div class="menuCol2" style="padding-top: 20px">
                <!--                iconhome-->
                <a href="">
                    <div class="divIconHome">
                        <img class="iconHome"
                             src="../public/images/picture%20icon%20gif/506491bb384d29a5-animate-bulb-by-cabaroc-dribbble.gif">
                    </div>
                </a>
                <!--                home-->
                <div class="tab">
                    <!--                home-->
                    <div class="rlCol2 rl1">
                        <a class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">
                            <div>
                                <div class="iconCol2">
                                    <img src="../public/images/picture%20home%20login/icons8-home-80.png"/>
                                </div>
                                <div id="demo3" class="lbCol2">
                                    Home
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--                bài viết của bạn-->
                    <div class="rlCol2 rl1">
                        <a href="">
                            <div>
                                <div class="iconCol2">
                                    <img src="../public/images/sticky-note.png"/>
                                </div>
                                <div id="demo3" class="lbCol2">
                                    Bài viết của bạn
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--                khám phá các dự án-->
                    <!--                Thông báo-->
                    <div class="rlCol2 rl1">
                        <a class="tablinks" onclick="openCity(event, 'Idea')">
                            <div>
                                <div class="iconCol2">
                                    <img src="../public/images/picture%20home%20login/icons8-info-squared-100.png"/>
                                </div>
                                <div id="demo3" class="lbCol2">
                                    Khám phá các ý tưởng
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--                Thông báo-->
                    <div class="rlCol2 rl1">
                        <a class="tablinks" onclick="openCity(event, 'Notifications')">
                            <div>
                                <div class="iconCol2">
                                    <img src="../public/images/picture%20home%20login/icons8-notification-50.png"/>
                                </div>
                                <div id="demo3" class="lbCol2">
                                    Thông báo
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--                Lịch sử-->
                    <div class="rlCol2 rl2">
                        <a>
                            <div class="iconCol2">
                                <img src="../public/images/history.png"/>
                            </div>
                            <div id="demo3" class="lbCol2">
                                Lịch sử
                            </div>
                        </a>
                    </div>

                    <!--                profile-->
                    <div class="rlCol2 rl2">
                        <a class="tablinks" onclick="openCity(event, 'Profile')">
                            <div class="iconCol2">
                                <img src="../public/images/picture%20home%20login/icons8-customer-50.png"/>
                            </div>
                            <div id="demo3" class="lbCol2">
                                <div class="tab">
                                    Cá nhân
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--                more-->
                    <div class="rlCol2 rl2">
                        <a href="">
                            <div class="iconCol2">
                                <img src="../public/images/picture%20home%20login/icons8-view-more-50.png"/>
                            </div>
                            <div id="demo3" class="lbCol2">
                                Nhiều hơn
                            </div>
                        </a>
                    </div>
                </div>
                <!--                btn đăng bài-->
                <div class="divBtnDangBai">
                    <button class="btn-primary btnDangBai1"
                            onclick="document.getElementById('id01').style.display='block'" ; style="outline: none">
                        Đăng bài
                    </button>
                </div>


                <!--                        drop down account-->
                <div class="dropdown stDropdown">
                    <button class="dropbtn_a" onclick="myFunction1()" style="outline: none">
                        <img class="iconLogin dropbtn1"
                             src="../public/images/picture%20home%20login/tenor.gif">
                        <div class="psLbAcount">
                            Norman
                            <p style="color: #AAAAAA">@People</p>
                        </div>
                    </button>
                    <div id="myDropdown1" class="dropdown-content1">
                        <div>
                            <table class="table table-borderless tbDrp1">
                                <tr>
                                    <td style="width: 25%">
                                        <img class="iconLogin_1"
                                             src="../public/images/picture%20home%20login/tenor.gif">
                                    </td>
                                    <td>
                                        Norman
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <hr style="padding: 0; margin: 0"/>
                        <a href="" class="aaa_x">
                            <div class="ps_iconUser_x">
                                <div>
                                    <img class="iconLogOut"
                                         src="../public/images/picture%20home%20login/settings.png">
                                </div>
                                <div class="lb_Setting">
                                    Quản lý tài khoản
                                </div>
                            </div>
                        </a>
                        <a href="../index.html" class="aaa">
                            <div class="ps_iconUser">
                                <div>
                                    <img class="iconLogOut"
                                         src="../public/images/picture%20home%20login/out.png">
                                </div>
                                <div class="lb_LogOut">
                                    Đăng xuất
                                </div>
                            </div>
                        </a>
                        <hr style="padding: 0; margin: 0"/>
                        <a href="">
                            <div>
                                aaaaaaaaaaaaaa
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--        phần của col 5-->
        <div class="col-lg-5 col5"
             style="background-color: #f1f8e9;z-index: 1;border: 1px solid #c2c2c2; max-height: inherit;height: 100%">
            <div class="row divTrangChu">
                <a href="">
                    Trang chủ
                </a>
            </div>

            <!--            phần đăng bài-->
            <div id="London" class="tabcontent">
                <div class="row divDangBai">
                    <a href="">
                        <div style="padding: 10px;">
                            <img class="iconAccount1" src="../public/images/picture%20home%20login/tenor.gif">
                        </div>
                    </a>
                    <input class="inpSearch" type="text" placeholder="Bạn có ý tưởng gì??" style="border: 0"/>
                </div>
                <div class="row divDangBai1">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="" data-toggle="tooltip" title="Ảnh">
                                <img class="iconPost"
                                     src="../public/images/picture%20home%20login/icons8-full-image-100.png">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="tooltip" title="Video">
                                <img class="iconPost"
                                     src="../public/images/picture%20home%20login/icons8-video-playlist-100.png">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="tooltip" title="Thảo luận">
                                <img class="iconPost"
                                     src="../public/images/picture%20home%20login/icons8-questions-80.png">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="tooltip" title="Biểu cảm">
                                <img class="iconPost"
                                     src="../public/images/picture%20home%20login/icons8-happy-100.png">
                            </a>
                        </li>
                        <li class="nav-item last_Item">
                            <div class="divBtn">
                                <button class="btnDangBai btn-primary"
                                        onclick="document.getElementById('id01').style.display='block'"
                                        style="outline: none">
                                    Đăng bài
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--            hết phần đăng bài-->

                <!--                bài đăng của admin-->
                <a class="hoverA" href="" style="border-bottom: 1px solid #c2c2c2">
                    <div class="row rowOfPost"
                         style="border-bottom: 1px solid #c2c2c2; padding-bottom: 10px;position: relative">
                        <div>
                            <div style="padding: 10px">
                                <img class="iconAccount1"
                                     src="../public/images/picture%20home%20login/icons8-google-home-64.png">
                            </div>
                            <div class="tfPost">
                                <ul class="nav">
                                    <li class="nav-item itmeN_">
                                        <a href="">
                                            Admin A
                                        </a>
                                        <img class="iconAcept"
                                             src="../public/images/picture%20home%20login/icons8-instagram-check-mark-100%20(1).png">
                                    </li>
                                    <li class="nav-item itmeN" style="padding-left:32px; ">
                                        @Admin A - <a href="">Tháng 7</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="">
                            <div class="noteAndImgOfPost">
                                <div>
                                    Ý tưởng hàng rào cây cho không gian nhỏ
                                </div>
                                <div>
                                    #Xây dựng
                                </div>
                                <div>
                                    <img class="imgOfPost"
                                         src="../public/images/picture%20home%20login/the-most-ingenious-vertical-garden-ideas-for-small-spaces.jpg">
                                </div>
                            </div>
                        </a>
                        <div class="divHover">
                            <ul class="nav">
                                <li class="nav-item" style="padding-left: 70px">
                                    <a href="">
                                        <div>
                                            <img class="iconCmt"
                                                 src="../public/images/picture%20home%20login/icons8-speech-bubble-100.png">
                                            1.2k
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item fixItem">
                                    <a href="">
                                        <div>
                                            <img class="iconCmt"
                                                 src="../public/images/picture%20home%20login/icons8-heart-100.png">
                                            1.2k
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item fixItem">
                                    <!--                        drop down account-->
                                    <div class="dropdown1">
                                        <button class="dropbtn_b" onclick="myFunction2()" style="outline: none">
                                            <img class="iconCmt dropbtn2"
                                                 src="../public/images/picture%20home%20login/icons8-level-up-50.png">
                                        </button>
                                        <div id="myDropdown2" class="dropdown-content2">

                                            <hr style="padding: 0; margin: 0"/>
                                            <a href="" class="aaa_x">
                                                <div class="ps_iconUser_x">
                                                    <div>
                                                        <img class="iconLogOut"
                                                             src="../public/images/picture%20home%20login/icons8-share-160.png">
                                                    </div>
                                                    <div class="lb_Setting1">
                                                        Chia sẻ
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="../index.html" class="aaa">
                                                <div class="ps_iconUser">
                                                    <div>
                                                        <img class="iconLogOut"
                                                             src="../public/images/picture%20home%20login/out.png">
                                                    </div>
                                                    <div class="lb_LogOut1">
                                                        Tôi không muốn thấy tin tức này nữa
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>

                <!--                bài đăng 1-->
                <div id="posts">
                    <?php
                    $sql = " SELECT * FROM `news` ";
                    $result = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($result)) {
                        echo '
                        <a href="" style="border-bottom: 1px solid #c2c2c2">
                <div class="row rowOfPost"
                     style="border-bottom: 1px solid #c2c2c2; padding-bottom: 10px;position: relative">

                    <div>
                        <div style="padding: 10px">
                            <img class="iconAccount1" src="../public/images/picture%20home%20login/tenor.gif">
                        </div>
                        <div class="tfPost">
                            <ul class="nav">
                                <li class="nav-item itmeN_">
                                    <a href="">
                                        Norman
                                    </a>
                                </li>
                                <li class="nav-item itmeN" style="padding-left: 32px">
                                    @People - <a href="">Tháng 7</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="">
                        <div class="noteAndImgOfPost">
                            <div>
                                ' . $data["content"] . '
                            </div>
                            <div>
                                    ' . $data["category"] . '
                            </div>
                            <div>
                                <img class="imgOfPost"
                                     src="../public/' . $data["link_image"] . '">
                            </div>
                        </div>
                    </a>
                    <div class="divHover">
                        <ul class="nav">
                            <li class="nav-item" style="padding-left: 70px">
                                <a href="">
                                    <div>
                                        <img class="iconCmt"
                                             src="../public/images/picture%20home%20login/icons8-speech-bubble-100.png">
                                        1.2k
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item fixItem">
                                <a href="">
                                    <div>
                                        <img class="iconCmt"
                                             src="../public/images/picture%20home%20login/icons8-heart-100.png">
                                        1.2k
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item fixItem">
                                <a href="">
                                    <div>
                                        <img class="iconCmt"
                                             src="../public/images/picture%20home%20login/icons8-level-up-50.png">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </a>
                        ';
                    }
                    ?>
                </div>

                <!--                bài đăng 4-->
                <a href="" style="border-bottom: 1px solid #c2c2c2">
                    <div class="row rowOfPost"
                         style="border-bottom: 1px solid #c2c2c2; padding-bottom: 10px;position: relative">

                        <div>
                            <div style="padding: 10px">
                                <img class="iconAccount1" src="../public/images/picture%20home%20login/tenor%20(4).gif">
                            </div>
                            <div class="tfPost">
                                <ul class="nav">
                                    <li class="nav-item itmeN_">
                                        <a href="">
                                            People 3
                                        </a>
                                    </li>
                                    <li class="nav-item itmeN" style="padding-left: 32px">
                                        @People - <a href="">Tháng 7</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="">
                            <div class="noteAndImgOfPost">
                                <div>
                                    Video quảng cáo
                                </div>
                                <div>
                                    <video class="imgOfPost" controls="1">
                                        <source src="../public/images/video/otiv-tvc-quang-cao-10s.mp4" autoplay="false"
                                                type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </a>
                        <div class="divHover">
                            <ul class="nav">
                                <li class="nav-item" style="padding-left: 70px">
                                    <a href="">
                                        <div>
                                            <img class="iconCmt"
                                                 src="../public/images/picture%20home%20login/icons8-speech-bubble-100.png">
                                            1.2k
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item fixItem">
                                    <a href="">
                                        <div>
                                            <img class="iconCmt"
                                                 src="../public/images/picture%20home%20login/icons8-heart-100.png">
                                            1.2k
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item fixItem">
                                    <a href="">
                                        <div>
                                            <img class="iconCmt"
                                                 src="../public/images/picture%20home%20login/icons8-level-up-50.png">
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>

            </div>
            <!--    form profile-->
            <div id="Profile" class="tabcontent" style="margin-top: 64px;height: 670px;position: relative">
                <div class="divProfile">
                    <div style="background-color: #818182; height: 160px; padding: 0"></div>
                    <img class="iconPrf"
                         src="../public/images/picture%20home%20login/tenor.gif">
                    <div style="padding-top: 75px;padding-bottom: 16px;">
                        <font style="font-size: 28px; font-weight: bolder">Norman</font>
                        <div class="tfPrf">@ People</div>
                        <div class="tfPrf"> Đã tham gia tháng 7 năm 2020</div>
                    </div>

                    <div class="btnPrf">
                        <button type="submit">
                            Chỉnh hồ sơ
                        </button>
                    </div>

                    <nav class="nav listPrf" style="border-bottom: 1px solid #AAAAAA">
                        <li class="nav-item">
                            <div>
                                <a href="" class="nav-link">Theo dõi</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div>
                                <a href="" class="nav-link">Bài đăng</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div>
                                <a href="" class="nav-link">Like</a>
                            </div>
                        </li>
                    </nav>
                    <div style="font-size: 20px; font-weight: bolder;border-bottom: 1px solid #AAAAAA; padding: 8px">
                        Bạn đang theo dõi
                    </div>
                    <a href="">
                        <div style="padding: 16px;position: relative;border-bottom: 1px solid #AAAAAA">
                            <div>
                                <img class="iconAcPrf" src="../public/images/picture%20home%20login/tenor%20(2).gif">
                            </div>
                            <div class="tfAcPrf">
                                <a href="">People1</a>
                                <div>
                                    @Pl1
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div style="padding: 16px;position: relative;border-bottom: 1px solid #AAAAAA">
                            <div>
                                <img class="iconAcPrf" src="../public/images/picture%20home%20login/tenor%20(3).gif">
                            </div>
                            <div class="tfAcPrf">
                                <a href="">People2</a>
                                <div>
                                    @Pl2
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div style="padding: 16px;position: relative;border-bottom: 1px solid #AAAAAA">
                            <div>
                                <img class="iconAcPrf" src="../public/images/picture%20home%20login/tenor%20(4).gif">
                            </div>
                            <div class="tfAcPrf">
                                <a href="">People3</a>
                                <div>
                                    @Pl3
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--            form notifications-->
            <!--    form Notification-->
            <div id="Notifications" class="tabcontent" style="margin-top: 64px;height: 670px;position: relative">
                <div style="font-weight: bolder">
                    Thông báo
                </div>
                <nav class="nav listNtf" style="border-bottom: 1px solid #AAAAAA">
                    <li class="nav-item">
                        <div>
                            <a class="nav-link">
                                All
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div>
                            <a class="nav-link">
                                Đề cập
                            </a>
                        </div>
                    </li>
                </nav>
                <div style="text-align: center; padding-top: 32px">
                    Nothing to see here — yet<br/>
                    When someone mentions you, you’ll find it here.
                </div>
            </div>
            <!--            form idea-->
            <div id="Idea" class="tabcontent" style="margin-top: 64px;height: 100%;position: relative">
                <div class="div_imgOfIdea">
                    <img class="imgOfIdea" src="../public/images/picture%20home%20login/file-20200612-93521-lbqvzj.jpg">
                </div>
                <div style="font-weight: bolder; padding: 16px 0 8px 0; border-bottom: 1px solid #c2c2c2">
                    Khám phá các ý tưởng
                </div>
                <div class="cntOfIdea moreBox1">
                    <a href="">
                        <div style="padding: 8px 0 8px 0; border-bottom: 1px solid #c2c2c2">
                            <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                            <font>#Xây dựng</font><br/>
                            <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                        </div>
                    </a>

                    <a href="">
                        <div style="padding: 8px 0 8px 0; border-bottom: 1px solid #c2c2c2">
                            <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                            <font>#Sơn</font><br/>
                            <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                        </div>
                    </a>

                    <a href="">
                        <div style="padding: 8px 0 8px 0; border-bottom: 1px solid #c2c2c2">
                            <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                            <font>#Sửa chữa</font><br/>
                            <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                        </div>
                    </a>

                    <div style="padding: 0">
                        <a id="loadMore1">Hiển thị thêm</a>
                    </div>
                </div>

                <div class="cntOfIdea moreBox1 blogBox1" style="display: none">
                    <a href="">
                        <div style="padding: 8px 0 8px 0; border-bottom: 1px solid #c2c2c2">
                            <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                            <font>#Trang trí</font><br/>
                            <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                        </div>
                    </a>

                    <a href="">
                        <div style="padding: 8px 0 8px 0; border-bottom: 1px solid #c2c2c2">
                            <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                            <font>#Lau dọn</font><br/>
                            <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                        </div>
                    </a>

                    <a href="">
                        <div style="padding: 8px 0 8px 0; border-bottom: 1px solid #c2c2c2">
                            <font style="color: #AAAAAA;font-size: 12px">Chủ đề đang hot</font><br/>
                            <font>#Trồng trọt</font><br/>
                            <font style="color: #AAAAAA;font-size: 12px">1.0N View</font>
                        </div>
                    </a>

                    <div style="padding: 0">
                        <a id="loadMore1">Hiển thị thêm</a>
                    </div>
                </div>
            </div>
            <!--        kết thúc col 5-->
        </div>
        <!--        phần của col4-->
        <div class="col-lg-4 col5_1" style="background-color: #f5f5f5;z-index: 1">
            <div class="divInpSearch">
                <form action="../public/php/search_news.php" method="post"
                      enctype="multipart/form-data">
                    <input id="searchBox" class="inpSearch1" name="search" type="search" placeholder="`Tìm kiếm trên D.I.Y"
                           required="required"/>
                    <div class="divIconSearch">
                        <img class="iconSearch" src="../public/images/picture%20home%20login/icons8-search-50.png">
                    </div>
                    <button type="submit" style="border: 0"></button>
                </form>
            </div>

            <div class="divTable" ; style="border: 1px solid #c2c2c2; padding: 8px; border-radius: 16px">
                <div>
                    Xu hướng cho bạn
                    <div class="divIconSetting">
                        <a href="" style="padding: 10px">
                            <img class="iconSetting"
                                 src="../public/images/picture%20home%20login/icons8-settings-50.png">
                        </a>
                    </div>
                </div>
                <hr/>
                <div class="moreBox" style="padding: 0">
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
                <div class="moreBox blogBox" style="padding: 0;display: none">
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
            <div class="divLastCnt">
                <nav class="nav">
                    <li class="nav-item"><a href="" class="nav-link">Điều kiện</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Chính sách bảo mật</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Cookie</a></li>
                </nav>
                <nav class="nav">
                    <li class="nav-item"><a href="" class="nav-link">Thông tin quảng cáo</a></li>
                    <li class="nav-item"><a href="" class="nav-link">More</a></li>
                    <li class="nav-item"><a href="" class="nav-link">@@@</a></li>
                </nav>
            </div>

        </div>

        <!--        kết thúc phần thân-->
    </div>

    <!-- form đăng bài -->
    <div id="id01" class="modal">
        <form id="loginbox" class="modal-content animate" action="../public/php/upload_news.php" method="POST"
              enctype="multipart/form-data">
            <div style="padding: 50px">
                <div>
                    <div style="margin-top: 16px ; margin-bottom: 16px">
                        <input type="textarea" placeholder="Content" name="content" required="required"
                               style="width: 500px; height: 100px">
                        <input type="textarea" placeholder="Category" name="category" required="required"
                               style="width: 500px; height: 100px">
                    </div>
                </div>
                <div>
                    <label for="myfile">Chọn ảnh:</label>
                    <input type="file" id="myfile" name="image" multiple><br><br>
                    <button type="submit">
                        Đăng bài
                    </button>
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                          title="Close Modal">&times;</span>
                </div>
            </div>
        </form>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/popper.js/dist/popper.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../public/owlcarousel/owl.carousel.min.js"></script>
<!--import icon-->
<script src="https://kit.fontawesome.com/2fe833f814.js" crossorigin="anonymous"></script>
<!--Dropdown btn js-->
<script src="../public/js/btnDropdown.js"></script>
<script src="../public/js/btnDropdown_1.js"></script>
<script src="../public/js/btnDropdown_2.js"></script>
<script src="../public/js/btnDropdown_3.js.js"></script>
<script src="../public/js/loadMore.js"></script>
<script>
    $(window).on('load', function (event) {
        $('body').removeClass('preloading');
        $('.load').delay(3000).fadeOut('fast');
    });
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
    function openCity(evt, cityName) {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
</body>
</html>