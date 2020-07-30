<?php
session_start();
require_once "public/php/check_login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>D.I.Y</title>
    <style>
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    reponsive-->
    <link rel="stylesheet" href="public/stylesheets/reponsive.css">
    <!--     stylesheets-->
    <link rel="stylesheet" href="./public/stylesheets/style2.css">
    <link rel="stylesheet" href="./public/stylesheets/stysheet_Login/123.css">
    <!--    slide stylesheets-->
    <link rel="stylesheet" href="./public/stylesheets/slide.css">
    <!--    set icon-->
    <link rel="stylesheet" href="./public/stylesheets/icon.css">
    <!--    set a_link-->
    <link rel="stylesheet" href="./public/stylesheets/a_link.css">
    <!--    dropdown-->
    <link rel="stylesheet" href="./public/stylesheets/cssOfDropdown.css">
    <!--    list-->
    <link rel="stylesheet" href="./public/stylesheets/list.css">
    <!--import owl.carousel-->
    <link rel="stylesheet" href="./public/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/owlcarousel/assets/owl.theme.default.min.css">
    <title>Home</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!--    khởi đầu-->
<div class="container-fluid" style="display: flex;flex-direction: column;height: 100%;width: 100%">
    <!--    phần navBar-->
    <nav class="navbar-light fixed-top" style="background-color: #ffffff ">
        <div class="row" style="padding: 6px">
            <!--            col 12-->
            <div class="col-lg-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="" style="padding-left: 5px">
                            <img class="iconGif" src="./public/images/picture%20icon%20gif/tải%20xuống.png"/>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-left: 12px">
                        <a class="nav-link" href="">
                            <img class="iconHdn" src="public/images/forum.png"/>
                            <div class="ds">Diễn đàn D.I.Y</div>
                        </a>
                    </li>
                    <li class="nav-item"><a href="src/tv.html"><img class="iconTV"
                                                                    src="public/images/tv.png"/></a></li>
                    <li class="nav-item btn" style="padding-top: 0; padding-bottom: 0;padding-right: 0">
                        <!--                        btn dropdown-->
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn">
                                Khám phá các ý tưởng
                            </button>
                            <div id="myDropdown" class="dropdown-content">
                                <div>
                                    <a href="" class="aT"><h4>Làm thế nào để: </h4></a>
                                    <table class="table table-borderless">
                                        <tr>
                                            <td class="bx1"><a href="./src/DMuc.html">Xây dựng</a></td>
                                            <td class="bx1"><a href="#about">Sửa chữa</a></td>
                                        </tr>

                                        <tr>
                                            <td class="bx1"><a href="#contact">Sơn</a></td>
                                            <td class="bx1"><a href="#contact">Lau dọn</a></td>
                                        </tr>

                                        <tr>
                                            <td class="bx1"><a href="#contact">Thủ công</a></td>
                                            <td class="bx1"><a href="#contact">Trang trí</a></td>
                                        </tr>

                                        <tr>
                                            <td class="bx1"><a href="#contact">Trồng trọt</a></td>
                                            <td class="bx1"><a href="#contact">Organize</a></td>
                                        </tr>
                                    </table>
                                    <hr/>

                                    <a href="" class="aT"><h4>Căn phòng & Không gian</h4></a>
                                    <table class="table table-borderless">
                                        <tr>
                                            <td class="bx1"><a href="#home">Nhà bếp & Phòng ăn</a></td>
                                            <td class="bx1"><a href="#about">Lối vào</a></td>
                                        </tr>

                                        <tr>
                                            <td class="bx1"><a href="#contact">Phòng khách</a></td>
                                            <td class="bx1"><a href="#contact">Tầng thượng</a></td>
                                        </tr>

                                        <tr>
                                            <td class="bx1"><a href="#contact">Phòng ngủ</a></td>
                                            <td class="bx1"><a href="#contact">Ngoài trời</a></td>
                                        </tr>

                                        <tr>
                                            <td class="bx1"><a href="#contact">Phòng tắm</a></td>
                                            <td class="bx1"><a href="#contact">Cửa sổ & Cửa ra vào</a></td>
                                        </tr>

                                        <tr>
                                            <td class="bx1"><a href="#contact">Phòng thủ công</a></td>
                                            <td class="bx1"><a href="#contact">Nền & Trần nhà</a></td>
                                        </tr>

                                        <tr>
                                            <td class="bx1"><a href="#contact">Phòng làm việc</a></td>
                                            <td class="bx1"><a href="#contact">Cầu thang</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--                        end btn dropdown-->
                    </li>

                    <div class="divSearch">
                        <input type="search" class="setTfSearch">
                        <button type="submit" class="btn-primary setButton" style="outline: none">
                            <i class="material-icons" style="font-size: small;">search</i>
                        </button>
                    </div>

                    <div class="dkdn">
                        <button class="btnDk btn-secondary" type="submit"
                                onclick="document.getElementById('id01').style.display='block'">
                            Đăng ký
                        </button>
                        <button class="btnDn btn-info" type="submit"
                                onclick="document.getElementById('id01').style.display='block'">
                            Đăng nhập
                        </button>
                    </div>
                </ul>

            </div>
            <!--        kết thúc phần khởi đầu-->
        </div>
        <!--        kết thúc Scrollspy-->
    </nav>
    <!-- form đăng nhập -->
    <div id="id01" class="modal">
        <div id="loginbox" class="modal-content animate">
            <div class="left">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#dangnhap"
                           style="width:175px; text-align: center; font-weight:bold;">Đăng Nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#dangky"
                           style="width:175px; text-align: center; font-weight:bold;">Đăng ký</a>
                    </li>

                </ul>

                <div class="tab-content">
                    <form id="dangnhap" class="container tab-pane active" action="public/php/dn_account.php"
                          method="post" enctype="multipart/form-data">
                        <input type="text" name="username" id="user" placeholder="Tên đăng nhập" required="required">

                        <input type="password" name="password" id="pass" placeholder="Mật khẩu" required="required">
                        <a class="textsg" style="float: left; text-decoration: none;" href="">Quên mật khẩu</a>
                        <a class="textsg" style="float: right; text-decoration: none;" href="src/Admin/login.html">Đăng
                            nhập với tư cách admin</a>
                        <br>
                        <input type="submit" name="signup_submit" value="Đăng nhập">
                    </form>


                    <form id="dangky" class="container tab-pane fade" action="./public/php/dk_account.php"
                          method="post" enctype="multipart/form-data">
                        <input type="text" name="dk_username" placeholder="Tên đăng nhập" required="required">
                        <input type="text" name="nameAccount" placeholder="Tên tài khoản" required="required">
                        <input type="password" name="dk_password" placeholder="Nhập mật khẩu" required="required">
                        <input type="password" name="dk_password2" placeholder="Nhạp lại mật khẩu"
                               required="required">
                        <input type="submit" name="signup_submit" value="Đăng Ký">
                    </form>


                </div>
            </div>
            <div class="right">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                          title="Close Modal">&times;</span>

                </div>
                <span class="loginwith" style="color: white;font-weight: bolder">Sign in with<br>social network</span>
                <button class="social-signin facebook">Log in with facebook</button>
                <button class="social-signin twitter">Log in with Twitter</button>
                <button class="social-signin google">Log in with Google+</button>
            </div>
            <div class="or">OR</div>
        </div>

    </div>
    <!--kết thúc form-->
    <!--    phần thân-->
    <div class="row rp1" style="margin-top: 55px;">
        <!--        menu hiden responsive-->
        <div class="clp_hide" style="background-color: #4DC7A0">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle btn_Navbar" data-toggle="collapse"
                                data-target="#myNavbar">
                            <img class="iconMenuHdn" src="public/images/open-menu.png">
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <hr style="width: 100%"/>
                        <!--            card-->
                        <div id="demo3" style="margin: 5px">
                            <div class="card" style="margin-top: 50px">
                                <div class="card-body">
                                    <h4>Hãy tham gia cộng đồng</h4>
                                    <h3>D.I.Y</h3>
                                    Khám phá những ý tưởng sáng tạo tốt nhất ở mọi nơi<br/>
                                    <button class="btn_light" type="submit"
                                            onclick="document.getElementById('id01').style.display='block'">
                                        Tham gia ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--        phần của col 2-->
        <div class="col-lg-2 col2 col2_1" style="background-color: #c2c2c2;padding:5px 0 5px 0 ">

            <!--            card-->
            <div id="demo3" style="margin: 5px">
                <div class="card" style="margin-top: 80px">
                    <div class="card-body">
                        <h4>Hãy tham gia cộng đồng</h4>
                        <h3>D.I.Y</h3>
                        Khám phá những ý tưởng sáng tạo tốt nhất ở mọi nơi<br/>
                        <button class="btn_light">Tham gia ngay</button>
                    </div>
                </div>
            </div>

        </div>
        <!--        phần của col 10-->
        <div class="col-lg-10 col10" style="background-color: #f5f5f5;">

            <!--           phần slide-->
            <div class="sl_rps">
                <section id="slider">
                    <input type="radio" name="slider" id="s1" checked>
                    <input type="radio" name="slider" id="s2">
                    <input type="radio" name="slider" id="s3">
                    <input type="radio" name="slider" id="s4">
                    <input type="radio" name="slider" id="s5">
                    <input type="radio" name="slider" id="s6">
                    <input type="radio" name="slider" id="s7">
                    <input type="radio" name="slider" id="s8">
                    <input type="radio" name="slider" id="s9">
                    <input type="radio" name="slider" id="s10">

                    <!--                    slide 1-->
                    <label for="s1" id="slide1">
                        <img src="./public/images/slider/xaydung.jpg">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="./src/DMuc.html" class="btn-light">Xây dựng</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">
                                Bạn đang tìm kiếm sự giúp đỡ để bắt đầu một dự án xây dựng DIY? Cho dù đó là tủ,
                                cửa hay người trồng, chúng tôi có những gì bạn đang tìm kiếm.
                                Kiểm tra các bảng thảo luận, hướng dẫn bằng video,
                                trình chiếu và bộ sưu tập các dự án xây dựng hàng đầu, mới và tốt nhất.
                                Bạn sẽ tìm thấy tất cả các mẹo, hướng dẫn và hack bạn cần.
                            </div>
                        </div>
                    </label>

                    <!--                    slide 2-->
                    <label for="s2" id="slide2">
                        <img src="./public/images/slider/son.jpeg">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="" class="btn-light">Sơn</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">
                                Tìm kiếm lời khuyên về cách vẽ? Bạn đã đến đúng nơi.
                                Hãy để D.I.Y giúp bạn lập kế hoạch dự án vẽ DIY tiếp theo của bạn.
                                Chọn từ nhiều nguồn khác nhau, bao gồm bảng thảo luận, hướng dẫn bằng video,
                                trình chiếu và tổng hợp các dự án sơn hàng đầu, tốt nhất và mới.
                                Bạn thậm chí có thể hỏi cộng đồng D.I.Y một câu hỏi!
                            </div>
                        </div>
                    </label>

                    <!--                    slide 3-->
                    <label for="s3" id="slide3">
                        <img src="./public/images/slider/suachua.png">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="" class="btn-light">Sửa chữa</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">
                                Sẵn sàng để thử sửa chữa DIY?
                                Bạn đã biết rằng khi một cái gì đó trong nhà của bạn bị hỏng,
                                bạn phải tìm một thợ sửa chữa chuyên nghiệp
                                (thường rất tốn kém và có thể bao gồm thêm thời gian để chờ đợi).
                                Tại D.I.Y, chúng tôi sẽ giúp bạn với các công cụ,
                                mẹo và kỹ thuật bạn cần để đưa bạn đến với thành công sửa chữa DIY.
                            </div>
                        </div>
                    </label>

                    <!--                    slide 4-->
                    <label for="s4" id="slide4">
                        <img src="./public/images/slider/laudon.jpg">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="" class="btn-light">Lau dọn</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">
                                Bạn đã sẵn sàng để giải quyết công việc dọn dẹp trong nhà của bạn?
                                Cho dù đó là sàn nhà hay máy giặt của bạn,
                                chúng tôi luôn sẵn sàng giúp bạn hướng dẫn từng bước về chính xác cách thức và
                                những gì bạn cần làm để bắt đầu. Kiểm tra các video hướng dẫn DIY, bảng thảo luận,
                                trình chiếu và các dự án làm sạch hàng đầu của chúng tôi. Chào mừng đến với quê hương.
                                Chúc bạn dọn dẹp vui vẻ!
                            </div>
                        </div>
                    </label>

                    <!--                    slide 5-->
                    <label for="s5" id="slide5">
                        <img src="./public/images/slider/ori.jpg">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="" class="btn-light">Organize</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">
                                Bạn đã sẵn sàng để tổ chức,
                                nhưng cần một số lời khuyên về chính xác cách thức và nơi bắt đầu?
                                Chúng tôi có những gì bạn đang tìm kiếm ở đây.
                                Kiểm tra nhiều loại tổ chức nhà của chúng tôi từ tủ quần áo của bạn đến tầng hầm của bạn
                                và tất cả mọi thứ ở giữa. Hãy xem qua các video hướng dẫn DIY của chúng tôi,
                                các dự án hàng đầu, bảng thảo luận và trình chiếu.
                            </div>
                        </div>
                    </label>

                    <!--                    slide 6-->
                    <label for="s6" id="slide6">
                        <img src="./public/images/slider/nhabep.jpg">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="" class="btn-light">Nhà bếp & Phòng ăn</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">
                                Khả năng là vô tận khi thiết kế khu vực nhà bếp và phòng ăn mơ ước của bạn.
                                Cho phép D.I.Y truyền cảm hứng cho bạn!
                                Cho dù bạn yêu thích trang trại hay công nghiệp, hiện đại hay retro,
                                tại D.I.Y, chúng tôi có các mẹo, thủ thuật và kỹ thuật mà bạn đang tìm kiếm.
                                Hãy để chúng tôi giúp bạn tạo ra khu vực nhà bếp và phòng ăn hoàn hảo mà bạn luôn mong
                                muốn.
                            </div>
                        </div>
                    </label>

                    <!--                    slide 7-->
                    <label for="s7" id="slide7">
                        <img src="./public/images/slider/phongkhach.jpg">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="" class="btn-light">Phòng khách</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">

                                Phòng khách là trái tim của ngôi nhà,
                                vì vậy điều quan trọng là biến nó thành không gian mời cho cả gia đình.
                                D.I.Y có thể giúp bạn đạt được điều này.
                                Kiểm tra bảng thảo luận của chúng tôi hoặc đặt câu hỏi. Duyệt các dự án tốt nhất,
                                hàng đầu và mới nhất của chúng tôi để tìm ý tưởng mới Hoặc dành một chút thời gian
                                để xem video hướng dẫn và tìm hiểu điều gì đó mới. Thưởng thức!
                            </div>
                        </div>
                    </label>

                    <!--                    slide 8-->
                    <label for="s8" id="slide8">
                        <img src="./public/images/slider/phongngu.jpg">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="" class="btn-light">Phòng ngủ</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">

                                D.I.Y có thể giúp bạn làm cho phòng ngủ của bạn phát huy hết tiềm năng và
                                trở thành không gian bạn yêu thích. Chúng tôi đã tập hợp các dự án phòng ngủ tốt nhất,
                                hàng đầu và mới nhất trên D.I.Y. Hãy xem video và trình chiếu của chúng tôi,
                                hoặc tham gia vào cuộc trò chuyện trên bảng thảo luận phòng ngủ của chúng tôi.
                                Chúng tôi có một cái gì đó cho mọi phong cách.
                            </div>
                        </div>
                    </label>

                    <!--                    slide 9-->
                    <label for="s9" id="slide9">
                        <img src="./public/images/slider/phongtam.jpg">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="" class="btn-light">Phòng tắm</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">

                                Một phòng tắm được trang trí tốt có thể trở thành ốc đảo
                                và D.I.Y có thể giúp bạn đến đó! Hãy xem các dự án phòng tắm tốt nhất,
                                mới nhất và phổ biến nhất mà D.I.Y cung cấp.
                                Tìm hiểu một cái gì đó mới từ video và trình chiếu của chúng tôi.
                                Đặt câu hỏi hoặc tham gia vào các bảng thảo luận phổ biến của chúng tôi.
                            </div>
                        </div>
                    </label>

                    <!--                    slide 10-->
                    <label for="s10" id="slide10">
                        <img src="./public/images/slider/phonglv.jpg">
                        <!--                        phần chứa nội dung của slide-->
                        <div class="divSlide">
                            <!--                            phần review-->
                            <div class="row container">
                                <div class="col-lg-2">
                                    <i class="material-icons">batch_prediction</i>
                                </div>

                                <div class="col-lg-10">
                                    <a href="">Tốt nhất của chúng tôi</a>
                                </div>
                            </div>

                            <!--                            phần btn-->
                            <div class="container">
                                <a href="" class="btn-light">Phòng làm việc</a>
                            </div>

                            <!--                            phần nội dung-->
                            <div class="container cnt1" style="font-size: 12px">
                                Tìm kiếm những ý tưởng văn phòng tại nhà phù hợp để làm cho không gian của bạn lý tưởng
                                cho công việc? Cần một số ý tưởng để làm cho nó xảy ra?
                                Kiểm tra những gì D.I.Y cung cấp. Xem qua các dự án tốt nhất,
                                hàng đầu và mới nhất trên D.I.Y ngày hôm nay.
                                Dành một chút thời gian để xem một video hướng dẫn và tìm hiểu một số mẹo và thủ thuật
                                để làm cho văn phòng tại nhà của bạn đáp ứng nhu cầu của bạn.
                            </div>
                        </div>
                    </label>
                </section>
                <!--            kết thúc slide-->
            </div>

            <!--           phần label-->
            <div class="lb_h5">
                <h5>Những ý tưởng D.I.Y chúng tôi nghĩ bạn sẽ thích</h5>
            </div>

            <!--            phần phổ biến-->
            <div class="moreBox" style="padding-bottom: 20px">
                <ul class="list-group list-group-horizontal rp1_1">
                    <!--                col 1-->
                    <li class="list-group-item">
                        <div class="divImg">
                            <a href="">
                                <img src="public/images/picture%20of%20content%201/cnt1.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="" class="linkP2">
                                <h6> Làm thế nào để biến hộp thực phẩm thành lọ hoa</h6>
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Thủ công
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Làm thế nào
                            </a>
                        </div>
                    </li>

                    <!--                col 2-->
                    <li class="list-group-item lx ">
                        <div class="divImg">
                            <a href="">
                                <img src="public/images/picture%20of%20content%201/cnt5.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="" class="linkP2">
                                <h6> Làm thế nào để sơn sàn nhà đúng cách</h6>
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Sơn
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Làm thế nào
                            </a>
                        </div>
                    </li>

                    <!--                col 3-->
                    <li class="list-group-item lx col_rp col_rp_col3_a">
                        <div class="divImg">
                            <a href="">
                                <img src="public/images/picture%20of%20content%201/cnt3.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="" class="linkP2">
                                <h6>Trang trí phòng khách bằng cách sắp xếp ngăn nắp phần tủ đựng TV</h6>
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Nhà bếp & Phòng ăn
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Căn phòng & không gian
                            </a>
                        </div>
                    </li>

                    <!--                col 4-->
                    <li class="list-group-item lx col_rp">
                        <div class="divImg">
                            <a href="">
                                <img src="public/images/picture%20of%20content%201/cnt4.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="" class="linkP2">
                                <h6>Tạo ra không gian lưu trữ sơn</h6>
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Thủ công
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Căn phòng & không gian
                            </a>
                        </div>
                    </li>

                    <!--                kết thúc phần phổ biến-->
                </ul>
            </div>
            <!--            phần phổ biến load more-->
            <div class="blogBox moreBox loadMore_PB">
                <ul class="list-group list-group-horizontal rp1_1">
                    <!--                col 1-->
                    <li class="list-group-item">
                        <div class="divImg">
                            <a href="">
                                <img src="public/images/picture%20of%20content%201/yoga-mat-and-nail-polish-lampshade.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="" class="linkP2">
                                <h6>Thảm tập Yoga và chụp đèn sơn móng tay</h6>
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Thủ công
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Làm thế nào
                            </a>
                        </div>
                    </li>

                    <!--                col 2-->
                    <li class="list-group-item lx ">
                        <div class="divImg">
                            <a href="">
                                <img src="public/images/picture%20of%20content%201/baking-cabinet-makeover.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="" class="linkP2">
                                <h6>Tủ nướng MAKEOVER!</h6>
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Sơn
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Làm thế nào
                            </a>
                        </div>
                    </li>

                    <!--                col 3-->
                    <li class="list-group-item lx col_rp col_rp_col3_a">
                        <div class="divImg">
                            <a href="">
                                <img src="public/images/picture%20of%20content%201/s-home-office-decor.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="" class="linkP2">
                                <h6>Thiết kế rèm cửa tùy chỉnh cho DIY Home Office Decor</h6>
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Phòng làm việc
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Căn phòng & không gian
                            </a>
                        </div>
                    </li>

                    <!--                col 4-->
                    <li class="list-group-item lx col_rp">
                        <div class="divImg">
                            <a href="">
                                <img src="public/images/picture%20of%20content%201/office-wall-organization-organizing.jpg">
                            </a>
                        </div>
                        <div>
                            <a href="" class="linkP2">
                                <h6>Office Wall Organization</h6>
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Thủ công
                            </a>
                        </div>

                        <div>
                            <a href="" class="linkP2">
                                Căn phòng & không gian
                            </a>
                        </div>
                    </li>

                    <!--                kết thúc phần phổ biến-->
                </ul>
            </div>
            <!--                    mục xem thêm-->
            <div class="rp1_2" style="padding-bottom:25px">
                <div>
                    <hr class="hr0" id="hr0"/>
                    <button class="btn-light" id="loadMore">
                        Hiển thị thêm <i class="material-icons" style="font-size: 12px">expand_more</i>
                    </button>
                    <hr class="hr1" id="hr1"/>
                </div>
                <!--                kết thúc mục xem thêm-->
            </div>

            <!--            phần label-->
            <div class="lb_h5">
                <h5 class="h_a5"><a href="" class="a5">Các dự án D.I.Y</a> có nhiều lượt xem</h5>
            </div>

            <!--            phần danh mục-->
            <ul class="list-group list-group-horizontal danhMuc">
                <!--                col 1-->
                <li class="list-group-item">
                    <div class="divImg">
                        <a href="">
                            <img src="public/images/picture%20of%20content%202/cnt1.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="" class="linkP2">
                            <h5>Trang trí phòng ngủ</h5>
                        </a>
                    </div>

                    <div class="fontSize_View">
                        <a href="" class="linkP2">
                            1000 người xem
                        </a>
                    </div>

                    <div class="fontSize_btnCtn">
                        <button class="btnCtn">
                            Trang trí
                        </button>
                    </div>
                </li>

                <!--                col 2-->
                <li class="list-group-item lx">
                    <div class="divImg">
                        <a href="">
                            <img src="public/images/picture%20of%20content%202/cnt2.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="" class="linkP2">
                            <h5>Lau dọn thảm</h5>
                        </a>
                    </div>

                    <div class="fontSize_View">
                        <a href="" class="linkP2">
                            1000 người xem
                        </a>
                    </div>

                    <div class="fontSize_btnCtn">
                        <button class="btnCtn">
                            Lau dọn
                        </button>
                    </div>
                </li>

                <!--                col 3-->
                <li class="list-group-item lx">
                    <div class="divImg">
                        <a href="">
                            <img src="public/images/picture%20of%20content%202/cnt3.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="" class="linkP2">
                            <h5>Lối vào</h5>
                        </a>
                    </div>

                    <div class="fontSize_View">
                        <a href="" class="linkP2">
                            1000 người xem
                        </a>
                    </div>

                    <div class="fontSize_btnCtn">
                        <button class="btnCtn">
                            Thủ công
                        </button>
                    </div>
                </li>

                <!--                col 4-->
                <li class="list-group-item lx col_rp_col4">
                    <div class="divImg">
                        <a href="">
                            <img src="public/images/103565285_568639967055254_6792322041172748592_n.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="" class="linkP2">
                            <h5>Tùy chỉnh phòng ăn</h5>
                        </a>
                    </div>

                    <div class="fontSize_View">
                        <a href="" class="linkP2">
                            1000 người xem
                        </a>
                    </div>

                    <div class="fontSize_btnCtn">
                        <button class="btnCtn">
                            Thủ công
                        </button>
                    </div>
                </li>

                <!--                col 5-->
                <li class="list-group-item lx col_rp col_rp_col4">
                    <div class="divImg">
                        <a href="">
                            <img src="public/images/picture%20of%20content%202/cnt4.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="" class="linkP2">
                            <h5>Sàn nhà</h5>
                        </a>
                    </div>

                    <div class="fontSize_View">
                        <a href="" class="linkP2">
                            1000 người xem
                        </a>
                    </div>

                    <div class="fontSize_btnCtn">
                        <button class="btnCtn">
                            Thủ công
                        </button>
                    </div>
                </li>

                <!--                col 6-->
                <li class="list-group-item lx col_rp col_rp_col4">
                    <div class="divImg">
                        <a href="">
                            <img src="public/images/picture%20of%20content%202/cnt5.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="" class="linkP2">
                            <h5>Cửa ra vào</h5>
                        </a>
                    </div>

                    <div class="fontSize_View">
                        <a href="" class="linkP2">
                            1000 người xem
                        </a>
                    </div>

                    <div class="fontSize_btnCtn">
                        <button class="btnCtn">
                            Trang trí
                        </button>
                    </div>
                </li>

                <!--                col 7-->
                <li class="list-group-item lx col_rp col_rp_col4">
                    <div class="divImg">
                        <a href="">
                            <img src="public/images/picture%20of%20content%202/cnt6.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="" class="linkP2">
                            <h5>Cải tạo cầu thang</h5>
                        </a>
                    </div>

                    <div class="fontSize_View">
                        <a href="" class="linkP2">
                            1000 người xem
                        </a>
                    </div>

                    <div class="fontSize_btnCtn">
                        <button class="btnCtn">
                            Sửa chữa
                        </button>
                    </div>
                </li>

                <!--                col 8-->
                <li class="list-group-item lx col_rp col_rp_col4">
                    <div class="divImg">
                        <a href="">
                            <img src="public/images/picture%20of%20content%202/cnt7.jpg">
                        </a>
                    </div>
                    <div>
                        <a href="" class="linkP2">
                            <h5>Đèn led</h5>
                        </a>
                    </div>

                    <div class="fontSize_View">
                        <a href="" class="linkP2">
                            1000 người xem
                        </a>
                    </div>

                    <div class="fontSize_btnCtn">
                        <button class="btnCtn">
                            Thủ công
                        </button>
                    </div>
                </li>
                <!--                kết thúc phần danh mục-->
            </ul>

            <!--            phần gạch ngang-->
            <div>
                <hr style="width: 100%"/>
            </div>

            <!--            phần watch TV-->
            <div class="wTV">
                <!--           phần label-->
                <div class="lb_h5">
                    <h5>Xem video hướng dẫn</h5>
                </div>
                <!--                list 1-->
                <div class="moreBox1">
                    <ul class="list-group list-group-horizontal watchTV">
                        <!--                col 1-->
                        <li class="list-group-item">
                            <div class="col-lg-6">
                                <a href="">
                                    <img src="public/images/picture%20of%20content%203/diy-resin-tumbler.jpg"/>
                                </a>
                            </div>

                            <div class="infWatchTV">
                                <div class="divRp">
                                    <div class="divRp_1">
                                        <a href="" class="linkP2">
                                            <h6> Tìm hiểu cách tạo một thiết kế đại dương êm dịu trên một chiếc cốc bằng
                                                nhựa</h6>
                                        </a>
                                    </div>

                                    <div class="fontSize_View">
                                        <a href="" class="linkP2">
                                            Bạn có mơ về đại dương? Bạn muốn cảm nhận cát trong ngón chân và nước trên
                                            da?
                                            Tôi có thể mang ...
                                        </a>
                                    </div>
                                </div>
                                <hr/>
                                <div>
                                    <a href="">
                                        <img src="public/images/account.png" class="iconAccount"/>
                                        People 1
                                    </a>
                                </div>
                            </div>
                        </li>

                        <!--                col 2 -->
                        <li class="list-group-item" style="margin-left: 30px">
                            <div class="col-lg-6">
                                <a href="">
                                    <img src="public/images/picture%20of%20content%203/simple-wood-box.jpg"/>
                                </a>
                            </div>

                            <div class="infWatchTV">
                                <div class="divRp">
                                    <div class="divRp_1">
                                        <a href="" class="linkP2">
                                            <h6>Hộp gỗ đơn giản</h6>
                                        </a>
                                    </div>
                                    <div class="fontSize_View ">
                                        <a href="" class="linkP2">
                                            <div>
                                                Hộp gỗ đơn giản này là một công trình dễ dàng và có thể phục vụ như một
                                                món
                                                đồ mộc mạc
                                                tuyệt đẹp ở mọi nơi trong ...
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <hr/>
                                <div>
                                    <a href="">
                                        <img src="public/images/account.png" class="iconAccount"/>
                                        People 2
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--                list 2-->
                <div class="moreBox1">
                    <ul class="list-group list-group-horizontal watchTV">
                        <!--                col 1-->
                        <li class="list-group-item col_rp">
                            <div class="col-lg-6">
                                <a href="">
                                    <img src="public/images/picture%20of%20content%203/n.jpg"/>
                                </a>
                            </div>

                            <div class="infWatchTV">
                                <div class="divRp">
                                    <div class="divRp_1">
                                        <a href="" class="linkP2">
                                            <h6>Làm đẹp chiếc gối của bạn bằng những nét vẽ </h6>
                                        </a>
                                    </div>
                                    <div class="fontSize_View ">
                                        <a href="" class="linkP2">
                                            <div>
                                                Có rất nhiều cách để biến chiếc gối của bạn thành những tác phẩm nghệ
                                                thuật
                                                tuyệt đẹp, bạn có muố biết...
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <hr/>
                                <div>
                                    <a href="">
                                        <img src="public/images/account.png" class="iconAccount"/>
                                        People 3
                                    </a>
                                </div>
                            </div>
                        </li>

                        <!--                col 2 -->
                        <li class="list-group-item col_rp" style="margin-left: 30px">
                            <div class="col-lg-6">
                                <a href="">
                                    <img src="public/images/picture%20of%20content%203/104182266_311404879854548_275254133652055942_n.jpg"/>
                                </a>
                            </div>

                            <div class="infWatchTV">
                                <div class="divRp">
                                    <div class="divRp_1">
                                        <a href="" class="linkP2">
                                            <h6>Hộp gỗ đơn giản</h6>
                                        </a>
                                    </div>
                                    <div class="fontSize_View">
                                        <a href="" class="linkP2">
                                            <div>
                                                Hộp gỗ đơn giản này là một công trình dễ dàng và có thể phục vụ như một
                                                món
                                                đồ mộc mạc
                                                tuyệt đẹp ở mọi nơi trong ...
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <hr/>
                                <div>
                                    <a href="">
                                        <img src="public/images/account.png" class="iconAccount"/>
                                        People 4
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--                list 3 load more-->
                <div class="blogBox1 moreBox1" style="display: none">
                    <ul class="list-group list-group-horizontal watchTV">
                        <!--                col 1-->
                        <li class="list-group-item">
                            <div class="col-lg-6">
                                <a href="">
                                    <img src="public/images/picture%20of%20content%203/low.jpg"/>
                                </a>
                            </div>

                            <div class="infWatchTV">
                                <div class="divRp">
                                    <div class="divRp_1">
                                        <a href="" class="linkP2">
                                            <h6> Xây dựng một khu vườn đá để tăng tính bền vững cho khu vườn của
                                                bạn</h6>
                                        </a>
                                    </div>

                                    <div class="fontSize_View">
                                        <a href="" class="linkP2">
                                            Nếu bạn đam mê tạo ra một sân sau bảo trì thấp,
                                            bền vững, một khu vườn đá là phải.
                                            D.I.Yer này nói với bạn thông qua quá trình....
                                        </a>
                                    </div>
                                </div>
                                <hr/>
                                <div>
                                    <a href="">
                                        <img src="public/images/account.png" class="iconAccount"/>
                                        People 5
                                    </a>
                                </div>
                            </div>
                        </li>

                        <!--                col 2 -->
                        <li class="list-group-item" style="margin-left: 30px">
                            <div class="col-lg-6">
                                <a href="">
                                    <img src="public/images/picture%20of%20content%203/how%20to.jpg"/>
                                </a>
                            </div>

                            <div class="infWatchTV">
                                <div class="divRp">
                                    <div class="divRp_1">
                                        <a href="" class="linkP2">
                                            <h6>Gạch phòng tắm lớn có thể làm cho phòng tắm nhỏ cảm thấy ít bừa bộn</h6>
                                        </a>
                                    </div>
                                    <div class="fontSize_View ">
                                        <a href="" class="linkP2">
                                            <div>
                                                Gạch lát sàn và tường lớn hơn rất hiệu quả cho phòng tắm
                                                nơi không gian sàn ở mức cao.
                                                Có ít dòng vữa có thể nhìn thấy và sàn nhà dường như ít lộn xộn hơn ...
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <hr/>
                                <div>
                                    <a href="">
                                        <img src="public/images/account.png" class="iconAccount"/>
                                        People 6
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--            end watchTV-->

            <!--                    mục xem thêm-->
            <div class="rp1_2" style="padding-bottom:25px">
                <div>
                    <hr class="hr0" id="hr0_1"/>
                    <button class="btn-light" id="loadMore1">
                        Hiển thị thêm <i class="material-icons" style="font-size: 12px">expand_more</i>
                    </button>
                    <hr class="hr1" id="hr1_1"/>
                </div>
                <!--                kết thúc mục xem thêm-->
            </div>

            <!--        kết thúc col 10-->
        </div>

        <!--        kết thúc phần thân-->
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="./node_modules/jquery/dist/jquery.min.js"></script>
<script src="./node_modules/popper.js/dist/popper.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./public/owlcarousel/owl.carousel.min.js"></script>
<!--import icon-->
<script src="https://kit.fontawesome.com/2fe833f814.js" crossorigin="anonymous"></script>
<!--Dropdown btn js-->
<script src="./public/js/btnDropdown.js"></script>
<script src="./public/js/loadMore.js"></script>
<script>
    var modal = document.getElementById('id01');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>