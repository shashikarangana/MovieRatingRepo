<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/24/19
 * Time: 2:02 PM
 */

require_once __DIR__."/../bo/impl/MovieBoImpl.php";
require_once __DIR__."/../core/Movie.php";

$movieBO = new MovieBoImpl();

$method = $_SERVER["REQUEST_METHOD"];

switch ($method){
    case "GET";
    echo json_encode($movieBO->getAll() );
    break;


    case "POST";
    $addMovieId = $_POST["mId"];
    $addMovieName = $_POST["mName"];
    $addCatogory = $_POST["mCatogory"];
    $addDescription = $_POST["descrip"];
    $addMovieUrl = $_POST["mUrl"];
    $addImageUrl = $_POST["iUrl"];
    $addDerector = $_POST["derector"];


    $temp = new Movie($addMovieId,$addMovieName,$addCatogory,$addDescription,$addMovieUrl,$addImageUrl,$addDerector);

    $resp = $movieBO->addMovie($temp);
    echo $resp;
    break;

}