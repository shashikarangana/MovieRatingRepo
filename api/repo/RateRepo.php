<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/26/19
 * Time: 11:15 AM
 */
require_once __DIR__."/../core/Rate.php";

interface RateRepo
{
    public function setConnection(mysqli $connection): void;

    public function addRate(Rate $rate): bool;

    public function updateRate(Rate $rate): bool;

    public function deleteRate(string $name): bool;

    public function searchRate(string $name): array;

    public function getAllRate(): array;


}