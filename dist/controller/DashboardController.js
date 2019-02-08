$('#btnSearch').click(function () {
    $('#movie').css("display",'none');
    $('#newmovie').css("display",'block');
})

function loadvieos() {
    $.ajax({
        url: "api/service/MovieService.php",
        method: "GET",
        async: true,
        dataType:"json"
    }).done(function (resp) {
        for(var i in resp){
            var tempA=resp[i];
            $('#movies').append('<div id="big" class="row">\n' +
                '                <div class="col-xl-3">\n' +
                '                    <img src="'+tempA[5]+'" width="100px" height="150px">\n' +
                '                    <div style=\'margin-left: 15%\'>'+tempA[1]+'</div>\n' +
                '                    <div style=\'margin-left: 15%\'>'+tempA[2]+'</div>\n' +
                '                </div>\n' +
                '                <div class="col-xl-6">'+tempA[3]+'</div>\n' +
                '                <div class="col-xl-2">\n' +
                '                    <button class="btn btn-outline-success temp" id="'+tempA[1]+'">Watch</button>\n' +
                '                </div>\n' +
                '            </div>');
        }

    });


    $('div#movies').on("click","button.temp",function () {
        let movieName=this.id;
        $.ajax({
            url: "api/service/MovieService.php",
            method: "GET",
            async: true,
            dataType:"json"
        }).done(function (resp) {
            for(var i in resp){
                var tempA=resp[i];
                if (tempA[1] == movieName){

                    window.location ="videoplayer.php?movieName="+tempA[1];
                }
            }
        });
    });

}



//
// $('#btnSearch').click(function () {
//     $.ajax({
//         url: "api/service/UploadService.php",
//         method: "GET",
//         async: true,
//         dataType:"json"
//     }).done(function (resp) {
//         var name = $('#txtName').val();
//         for (var i in resp) {
//             var tempA = resp[i];
//             if(name==tempA[1]){
//                 let img =" <img  style='margin-left: 15%;width: 100px;height: 100px;margin-right: 0' src='"+tempA[4]+"'>"+"<br>"+"<br>"
//                 let name="<div style='margin-left: 15%'><b>"+tempA[1]+"</div>"
//                 let category="<div style='margin-left: 15%'><i>"+tempA[2]+"</div>"+"<br>"
//                 let discription="<div style='margin-left: 15%'>"+tempA[3]+"</div>"+"<br>"+"<br>"+"<br>"
//
//                 let movie= "<iframe style='margin-left: 10%' ' width=\"300\" height=\"125\" src=\'"+tempA[5]+"' frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>"+"<br>"
//
//
//                 $('#image').append(img);
//                 $('#image').append(name);
//                 $('#image').append(category);
//                 $('#discription').append(discription);
//                 $('#video').append(movie);
//             }
//         }
//
//         $('#txtName').val("");
//     });
//
// }) ;
