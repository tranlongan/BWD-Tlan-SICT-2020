<?php
    include "../../public/php/connect.php"
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
<body>

<div class="container">
    <div>
       <div>Name</div>
       <div>Title</div>
       <div>Content</div>
    </div>
    <?php
        $sql = "SELECT * FROM `news`";
        $result = mysqli_query($conn,$sql);
        while ($data = mysqli_fetch_array($result)){
            echo '
       <div>
           <div>'.$data["username"].'</div>
           <div>'.$data["title"].'</div>
           <div>'.$data["content_post"].'</div>
       </div>
            ';
        }
    ?>
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

