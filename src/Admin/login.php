<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="123.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <div id="id01" class="modal">
        <div id="loginbox" class="modal-content animate" action="/action_page.php" method="post">
            <div class="left">
                <h1>Đăng Nhập</h1>
                <form id="dangnhap" action="../../public/php/dn_accountAdmin.php"
                      method="post" enctype="multipart/form-data">
                    <i class="fas fa-user"></i><input type="text" name="username_admin" id="user" placeholder="Tên đăng nhập">

                    <i class="fas fa-lock"></i><input type="password" name="password_admin" id="pass" placeholder="Mật khẩu">

                    <br>
                    <div>
                        <a href="../alpha/index.php">
                            Quay lại trang dành cho User
                        </a>
                    </div>

                    <input type="submit" name="signup_submit" value="Đăng nhập">

                </form>
            </div>
            <div class="right">
                <span class="loginwith">ADMIN<br>D.I.Y </span>
            </div>

        </div>
    </div>

</body>

</html>