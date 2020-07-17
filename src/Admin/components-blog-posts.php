<?php
include "../../public/php/connect.php";
?>

<!doctype html>
<html class="no-js h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
    <meta name="description"
          content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
	<link rel="stylesheet" href="button.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body class="h-100">
<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
            <div class="main-navbar">
                <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                    <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                        <div class="d-table m-auto">
                            <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;"
                                 src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                            <span class="d-none d-md-inline ml-1">Admin D.I.Y</span>
                        </div>
                    </a>
                    <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                        <i class="material-icons">&#xE5C4;</i>
                    </a>
                </nav>
            </div>
            <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
                <div class="input-group input-group-seamless ml-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <input class="navbar-search form-control" type="text" placeholder="Search for something..."
                           aria-label="Search"></div>
            </form>
            <div class="nav-wrapper">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="material-icons">edit</i>
                            <span>Trang đăng nhập</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="components-blog-posts.php">
                            <i class="material-icons">vertical_split</i>
                            <span>Bài đăng</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="tables.php">
                            <i class="material-icons">table_chart</i>
                            <span>Người sử dụng</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="user-profile-lite.html">
                            <i class="material-icons">person</i>
                            <span>Thông tin cá nhân</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <div class="main-navbar sticky-top bg-white">
                <!-- Main Navbar -->
                <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                    <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                        <div class="input-group input-group-seamless ml-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                            <input class="navbar-search form-control" type="text" placeholder="Tìm kiếm gì đó .."
                                   aria-label="Search"></div>
                    </form>
                    <ul class="navbar-nav border-left flex-row ">
                        <li class="nav-item border-right dropdown notifications">
                            <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="nav-link-icon__wrapper">
                                    <i class="material-icons">&#xE7F4;</i>
                                    <span class="badge badge-pill badge-danger">2</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">
                                    <div class="notification__icon-wrapper">
                                        <div class="notification__icon">
                                            <i class="material-icons">&#xE6E1;</i>
                                        </div>
                                    </div>
                                    <div class="notification__content">
                                        <span class="notification__category">Phân tích</span>
                                        <p>Website của bạn có số tài khoản người sử dụng tăng
                                            <span class="text-success text-semibold">28%</span> trong tuần trước.Tuyệt
                                            vời!</p>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="notification__icon-wrapper">
                                        <div class="notification__icon">
                                            <i class="material-icons">&#xE8D1;</i>
                                        </div>
                                    </div>
                                    <div class="notification__content">
                                        <span class="notification__category">Sales</span>
                                        <p>Tuần trước, số lượng bài đăng của trang web giảm
                                            <span class="text-danger text-semibold">5.52%</span>.Việc này cần chú ý!</p>
                                    </div>
                                </a>
                                <a class="dropdown-item notification__all text-center" href="#"> Xem tất cả thông
                                    báo </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#"
                               role="button" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle mr-2" src="../../public/images/picture%20home%20login/icons8-google-home-64.png"
                                     alt="User Avatar">
                                <span class="d-none d-md-inline-block">Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small">
                                <a class="dropdown-item" href="user-profile-lite.html">
                                    <i class="material-icons">&#xE7FD;</i> Thông tin cá nhân</a>
                                <a class="dropdown-item" href="components-blog-posts.php">
                                    <i class="material-icons">vertical_split</i>Bài đăng</a>
                                <a class="dropdown-item" href="add-new-post.html">
                                    <i class="material-icons">table_chart</i>Người sử dụng</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="login.html">
                                    <i class="material-icons text-danger">&#xE879;</i> Đăng xuất </a>
                            </div>
                        </li>
                    </ul>
                    <nav class="nav">
                        <a href="#"
                           class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
                           data-toggle="collapse" data-target=".header-navbar" aria-expanded="false"
                           aria-controls="header-navbar">
                            <i class="material-icons">&#xE5D2;</i>
                        </a>
                    </nav>
                </nav>
            </div>
            <!-- / .main-navbar -->

            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <div class="page-header row no-gutters py-4">
                    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                        <span class="text-uppercase page-subtitle">D.Y.I</span>
                        <h3 class="page-title">Bài đăng đang chờ phê duyệt</h3>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="row">
                    <?php
                    $sql="SELECT * FROM `news` WHERE `allowed` = '0'";
                    $result = mysqli_query($conn,$sql);
                    while ($data = mysqli_fetch_array($result)){
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4" >
						<div class="mydivouter">
                        <div class="card card-small card-post card-post--1">
                            <div class="card-post__image"
                                 style="background-image: url(\'../../public/'.$data["link_image"].'")>
                                <a href="#" class="card-post__category badge badge-pill badge-dark">
                                <div>
                                       Write by '.$data["title"].'
                                </div>
                                </a>
                                <div class="card-post__author d-flex">
                                    <a href="#" class="card-post__author-avatar card-post__author-avatar--small"
                                       style="background-image: url(\'../../public/images/picture home login/tenor.gif\');"></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="text-fiord-blue" href="#">'.$data["content"].'</a>
                                </h5>
                                <span class="text-muted">28 February 2019</span><br>
								<span><a href="../../public/php/accept_post.php?id='.$data["id"].'"><input type="button" class="mybuttonoverlap1 btn btn-primary" value="Accept"></a></span>
								<span><a href="../../public/php/delete_post.php?id='.$data["id"].'"><input type="button" class="mybuttonoverlap2 btn btn-danger" value="Delete"></a></span>
                            </div>
							</div>
                        </div>
                    </div>
                        ';
                    }
                    ?>
                </div>
                <!-- Page Header -->
                <div class="page-header row no-gutters py-4">
                    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                        <span class="text-uppercase page-subtitle">D.Y.I</span>
                        <h3 class="page-title">Bài đăng đang đã được duyệt</h3>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $sql="SELECT * FROM `news` WHERE `allowed` = '1'";
                    $result = mysqli_query($conn,$sql);
                    while ($data = mysqli_fetch_array($result)){
                        echo '
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4" >
						<div class="mydivouter">
                        <div class="card card-small card-post card-post--1">
                            <div class="card-post__image"
                                 style="background-image: url(\'../../public/'.$data["link_image"].'")>
                                <a href="#" class="card-post__category badge badge-pill badge-dark">
                                <div>
                                       Write by '.$data["title"].'
                                </div>
                                </a>
                                <div class="card-post__author d-flex">
                                    <a href="#" class="card-post__author-avatar card-post__author-avatar--small"
                                       style="background-image: url(\'../../public/images/picture home login/tenor.gif\');"></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="text-fiord-blue" href="#">'.$data["content"].'</a>
                                </h5>
                                <span class="text-muted">28 February 2019</span><br>
								<span><a href="../../public/php/delete_post.php?id='.$data["id"].'"><input type="button" class="mybuttonoverlap2 btn btn-danger" value="Delete"></a></span>
                            </div>
							</div>
                        </div>
                    </div>
                        ';
                    }
                    ?>
                </div>
            </div>
            <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
                <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
              <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
            </span>
            </footer>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="scripts/extras.1.1.0.min.js"></script>
<script src="scripts/shards-dashboards.1.1.0.min.js"></script>
</body>
</html>