<?php
    $name = $_GET['movieName'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AZMovies</title>
    <link rel="icon" href="dist/img/1513347197_rP23tE_big(52).jpg">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">-->
    <link rel="stylesheet" href="dist/css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/loginStyles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:800|Raleway:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">

</head>
<body>
<nav id="mainNav" class="navbar navbar-expand-lg bg-light header-main">
    <div class="row row-margin-0 row-size-1">
        <div class="col-xl-1 col-lg-1 "></div>
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
            <div class="row row-margin-0 row-size-2">
                <div class="col-xl-4 col-lg-3 col-md-3">
                    <h5 class="navbar-brand logo-text">AZ<span class="primery-color">Movies</span><span class="your_area">  |  Watch Now</span></h5>
                </div>
                <div class="col-xl-8 col-lg-9 col-md-9 col-sm-12">

                    <div class="row row-margin-0 row-size-2">
                        <div class="col-xl-8 col-lg-9 col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-1"></div>
    </div>
</nav>

<div class="row panel-size-2 row-margin-0"></div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" style="width: 5px" src="dist/img/Creepy_fondo.jpg" alt="First slide">
            <div class="carousel-caption-modified d-none d-md-block">
                <h1 class="main-caption fadeInUp">Watch<span class="primery-color"> Now</span></h1>
                <h5 class="font-weight-bold main-paragraph fadeInUp-slow">Control</h5>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div>
    <div style="height: 15%">
        <h1 style="margin-left: 45%" id="movieName"><?php echo htmlentities($name); ?></h1>
    </div>
    <div  style="height: 15%;">
        <h1 style="margin-left: 10%" id="category"></h1>
    </div>
    <br>
    <div>
        <iframe  style="width: 1500px;height: 700px;margin-left: 10%"  id="videoFrame" > </iframe>
    </div>

    <div class="col-md-1">
<!--        <h5 style="margin-left: 50%">Rating </h5>-->
    </div>

    <div class="container">
        <div class="rate">
            <div id="1" class="btn-1 rate-btn"></div>
            <div id="2" class="btn-2 rate-btn"></div>
            <div id="3" class="btn-3 rate-btn"></div>
            <div id="4" class="btn-4 rate-btn"></div>
            <div id="5" class="btn-5 rate-btn"></div>
        </div>
    </div>
</div>
<br>

<?php require_once "footer.php"; ?>

<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $('.rate-btn').hover(function(){
            $('.rate-btn').removeClass('rate-btn-hover');
            var therate = $(this).attr('id');
            for (var i = therate; i >= 0; i--) {
                $('.btn-'+i).addClass('rate-btn-hover');
            };
        });

        //$('.rate-btn').click(function(){
        //    var therate = $(this).attr('id');
        //    var dataRate = 'act=rate&post_id=<?php //echo $post_id; ?>//&rate='+therate; //
        //    $('.rate-btn').removeClass('rate-btn-active');
        //    for (var i = therate; i >= 0; i--) {
        //        $('.btn-'+i).addClass('rate-btn-active');
        //    };
        //    $.ajax({
        //        type : "POST",
        //        url : "ajax.php",
        //        data: dataRate,
        //        success:function(){}
        //    });
        //});
    });
    function getVideo(){
        $.ajax({
            url: "api/service/MovieService.php",
            method: "GET",
            async: true,
            dataType:"json"
        }).done(function (resp) {
            for(var i in resp){
                var tempA=resp[i];
                if ($('#movieName').text() == tempA[1]){
                    console.log(tempA[2]);
                    $('#category').text(tempA[2]);
                    // $('#category').text(tempA[3]);
                    $('#videoFrame').attr('src', tempA[4]);
                }
            }
        });
    }
    $(document).ready(function () {
        getVideo();
    });


    // $('#2').click(function () {
    //    $.ajax({
    //        url:"api/service/DashBoardService.php",
    //        method:"POST",
    //        async:true,
    //        dataType: "json"
    //    }).done(function (r) {
    //        if (r==true){
    //            alert("One Star Rating");
    //
    //        } else {
    //           alert("somthing went wrong !");
    //        }
    //    })
    // });



</script>
</body>
</html>