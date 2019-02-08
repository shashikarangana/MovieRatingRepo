
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="icon" href="dist/img/1513347197_rP23tE_big(52).jpg">
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
                    <h5 class="navbar-brand logo-text">AZ<span class="primery-color">Movies</span><span class="your_area">  |  Admin Panel</span></h5>
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
            <img class="d-block w-100" src="dist/img/alone-in-the-dark-hd-wallpapers-32736-4960031.jpg" alt="First slide">
            <div class="carousel-caption-modified d-none d-md-block">
                <h1 class="main-caption fadeInUp">Admin<span class="primery-color"> Panel</span></h1>
                <h5 class="font-weight-bold main-paragraph fadeInUp-slow">Control</h5>
            </div>
        </div>
    </div>
</div>

<div class="row panel-size row-margin-0"></div>
<section id="movie_heading" class="row row-margin-0 panel-size-4">
    <section class="col-xl-1 col-sm-1"></section>
    <section class="col-xl-10 col-sm-10">
        <h1 id="book_vehicle" class="vehicle-font">Movie Management Section</h1>
    </section>
    <section class="col-xl-1 col-sm-1"></section>
</section>

<section id="form_section" class="row row-margin-0">
    <section class="col-xl-2 col-sm-1"></section>
    <section class="col-xl-8 col-sm-10 border-shadow" style="padding: 45px">
        <h1 style="padding-bottom: 31px">Add new Movie !</h1>

        <form id="movieMgtForm" action="">
            <div class="form-row">

                <div class="form-group col-md-1">
                    <label for="movieId">Movie Id</label>
                    <input type="text" class="form-control-for_text_felids" name="mId" id="movieId" placeholder="Movie ID" >
<!--                    readonly="readonly"-->
                </div>

                <div class="form-group col-md-5">
                    <label for="movieName">Movie Name</label>
                    <input type="text" class="form-control-for_text_felids" name="mName" id="movieName" placeholder="Movie Name" >
                </div>

                <div class="form-group col-md-4">
                    <label for="selectCatogoryName">Catogory</label>
                    <select id="selectCatogoryName" name="mCatogory" class="form-control-for_text_felids " >
                        <option>Adventure</option>
                        <option>Comedy</option>
                        <option>Fantasy</option>
                        <option>Romance</option>
                        <option>Thriller</option>
                        <option>Western</option>
                        <option>Action</option>
                        <option>Animation</option>
                    </select>
                </div>
<!--                <div class="form-group col-md-2">-->
<!--           -->
<!--                   <button type="button" class="btn btn-success btn-lg float-right margin-top" id="btn_new_model">Catogory</button>-->
<!--                </div>-->
            </div>

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-control-for_text_felids" name="descrip" id="description" placeholder="Desccription">
                </div>

                <div class="form-group col-md-3">
                    <label for="movieUrl">Movie Url</label>
                    <input type="text" class="form-control-for_text_felids" name="mUrl" id="movieUrl" placeholder="Movie Url">
                </div>

                <div class="form-group col-md-3">
                    <label for="imageUrl">Image Url</label>
                    <input type="text" class="form-control-for_text_felids" name="iUrl" id="imageUrl" placeholder="Image Url">
                </div>

                <div class="form-group col-md-3">
                    <label for="derector">Derector</label>
                    <input type="text" class="form-control-for_text_felids" name="derector" id="derector" placeholder="Derector">
                </div>

            </div>

            <button type="button" class="btn btn-dark btn-lg float-right" id="btnMovieCancel">Cancel</button>

            <button type="button" class="btn btn-info btn-lg float-right" id="btnLoadVehicles" style="margin-right: 4px">Load All</button>

            <button type="button" class="btn btn-info btn-lg float-right" id="btnUpdateMovie" style="margin-right: 4px">Update</button>

            <button type="button" class="btn btn-info btn-lg float-right" id="btnRemoveMovie" style="margin-right: 4px">Remove</button>

            <button type="button" class="btn btn-success btn-lg float-right" id="btnAdd" style="margin-right: 4px">Add</button>


            <!--            SEARCH FORM-->
            <div class="form-group">

                <button type="button" id="btnOpenMovieSearch" class="btn btn-info btn-lg float-right" style="margin-right: 4px" data-toggle="modal" data-target="#exampleVehicleCenter">Search</button>
                <div class="modal fade" id="exampleVehicleCenter" tabindex="-1" role="dialog" aria-labelledby="exampleMovieCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="searchMovie">Search Movie</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <form>
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="movie_name_search" name="searchMoviePopUp" placeholder="Search Movie By Name">
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="btnMovieSearch">Search Movie</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </section>
    <section class="col-xl-2 col-sm-1"></section>
