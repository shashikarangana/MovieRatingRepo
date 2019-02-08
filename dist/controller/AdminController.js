


$('#btnAdd').click(function () {
    let movieForm=$(`#movieMgtForm`).serializeArray();
    $.ajax({
        url:"api/service/MovieService.php",
        method:"POST",
        async:true,
        data:movieForm
    }).done(function (r) {
        // alert(r);
        if (r==true){
            alert("New Movie added Successfully!");
            loadMovies();
            movieTextClear();
        } else{
            alert("Somthing went wrong !");
        }
    });
    // let movieForm=$(`#movieMgtForm`).serializeArray();
    // $.ajax({
    //     url:"api/service/MovieService.php",
    //     method:"POST",
    //     async:true,
    //     data:movieForm
    // }).done(function (r) {
    //     alert(r);
    //
    // });
});


// $("#btnAddMovie").click(function () {
//
//     let mName=$('#movieName').val();
//     let catogory=$('#selectCatogoryName').val();
//     let description=$('#description').val();
//     let movieUrl=$('#movieUrl').val();
//     let imageUrl=$('#imageUrl').val();
//     let derector=$('#derector').val();
//
//     if (!/^[a-zA-Z ]+$/.test(mName)) {
//         $('#movieName').focus();
//         $('#movieName').css("border", "1px solid red");
//         return;
//     }
//     if (!/^[a-zA-Z]+$/.test(catogory)) {
//         $('#selectCatogoryName').focus();
//         $('#selectCatogoryName').css("border", "1px solid red");
//         return;
//     }
//     if (!/^[a-zA-Z]+$/.test(description)) {
//         $('#description').focus();
//         $('#description').css("border", "1px solid red");
//         return;
//     }
//     // if (!/^[A-Z]{2}[0-9]+$/.test(movieUrl)) {
//     //     $('#movieUrl').focus();
//     //     $('#movieUrl').css("border", "1px solid red");
//     //     return;
//     // }
//     // if (!/^[a-z]{2}[A-Z]+[0-9]{4}$/.test(imageUrl)) {
//     //     $('#imageUrl').focus();
//     //     $('#imageUrl').css("border", "1px solid red");
//     //     return;
//     // }
//     if (!/^[a-zA-Z]+$/.test(derector)) {
//         $('#derector').focus();
//         $('#derector').css("border", "1px solid red");
//         return;
//     }
//
//
//     $('#movieName').css("border", "1px solid #50ec40");
//     $('#selectCatogoryName').css("border", "1px solid #50ec40");
//     $('#description').css("border", "1px solid #50ec40");
//     $('#movieUrl').css("border", "1px solid #50ec40");
//     $('#imageUrl').css("border", "1px solid #50ec40");
//     $('#derector').css("border", "1px solid #50ec40");
//
//



$('#btnMovieCancel').click(function () {
    $("#movieName").val("");
    $("#selectCatogoryName").val("");
    $("#description").val("");
    $("#movieUrl").val("");
    $("#imageUrl").val("");
    $("#derector").val("");
});

function movieTextClear() {
    $("#movieName").val("");
    $("#selectCatogoryName").val("");
    $("#description").val("");
    $("#movieUrl").val("");
    $("#imageUrl").val("");
    $("#derector").val("");
}
function loadMovies(){
    let load=$('#movieId').serializeArray();
    $.ajax({
        url: "api/service/MovieService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data:load
    }).done(function (r) {
        $('#tblMovie').empty();
        for (var i in r) {
            var tempA = r[i];
            let row = "<tr><td>" + tempA[0] + "</td><td>" + tempA[1] + "</td><td>" + tempA[2] + "</td><td>" + tempA[3] + "</td><td>" + tempA[4] + "</td><td>" + tempA[5] + "</td><td>" + tempA[6] + "</td></tr>";
            $('#tblMovie').append(row);
        }
    });
}
$(document).ready(function () {
    loadMovies();


});

