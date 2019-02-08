<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/24/19
 * Time: 1:19 PM
 */

require_once __DIR__."/../../core/Movie.php";
require_once __DIR__."/../../bo/MovieBo.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/MovieRepoImpl.php";

class MovieBoImpl implements MovieBo
{

    public function addMovie(Movie $movie): bool
    {

        $connection=(new DBConnection())->getDBConnection();
        $movieRepo=new MovieRepoImpl();
        $movieRepo->setConnection($connection);

        return $movieRepo->addMovie($movie);

    }

    public function updateMovie(Movie $movie): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $movieRepo = new MovieRepoImpl();
        $movieRepo->setConnection($connection);
        return $movieRepo->updateMovie($movie);
    }

    public function deleteMovie(string $name): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $movieRepo = new MovieRepoImpl();
        $movieRepo->setConnection($connection);
        return $movieRepo->deleteMovie($name);
    }

    public function searchMovie(string $name): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $movieRepo = new MovieRepoImpl();
        $movieRepo->setConnection($connection);
        return $movieRepo->searchMovie($name);
    }

    public function searchMovieByCatogory(string $name): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $movieRepo = new MovieRepoImpl();
        $movieRepo->setConnection($connection);
        return $movieRepo->searchMovieByCatogory($name);
    }

    public function searchMovieByName(string $name): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $movieRepo = new MovieRepoImpl();
        $movieRepo->setConnection($connection);
        return $movieRepo->searchMovieByName($name);
    }

    public function getAll(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $movieRepo=new MovieRepoImpl();
        $movieRepo->setConnection($connection);

        return $movieRepo->getAll();
    }
}