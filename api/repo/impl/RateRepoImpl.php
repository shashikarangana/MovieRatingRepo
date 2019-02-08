<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/26/19
 * Time: 11:20 AM
 */

require_once __DIR__."/../../core/Rate.php";
require_once __DIR__."/../../repo/RateRepo.php";

class RateRepoImpl implements RateRepo
{
    private $connection;


    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addRate(Rate $rate): bool
    {
        $resp=$this->connection->query("INSERT INTO rate VALUES(
                        {$rate->getRateId()},
                        {$rate->getMovieId()},
                        {$rate->getRateCount()})");

        echo mysqli_error($this->connection);
        return $resp;
    }

    public function updateRate(Rate $rate): bool
    {
        // TODO: Implement updateRate() method.
    }

    public function deleteRate(string $name): bool
    {
        // TODO: Implement deleteRate() method.
    }

    public function searchRate(string $name): array
    {
        // TODO: Implement searchRate() method.
    }

    public function getAllRate(): array
    {
        // TODO: Implement getAllRate() method.
    }
}