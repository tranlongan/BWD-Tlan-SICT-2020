<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name  = "db_diy";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
if ( $conn -> connect_error ) {
    die( "Kết nối thất bại:"  .  $conn -> connect_error );
}
?>