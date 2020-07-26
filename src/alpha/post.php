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

    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

</head>
<body>
<div class="container">

    <div style="margin-bottom: 16px; font-size: 20px">
        <a href="index.php">
            Trang chủ
        </a>
    </div>
    <div style="font-size: 32px; margin-bottom: 32px">
        Hãy trình bày chi tiết ý tưởng của bạn
    </div>

    <div style="float: right">
        <select name="chooseStatus" class="browser-default custom-select" id="chooseStatus">
            <option value="Ý tưởng đã hoàn thiện">Ý tưởng đã hoàn thiện</option>
        </select>
    </div>
    <div style="padding-top: 10px">
        <input type="text" id="title" name="title" class="form-control" placeholder="Tiêu đề">
    </div>
    <div style="padding-top: 10px">
        <input type="text" name="category" id="category" class="form-control" placeholder="Thể loại">
    </div>
    <div class="file-field medium">
        <div>
            <span>Chọn file<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
            <input id="myfile" name="image" type="file">
        </div>
    </div>

    <div>
        <div id="ckeditor"></div>
        <div>
            <button onclick="submit()" type="button" class="btn btn-primary">
                Gửi
            </button>
        </div>
    </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const chooseStatus = document.getElementById("chooseStatus");
    const title = document.getElementById("title");
    const category = document.getElementById("category");
    const inputFile = document.getElementById("myfile");

    const express = require('express');
    const mysql = require('mysql');
    const app = express();

    const connection = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'db_diy'
    });

    let file;
    inputFile.onchange = (evt) => {
        file = evt.target.files[0];
        console.log(file);
    };

    let editor;
    const initEditor = async () => {
        editor = await ClassicEditor
            .create(document.getElementById("ckeditor"), {
                cloudServices: {
                    uploadUrl: "https://73493.cke-cs.com/easyimage/upload/",
                    tokenUrl: "https://73493.cke-cs.com/token/dev/cb43e1e9134053095ab0da2213c7b2428f073c0e9bb4aa57406cbab4d7cd"
                }
            });
    }
    initEditor();


    const submit = async () => {
        const data = editor.getData();
        const formData = new FormData();
        formData.set("content", data);
        formData.set("title", title.value);
        formData.set("chooseStatus", chooseStatus.options[chooseStatus.selectedIndex].text);
        formData.set("category", category.value);
        formData.set("image", file);
        axios
            .post("http://localhost/BWD/public/php/form_post.php", formData)
            .then((res) => {
                window.open("/BWD/src/alpha/my_post.php", "_self");
            })
            .catch(err => alert("something went wrong"));
    }

</script>
</body>
</html>