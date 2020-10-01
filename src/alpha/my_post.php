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
    <!--    css-->
    <link rel="stylesheet" href="css/css_of_post/style.css"
</head>
<body>

<div class="container-fluid">

    <div class="container mt-5">
        <nav class="nav">
            <li class="nav-item">
                <img style="width: 64px; height: 64px; border: 1px solid #818182" class="rounded-circle"
                     src="../../public/images/picture%20home%20login/tenor.gif">
            </li>
            <li class="nav-item ml-4">
                <nav class="list-group">
            <li class="nav-item" style="text-align: center">
                Norman
            </li>
            <li class="nav-item">
                <button class="btn btn-primary rounded-pill">+ Theo dõi</button>
            </li>
        </nav>
        </li>
        </nav>
        <div class="mt-1">
            <?php
            $id = $_GET["id"];
            $sql = "SELECT * FROM `news` WHERE `news`.`id` = " . $id;
            $result = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($result)) {
                echo '
        <div style="font-size: 32px; font-weight: bolder">
            ' . $data["title"] . '
        </div>
        <div>
            ' . $data["category"] . '
        </div>
        <div>
        <blockquote class="blockquote" style="font-size: 17px">
            <footer class="blockquote-footer">
                Bảng thống kê
                <nav class="nav _nav1 nav-pills">
                    <li class="nav-item">
                        <i class="fas fa-pencil-ruler"></i>
                        <span>' . $data["material"] . '</span>
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-wallet"></i>
                        <span>' . $data["cost"] . '</span>
                    </li>
                    <li class="nav-item">
                        <i class="far fa-clock"></i>
                        <span>' . $data["time_do"] . '</span>
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-poll"></i>
                        <span>' . $data["chooseLevel"] . '</span>
                    </li>
                </nav>
            </footer>
         </blockquote>
        </div>
        <div style="padding: 0 400px 0 0">
            ' . $data["content_post"] . '
        </div>
        
    ';
            }
            ?>
        </div>

    </div>

</div>
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>