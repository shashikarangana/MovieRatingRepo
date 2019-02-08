<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/26/19
 * Time: 11:14 AM
 */
require_once __DIR__."/../../core/Rate.php";
require_once __DIR__."/../../bo/RateBo.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/RateRepoImpl.php";

class RateBoImpl implements RateBo
{

    public function addRate(Rate $rate): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $rateRepo = new RateRepoImpl();
        $rateRepo->setConnection($connection);

        return $rateRepo->addRate($rate);

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

    public function getAll(): array
    {
        // TODO: Implement getAll() method.
    }
}