$("#btnMovieSearch").click(function () {
    let regiNo=$("#vehicle_name_search").val();

    if (!/^[a-z]{2}[A-Z]+[0-9]{4}$/.test(regiNo)) {
        $('#vehicle_name_search').focus();
        $('#vehicle_name_search').css("border", "1px solid red");
        return;
    }
    $('#register_no').css("border", "1px solid #50ec40");
    let vehicleSearch = $("#vehicle_name_search").serializeArray();
    vehicleSearch.push({"name": "operation", "value": "Search"});
    $.ajax({
        url: "api/service/VehicleService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data: vehicleSearch
    }).done(function (r) {
        if (r.length!=0){
            $('#vehicle_id').val(r[0][0]);
            $('#vehicle_name').val(r[0][1]);
            $('#chasi_no').val(r[0][4]);
            $('#engin_no').val(r[0][5]);
            $('#selectModelName').val(r[0][3]).change();
            $('#register_no').val(r[0][2]);
            $('#color').val(r[0][6]);
            $('#price_day').val(r[0][7]);
        } else {
            alert("There is no such Vehicle! ");
        }
    });
});


$("#btnRemoveMovie").click(function () {

    let movieId=$('#movieId').val();

    if (!/^[0-9]+$/.test(movieId)) {
        $('#movieId').focus();
        $('#movieId').css("border", "1px solid red");
        alert("Please Search and Select Vehicle to Delete !");
        return;
    }
    $('#movieId').css("border", "1px solid #50ec40");
    let deleteMovie = $("#movieName").serializeArray();
    deleteMovie.push({"name": "operation", "value": "Delete"});
    $.ajax({
        url: "api/service/MovieService.php",
        method: "POST",
        async: true,
        data: deleteMovie
    }).done(function (r) {
        if (r == true) {
            alert("Movie Deleted Successfully!");
            loadMovies();
            movieTextClear();
        } else {
            alert("Somthing went wrong !");
        }
    });
});



$("#btnUpdateMovie").click(function () {
    let mId=$('#movieId').val();
    let mName=$('#movieName').val();
    let catogory=$('#selectCatogoryName').val();
    let description=$('#description').val();
    let movieUrl=$('#movieUrl').val();
    let imageUrl=$('#imageUrl').val();
    let derector=$('#derector').val();

    if (!/^[0-9]+$/.test(mId)) {
        $('#movieId').focus();
        $('#movieId').css("border", "1px solid red");
        alert("Please serach and select movie to delete!");
        return;
    }

    if (!/^[a-zA-Z ]+$/.test(mName)) {
        $('#movieName').focus();
        $('#movieName').css("border", "1px solid red");
        return;
    }
    if (!/^[a-zA-Z]+$/.test(catogory)) {
        $('#selectCatogoryName').focus();
        $('#selectCatogoryName').css("border", "1px solid red");
        return;
    }
    if (!/^[a-zA-Z]+$/.test(description)) {
        $('#description').focus();
        $('#description').css("border", "1px solid red");
        return;
    }
    if (!/^[a-zA-Z]+$/.test(derector)) {
        $('#derector').focus();
        $('#derector').css("border", "1px solid red");
        return;
    }

    $('#movieName').css("border", "1px solid #50ec40");
    $('#selectCatogoryName').css("border", "1px solid #50ec40");
    $('#description').css("border", "1px solid #50ec40");
    $('#movieId').css("border", "1px solid #50ec40");
    $('#movieUrl').css("border", "1px solid #50ec40");
    $('#imageUrl').css("border", "1px solid #50ec40");
    $('#derector').css("border", "1px solid #50ec40");

    let movieUpdate = $("#movieForm").serializeArray();
    movieUpdate.push({name: "operation", value: "Update"});
    $.ajax({
        url: "api/service/MovieService.php",
        method: "POST",
        async: true,
        data: movieUpdate
    }).done(function (r) {
        if (r == true) {
            alert("Movie Updated Successfully!");
            loadMovies();
            movieTextClear();
        } else {
            alert("Somthing went wrong !");
        }
    });
});
