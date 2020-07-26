<?php
include "connect.php";

if (isset($_SESSION['value']) && $_SESSION['value'] == '1') {
    header("Location: /BWD/src/alpha/index.php");
}
?>