</section>


<div id="space_between_vehicle_and_tbl" class="row panel-size row-margin-0"></div>
<!--TABLE SECTION-->
<!--<div id="tbl_section_movie" class="row  row-m  argin-0 ">-->
<!--    <section class="col-xl-1 col-sm-1"></section>-->
<!--    <section class="col-xl-10 col-sm-10">-->
<!--        <table class="table table-hover ">-->
<!--            <thead class="thead-dark">-->
<!--            <tr>-->
<!--                <th scope="col">Movie ID</th>-->
<!--                <th scope="col">Movie Name</th>-->
<!--                <th scope="col">Catogoty</th>-->
<!--                <th scope="col">Description</th>-->
<!--                <th scope="col">Vedio Url</th>-->
<!--                <th scope="col">Image Url</th>-->
<!--                <th scope="col">Derectot</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody id="tblMovie">-->
<!--            </tbody>-->
<!--        </table>-->
<!---->
<!--    </section>-->
<!--    <section class="col-xl-1 col-sm-1"></section>-->
<!--</div>-->

<!--Add new Model-->
<!--<section id="catogory_headding" class="row row-margin-0 panel-size-4 display-none">-->
<!--    <section class="col-xl-1 col-sm-1"></section>-->
<!--    <section class="col-xl-10 col-sm-10">-->
<!--        <h1 id="cms" class="vehicle-font">Catogory Management Section</h1>-->
<!--    </section>-->
<!--    <section class="col-xl-1 col-sm-1"></section>-->
<!--</section>-->
<!--<section id="model_form" class="row row-margin-0 display-none">-->
<!--    <section class="col-xl-2 col-sm-1"></section>-->
<!--    <section class="col-xl-8 col-sm-10 border-shadow" style="padding: 45px">-->
<!--        <h1 style="padding-bottom: 31px">Add new Model !</h1>-->
<!--        <form id="modelForm">-->
<!--            <div class="form-row">-->
<!--                <div class="form-group col-md-1">-->
<!--                    <label>M_ID</label>-->
<!--                    <input type="text" class="form-control-for_text_felids" id="m_id" name="mid" placeholder="1">-->
<!--                </div>-->
<!--                <div class="form-group col-md-5">-->
<!--                    <label>Model Name</label>-->
<!--                    <input type="text" class="form-control-for_text_felids" id="m_name" name="mName" placeholder="SUV">-->
<!--                </div>-->
<!--                <div class="form-group col-md-6">-->
<!--                    <label>Description</label>-->
<!--                    <input type="text" class="form-control-for_text_felids" id="m_description" name="mDescrip"-->
<!--                           placeholder="About this model">-->
<!--                </div>-->
<!--            </div>-->
<!--            <button type="button" class="btn btn-dark btn-lg float-right" id="btn_Cancel_model">Cancel</button>-->
<!--            <button type="button" class="btn btn-success btn-lg float-right" id="btn_add_Model"-->
<!--                    style="margin-right: 4px">Add-->
<!--            </button>-->
<!--            <button type="button" class="btn btn-info btn-lg float-right" id="btn_Update_Model"-->
<!--                    style="margin-right: 4px">Update-->
<!--            </button>-->
<!--            <button type="button" class="btn btn-info btn-lg float-right" id="btn_Load_model" style="margin-right: 4px">-->-->
<!--              Load All-->-->
<!--           </button>-->-->
<!--            <button type="button" class="btn btn-info btn-lg float-right" id="btn_Remove_model"-->
<!--                    style="margin-right: 4px">Remove-->
<!--            </button>-->
<!--            <div class="form-group">-->
<!--                <button type="button" id="btnOpenItemSearch" class="btn btn-info btn-lg float-right"-->
<!--                        style="margin-right: 4px" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--                    Search-->
<!--                </button>-->
<!--                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"-->
<!--                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->
<!--                    <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--                        <div class="modal-content">-->
<!--                            <div class="modal-header">-->
<!--                                <h5 class="modal-title" id="searchModel">Search Model</h5>-->
<!--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                    <span aria-hidden="true">&times;</span>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                            <div class="modal-body">-->
<!--                                <form>-->
<!--                                    <div class="form-group ">-->
<!--                                        <input type="text" class="form-control" id="model_name_search"-->
<!--                                               name="search_model" placeholder="Search Model By Name">-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                            <div class="modal-footer">-->
<!--                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                                <button type="button" class="btn btn-primary" id="btnModelSearch">Search Model</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->        //
<!--        // $('#movieName').css("border", "1px solid #50ec40");-->
<!--        // $('#selectCatogoryName').css("border", "1px solid #50ec40");-->
<!--        // $('#description').css("border", "1px solid #50ec40");-->
<!--        // $('#movieUrl').css("border", "1px solid #50ec40");-->
<!--        // $('#imageUrl').css("border", "1px solid #50ec40");-->
<!--        // $('#derector').css("border", "1px solid #50ec40");-->

