<?php
include "connect.php";

$id = $_GET["id"];
$sql = "SELECT * FROM `news` WHERE `news`.`id` = " . $id;
$result = mysqli_query($conn, $sql);


while ($data = mysqli_fetch_array($result)) {
     $a = json_encode($data["material_json"]);
    echo '
        <div>
            '.$data["username"].'
        </div>
        <div>
            '.$data["title"].'
        </div>
        <div>
            '.$data["category"].'
        </div>
        <div>
            '.$data["content_post"].'
        </div>
        <div>
            '.$data["material_json"].'
        </div>
        <div>
            '.$data["cost"].'
        </div>
        <div>
            '.$data["time_json"].'
        </div>
        <div>
            '.$data["chooseLevel"].'
        </div>
    ';
}

?>