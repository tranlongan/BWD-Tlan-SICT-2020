<?php
include "connect.php";

if (isset($_SESSION['value'])=='1' && $_SESSION['value'] == '1') {
    header("Location: /BWD/src/alpha/index.php");
}
?>