<!--        </form>-->
<!--    </section>-->
<!--    <section class="col-xl-2 col-sm-1"></section>-->
<!--</section>-->
<!--<div id="space_between_model_and_tbl" class="row panel-size row-margin-0 display-none"></div>-->
<!--<div id="tbl_model_section" class="row  row-margin-0 display-none">-->
<!--    <section class="col-xl-1 col-sm-1"></section>-->
<!--    <section class="col-xl-10 col-sm-10">-->
<!--        <table class="table table-hover ">-->
<!--            <thead class="thead-dark">-->
<!--            <tr>-->
<!--                <th scope="col">M_ID</th>-->
<!--                <th scope="col">Model_Name</th>-->
<!--                <th scope="col">Model_Description</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody id="modelTbl">-->
<!---->
<!--            </tbody>-->
<!--        </table>-->
<!---->
<!--    </section>-->
<!--    <section class="col-xl-1 col-sm-1"></section>-->
<!--</div>-->
<!---->

<!--<script type="application/javascript" src="/dist/js/jquery-3.3.1.min.js"></script>-->
<!--<script type="application/javascript" src="dist/js/bootstrap.min.js"></script>-->
<!--<script rel="script" type="application/javascript" src="dist/js/TabController.js"></script>-->
<?php require_once "footer.php"; ?>

<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/controller/AdminController.js"></script>




<script>


    // let mName=$('#movieName').val();
    // let catogory=$('#selectCatogoryName').val();
    // let description=$('#description').val();
    // let movieUrl=$('#movieUrl').val();
    // let imageUrl=$('#imageUrl').val();
    // let derector=$('#derector').val();

    // if (!/^[a-zA-Z ]+$/.test(mName)) {
    //     $('#movieName').focus();
    //     $('#movieName').css("border", "1px solid red");
    //     return;
    // }
    // if (!/^[a-zA-Z]+$/.test(catogory)) {
    //     $('#selectCatogoryName').focus();
    //     $('#selectCatogoryName').css("border", "1px solid red");
    //     return;
    // }
    // if (!/^[a-zA-Z]+$/.test(description)) {
    //     $('#description').focus();
    //     $('#description').css("border", "1px solid red");
    //     return;
    // }
    // // if (!/^[A-Z]{2}[0-9]+$/.test(movieUrl)) {
    // //     $('#movieUrl').focus();
    // //     $('#movieUrl').css("border", "1px solid red");
    // //     return;
    // // }
    // // if (!/^[a-z]{2}[A-Z]+[0-9]{4}$/.test(imageUrl)) {
    // //     $('#imageUrl').focus();
    // //     $('#imageUrl').css("border", "1px solid red");
    // //     return;
    // // }
    // if (!/^[a-zA-Z]+$/.test(derector)) {
    //     $('#derector').focus();
    //     $('#derector').css("border", "1px solid red");
    //     return;
    // }

    //
    // $('#movieName').css("border", "1px solid #50ec40");
    // $('#selectCatogoryName').css("border", "1px solid #50ec40");
    // $('#description').css("border", "1px solid #50ec40");
    // $('#movieUrl').css("border", "1px solid #50ec40");
    // $('#imageUrl').css("border", "1px solid #50ec40");
    // $('#derector').css("border", "1px solid #50ec40");

    // $('#btnAdd').click(function () {
    //     let movieForm=$('#movieMgtForm').serializeArray();
    //     $.ajax({
    //         url:"api/service/MovieService.php",
    //         method:"POST",
    //         async:true,
    //         data:movieForm
    //     }).done(function (r) {
    //         alert(r);
    //
    //     });
    // });

</script>

</body>
</html>