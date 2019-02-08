<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AZMovies</title>
    <link rel="icon" href="dist/img/1513347197_rP23tE_big(52).jpg">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/loginStyles.css">
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
                    <h5 class="navbar-brand logo-text">AZ<span class="primery-color">Movies</span><span class="your_area">  |</span></h5>
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
            <img class="d-block w-100" style="background-size: cover" src="dist/img/Creepy_fondo.jpg"
                 alt="First slide">
            <div class="carousel-caption-modified d-none d-md-block">
                <h1 class="main-caption fadeInUp">Welcome to AZ<span class="primery-color">Movies</span></h1>
                <h5 class="font-weight-bold main-paragraph fadeInUp-slow">SRILANKA'S BEST ONLINE MOVIE SITE</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="dist/img/25200.jpg" alt="Second slide">
            <div class="carousel-caption-modified d-none d-md-block">
                <h1 class="main-caption fadeInUp">Welcome to AZ<span class="primery-color">Movies</span></h1>
                <h5 class="font-weight-bold main-paragraph fadeInUp-slow">SRILANKA'S BEST ONLINE MOVIE SITE</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="dist/img/alone-in-the-dark-hd-wallpapers-32736-4304977.jpg" alt="Third slide">
            <div class="carousel-caption-modified d-none d-md-block">
                <h1 class="main-caption fadeInUp">Welcome to AZ<span class="primery-color">Movies</span></h1>
                <h5 class="font-weight-bold main-paragraph fadeInUp-slow">SRILANKA'S BEST ONLINE MOVIE SITE</h5>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!---->
<!--<div class="row" id="movie" style="margin-left: 3%">-->
<!--    <div id="apeone" class="col-md-2"></div>-->
<!--    <div id="apetwo" ></div>-->
<!--    <div id="apethree" ></div>-->
<!--    <div style="margin-top: 2%" id="apeDis" class="col-md-5"></div>-->
<!--    <div id="apefour" class="col-md-1"></div>-->
<!--    <div id="star"></div>-->
<!---->
<!--</div>-->

<div class="row">
    <div class="col-xl-3"></div>
    <div class="col-xl-8" id="movies"></div>
    <div class="col-xl-1"></div>
</div>

<br>
<br>
<br>
    <div id="newmovie" style="margin-left: 3%">
    <div id="image" ></div>
    <div id="name" ></div>
    <div id="category" ></div>
    <div style="margin-top: 2%" id="discription" ></div>
    <div id="video" style="margin-left: 5%"></div>
</div>
<br>
<br>
<br>
<br>


<?php require_once "footer.php"; ?>

<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/controller/DashboardController.js"> </script>

<script>
    // function loadvieos() {
    //     $.ajax({
    //         url: "api/service/MovieService.php",
    //         method: "GET",
    //         async: true,
    //         dataType:"json"
    //     }).done(function (resp) {
    //         for(var i in resp){
    //             var tempA=resp[i];
    //
    //             // alert(tempA);
    //             //
    //             let img =" <img  style='margin-left: 15%;width: 200px;height: 300px' src='"+tempA[5]+"'>"
    //             let name="<div style='margin-left: 15%'><b>"+tempA[1]+"</div>"
    //             let category="<div style='margin-left: 15%'><i>"+tempA[2]+"</div>"+"<br>"+"<br>"
    //             let discription="<div style='margin-left: 10%'>"+tempA[3]+"</div>"+"<br>"+"<br>"+"<br>"+"<br>"
    //
    //             // let row3 = "<a href='"+tempA[5]+"'><button>Watch Now</button></a>"
    //             let movie= "<iframe style='margin-left: 10%' width=\"600\" height=\"310\" src=\'"+tempA[4]+"' frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>"
    //
    //             // let movie= "<iframe style='margin-left: 10%' ' width=\"300\" height=\"125\" src=\'"+tempA[5]+"' frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>"+"<br>"+"<br>"
    //             // let rate="<button  class=\"btn btn-outline-success my-2 my-sm-0\" id=\"btnRate\" type=\"button\">Rate</button>\n"
    //
    //
    //             $('#apeone').append(img);
    //             $('#apeone').append(name);
    //             $('#apeone').append(category);
    //             $('#apeDis').append(discription);
    //             $('#apefour').append(movie);
    //
    //         }
    //
    //     });
    //
    // }
    loadvieos();
</script>




</body>

</html>