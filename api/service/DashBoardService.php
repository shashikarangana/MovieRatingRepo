<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/25/19
 * Time: 9:03 PM
 */


require_once __DIR__."/../bo/impl/RateBoImpl.php";
require_once __DIR__."/../core/Rate.php";

$rateBo=new RateRepoImpl();
$method=$_SERVER["REQUEST_METHOD"];

switch ($method){
    case "GET";
//        echo json_encode($rateBo->getAll());
//        echo ($rateBo);
        break;

    case "POST":
        $addRateId = $_POST["rateId"];
        $addMovieId = $_POST["movieId"];
        $addRateCount = $_POST["rateCount"];

        $temp = new Rate($addRateId,$addMovieId,$addRateCount);
        $resp = $rateBo->addRate($temp);
        echo $resp;
        break;
}