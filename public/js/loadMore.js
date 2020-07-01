$(document).ready(function () {
    $(".moreBox").slice(0, 1).show();
    if ($(".blogBox:hidden").length != 0) {
        $("#loadMore").show();
    }
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 6).slideDown();
        if ($(".moreBox:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
            $("#hr0").fadeOut('slow');
            $("#hr1").fadeOut('slow');
        }
    });
});

$(document).ready(function () {
    $(".moreBox1").slice(0, 1).show();
    if ($(".blogBox1:hidden").length != 0) {
        $("#loadMore1").show();
    }
    $("#loadMore1").on('click', function (e) {
        e.preventDefault();
        $(".moreBox1:hidden").slice(0, 6).slideDown();
        if ($(".moreBox1:hidden").length == 0) {
            $("#loadMore1").fadeOut('slow');
            $("#hr0_1").fadeOut('slow');
            $("#hr1_1").fadeOut('slow');
        }
    });
});

$(document).ready(function () {
    $(".moreBox2").slice(0, 1).show();
    if ($(".blogBox2:hidden").length != 0) {
        $("#loadMore2").show();
    }
    $("#loadMore2").on('click', function (e) {
        e.preventDefault();
        $(".moreBox2:hidden").slice(0, 6).slideDown();
        if ($(".moreBox2:hidden").length == 0) {
            $("#loadMore2").fadeOut('slow');
        }
    });
});

$(document).ready(function () {
    $(".moreBox3").slice(0, 1).show();
    if ($(".blogBox3:hidden").length != 0) {
        $("#loadMore3").show();
    }
    $("#loadMore3").on('click', function (e) {
        e.preventDefault();
        $(".moreBox3:hidden").slice(0, 6).slideDown();
        if ($(".moreBox3:hidden").length == 0) {
            $("#loadMore3").fadeOut('slow');
        }
    });
});