<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/24/19
 * Time: 1:20 PM
 */

class DBConnection
{
    private $host="127.0.0.1";
    private $userName="root";
    private $password="1234";
    private $database="movieRating";
    private $port="3306";
    private $connection;

    /**
     * DBConnction constructor.
     */
    public function __construct()
    {
        $this->connection=new mysqli($this->host,$this->userName,$this->password,$this->database,$this->port);
    }

    public function getDBConnection(){
        return $this->connection;
    }

}