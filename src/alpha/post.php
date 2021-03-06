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
    <!-- Css -->
    <link rel="stylesheet" href="css/css_of_post/style.css">


</head>
<body>
<div class="container">

    <div style="margin-bottom: 16px; font-size: 20px">
        <a href="index.php">
            Trang chủ
        </a>
    </div>
    <div style="font-size: 32px;font-weight: bolder; margin-bottom: 32px">
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
    <div class="file-field medium mb-4">
        <div class="btn btn-outline-primary waves-effect float-left">
            <span>Choose files<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
            <input id="myfile" name="image" type="file">
        </div>
        <div class="file-path-wrapper mt-3">
            <input class="file-path validate" style="border: 0;background-color: white" disabled
                   placeholder="Tên file bạn vừa chọn">
        </div>
    </div>

    <!--    *-->
    <div>
        <div id="ckeditor"></div>
        <div class="mt-4" style="font-size: 18px;font-weight: bolder">Những vật liệu bạn đã sử dụng cho dự án này?</div>

        <div class="divNav mt-5">
            <nav class="list-group">
                <nav class="nav">
                    <li class="nav-item" style="margin-right: 4.6rem">
                        <div class="float-right">
                            Tổng số vật liệu sử dụng
                        </div>
                    </li>
                    <li class="nav-item">
                        <input type="text" name="material" id="material" class="form-control">
                    </li>
                </nav>
                <nav class="nav">
                    <li class="nav-item" style="margin-right: 7.6rem">
                        <div class="float-right">
                            Chi phí ước tính
                        </div>
                    </li>
                    <li style="margin-right: 5px">$</li>
                    <li>
                        <input type="text" name="cost" id="cost" class="form-control">
                    </li>
                </nav>
                <nav class="nav">
                    <li class="nav-item" style="margin-right: 5rem">
                        <div class="float-right">
                            Mất bao nhiêu thời gian
                        </div>
                    </li>
                    <li class="nav-item mr-2 _navItem1">
                        <input type="text" name="time" id="time" class="form-control">
                    </li>
                </nav>
                <nav class="nav">
                    <li class="nav-item" style="margin-right: 7.7rem">Mức độ phức tạp</li>
                    <li class="nav-item">
                        <select name="chooseLevel" id="chooseLevel" class="browser-default custom-select">
                            <option value="null" disabled selected>Lựa chọn</option>
                            <option value="Dễ dàng">-Dễ dàng</option>
                            <option value="Trung bình">-Trung bình</option>
                            <option value="Nâng cao">-Nâng cao</option>
                        </select>
                    </li>
                </nav>
            </nav>
        </div>
        <div>
            <button onclick="submit()" type="button" class="btn btn-outline-primary">
                Gửi
            </button>
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
<!--axios-->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!--    ckEditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    // note
    const chooseStatus = document.getElementById("chooseStatus");
    const title = document.getElementById("title");
    const category = document.getElementById("category");
    const inputFile = document.getElementById("myfile");

    const material = document.getElementById("material");
    const cost = document.getElementById("cost");
    const time = document.getElementById("time");
    const selectTime = document.getElementById("selectTime");
    const chooseLevel = document.getElementById("chooseLevel");

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
                    uploadUrl: "https://75171.cke-cs.com/easyimage/upload/",
                    tokenUrl: "https://75171.cke-cs.com/token/dev/a8c66df7e644b064314258f9274a73a02d361d2236ee2da40da2f66bf333"
                }
            });
    }
    initEditor();

    const submit = async () => {
        let cost1 = "$" + cost.value;
        const data = editor.getData();
        const formData = new FormData();
        formData.set("content", data);
        formData.set("title", title.value);
        formData.set("chooseStatus", chooseStatus.options[chooseStatus.selectedIndex].value);
        formData.set("category", category.value);
        formData.set("image", file);
        formData.set("material", material.value);
        formData.set("cost", cost1);
        formData.set("time_do",time.value);
        formData.set("chooseLevel", chooseLevel.options[chooseLevel.selectedIndex].value);

        axios
            .post("http://localhost/BWD/public/php/form_post.php", formData)
            .then((res) => {
                window.open("/BWD/src/alpha/index.php", "_self");
            })
            .catch(err => alert("something went wrong"));
    }
</script>
</body>
</html>