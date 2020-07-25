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
        <select class="browser-default custom-select" disabled>
            <option value="-Ý tưởng đã hoàn thiện">-Ý tưởng đã hoàn thiện</option>
        </select>
    </div>

    <!-- Material input -->
    <div style="padding-top: 10px">
        <input type="text" id="form1" class="form-control" placeholder="Thể loại">
    </div>
    <div>
        <div id="ckeditor"></div>
        <div>
            <button type="submit" onclick="submit()" class="btn btn-primary">
                Gửi
            </button>
        </div>
    </div>

</div>
<script>
    let editor;
    async function initEditor() {
        editor = await ClassicEditor
            .create(document.getElementById("ckeditor"), {
                cloudServices: {
                    uploadUrl: "https://73493.cke-cs.com/easyimage/upload/",
                    tokenUrl: "https://73493.cke-cs.com/token/dev/cb43e1e9134053095ab0da2213c7b2428f073c0e9bb4aa57406cbab4d7cd"
                }
            });
    }
    initEditor()

    async function submit() {
        console.log(editor.getData())
    }
    
</script>
</body>
</html>