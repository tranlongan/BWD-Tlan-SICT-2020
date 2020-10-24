
<?php include './mvc/classes/product.php';  ?>



<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>D.I.Y | Do it's your selft</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- CSS here -->
    <link rel="stylesheet" href="public/stylesheets/reponsive.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
   
    <link rel="stylesheet" href="./public/stylesheets/slide.css">
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
.divSearch1{
  
  width: 600px;
}

.setTfSearch1{
  height: 41px;
  width: 500px;
  padding: 3px;
  border: 1px solid #818182;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  outline: none;
}

.setButton1{
  height: 40px;
  border: 1px solid #fefefe;
  margin-left: 1px;
  outline: none;
  padding: 3px;
  width: 15%;
  
}


     /* small mobile :320px. */
    @media screen and (max-width: 420px) {
        .logo{
            width: 70px;
        }
         .logo1{
            width: 70px;
        }
    .divSearch1{
        padding: 5px 15px 15px 15px;
      width: 100%;  
     max-width: inherit;
    }
    
    .setTfSearch1{
        font-size: 8px;
        height: 30px;
        width: 75%;
        padding: 3px;
        border: 1px solid #818182;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        outline: none;
    }
    .setButton1{
  font-size: 8px;
  height: 30px;
  padding: 3px;
  width: 20%;

  }
  .video-icon video{
      margin: 50px 10px 20px 10px;
    width: 100%;  
     max-width: inherit;
  }
    /*slide*/
   #slider label { 
    left: 0px;

}
    
}
 

    </style>
    
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                <img src="./assets/img/logo/LOGO_DIY.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
 <div class="container-fluid">

    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
            <div class="header-bottom  header-sticky" style="background-color: blue; height: auto;">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img style="height: 50px;" src="./img/aa.png" alt=""></a>
                                </div>
                            </div>
                          

                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="#">
                                                <div class="divSearch1">
                                                    <input type="search" class="setTfSearch1" placeholder="Bạn muốn tìm kiếm điều gì ở đây ?" >
                                                    <input type="submit" class="btn-primary setButton1" value="Search" style="outline: none;">
                                                    
                                                 </input>
                                                 </div>
                                               
                                                </a></li>
                                         
                                                <!-- Button -->
                                              
                                                <li class="button-header"><a style="height: 40px;" href="login.php"  class="btn btn3">Đăng nhập</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                                    <!-- Mobile Menu -->
                                <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section>
          <div class="container">
       <div class="row" style="margin-top: 100px;">
        <div class="col-md-3">
           <div id="demo3">
                        <div class="card" style="margin-top: 50px">
                                <div class="card-body">
                                    <h4>Hãy tham gia cộng đồng</h4>
                                    <h3>D.I.Y</h3>
                                    Khám phá và chia sẽ những ý tưởng sáng tạo tốt nhất của bạn với cộng đồng D.I.Y.<br/>
                                    <br/>
                                    <br/>
                                    <li class="button-header margin-left "><a href="login.php" class="btn">Tham gia </a></li>
                                </div>
                            </div>
                        </div>
           </div>
           <div class="col-md-9">
        
               
                 
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

                             <div class="text_sli1">
                                 <a href="">Tốt nhất của chúng tôi</a>
                             </div>
                         </div>

                         <!--                            phần btn-->
                         <div class="text_sli2">
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
                             Hãy để D.I.Y giúp bạn lập kế hoạch dự án vẽ DIY tiếp theo của bạn...
                         
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
                             chúng tôi luôn sẵn sàng giúp bạn hướng dẫn từng bước...
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
                             Chúng tôi có những gì bạn đang tìm kiếm ở đây...
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
                             Cho phép D.I.Y truyền cảm hứng...
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
                             D.I.Y có thể giúp bạn đạt...
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
                             trở thành không gian bạn yêu thích...
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
                             mới nhất...
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
                             cho công việc? Cần một số ý tưởng để làm cho...
                         </div>
                     </div>
                 </label>
             </section>


          </div>          
      

        
       </div>

          
          
       </div>
            </section>
    
        <!-- Courses area start -->
        <div class="courses-area section-padding20 fix" style="padding: 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Những ý tưởng nổi bật nhất</h2>
                        </div>
                    </div>
                </div>

                <div class="courses-actives">
                <?php 

            $product = new product();
	      	$product_new = $product->show_product();
	      	if($product_new){
	      		while ($result_new = $product_new->fetch_assoc()) {
                  
	      	 ?>
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="./public/<?php echo $result_new['link_image'] ?>" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p></p>
                                <h3><a href="#"><?php echo $result_new['username'] ?></a></h3>
                              
                                <p>
                                <?php echo $result_new['category'] ?>
                                <br>
                                <?php echo $result_new['title'] ?>
                                </p>

                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>

                                </div>
                                <a href="#" class="border-btn border-btn2">Xem thêm</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <?php 
				}
				}
			?>

      
                </div>
            </div>
        </div>
        <!-- Courses area End -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Khám phá những ý tưởng hàng đầu của chúng tôi.</h2>
                            <p>Trang web sẽ cung cấp những ý tưởng sáng tạo hay nhất do các thành viên trong cộng đồng đưa lên, đồng thời chọn lọc những ý tưởng phù hợp với bạn nhất.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Bạn có thế xem và kham khảo các ý tưởng của người khác khi tham gia cộng đồng.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Chỉ có thế xem chi tiết nhất và tham gia thảo luận đặt vấn đề khi bạn đã tham gia cộng đồng.</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Nội dung mà bạn đưa lên phải có nội dung phù hợp, có tính sáng tạo, không sao chép lại ý tưởng của người khác.  </p>
                        </div>
                  
                </div>
                </div>
                    <div class="col-md-6">
          
                    <!-- img -->
                    <div class="right-img">
                    
                        <div class="video-icon" sty >
                           <video width="500px" controls>
                           <source src="./img/DIY IDEAS FOR ROOM 2020 I Ideas tumblr.mp4" type="video/mp4">
                            <i class="fas fa-play"></i></video>
                        </div>
                    </div>
                
                </div>
                </div>
                </div>
  
 
        <!--? top subjects Area Start -->
        <div class="topic-area section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Một số lĩnh vực.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                            <img style="height: 170px; border-radius: 5%;"  src="./public/images/slider/xaydung.jpg">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Xây dựng</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                            <img style="height: 170px; border-radius: 5%;" src="./public/images/slider/suachua.png">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Sửa chữa</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                            <img style="height: 170px; border-radius: 5%;" src="./public/images/slider/son.jpeg">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Sơn</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                            <img style="height: 170px; border-radius: 5%;" src="./public/images/slider/laudon.jpg">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Lâu dọn</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                            <img style="height: 170px; border-radius: 5%;" src="./public/images/slider/ori.jpg">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Organize</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                            <img style="height: 170px; border-radius: 5%;" src="./public/images/slider/nhabep.jpg">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Nhà bếp & Phòng ăn</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                            <img style="height: 170px; border-radius: 5%;" src="./public/images/slider/phongkhach.jpg">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Phòng khách</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                            <img style="height: 170px; border-radius: 5%;" src="./public/images/slider/phongngu.jpg">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Phòng ngủ</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- top subjects End -->

        <section class="team-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Community experts</h2>
                        </div>
                    </div>
                </div>
                <div class="team-active">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. Urela</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. Uttom</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. Shakil</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team4.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. Arafat</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. saiful</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
    </main>
    <footer>
     <div class="footer-wrappper footer-bg">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Thoải sức sáng tạo khi đến vs cộng đồng D.I.Y</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Lựa chọn của chúng tôi</h4>
                                <ul>
                                    <li><a href="#">ý tưởng & Sáng tạo</a></li>
                                    <li><a href="#">Chia sẽ với cộng đồng</a></li>
                                    <li><a href="#">Khám phá cộng đồng</a></li>
                                    <li><a href="#">Sáng tạo làm nên tri thức</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Hỗ trợ</h4>
                                <ul>
                                    <li><a href="#">Hỗ trợ tư vấn ý tưởng</a></li>
                                    <li><a href="#">Tư vấn vật liệu và dụng cụ cần cho ý tưởng</a></li>
                                    <li><a href="#">Hãy đặt câu hỏi với chúng tôi </a></li>
                                    <li><a href="#">Trung tâm hỗ trợ, tư vấn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Cộng đông</h4>
                                <ul>
                                    <li><a href="#">Đặt câu hỏi & vấn đề </a></li>
                                    <li><a href="#">Tham gia thảo luận</a></li>
                                    <li><a href="#">Ý tưởng sáng tạo</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->

          <!-- Footer End-->
      </div>
  </footer> 
       
 </div>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>


<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>