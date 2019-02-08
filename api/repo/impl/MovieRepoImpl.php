<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/24/19
 * Time: 1:21 PM
 */

require_once __DIR__."/../../repo/MovieRepo.php";
require_once __DIR__."/../../core/Movie.php";

class MovieRepoImpl implements MovieRepo
{

    private $connection;

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addMovie(Movie $movie): bool
    {
        $resp=$this->connection->query("INSERT INTO movie VALUES(
                         {$movie->getMovieId()},
                           '{$movie->getMovieName()}',
                           '{$movie->getCatogory()}',
                           '{$movie->getDescription()}',
                           '{$movie->getMovieUrl()}',
                         '{$movie->getImageUrl()}',
                           '{$movie->getDerector()}')");

        echo mysqli_error($this->connection);
        return $resp;
    }

    public function updateMovie(Movie $movie): bool
    {
        $resp= $this->connection->query("UPDATE movie SET 
                   movieName='{$movie->getMovieName()}',
                   catogory='{$movie->getCatogory()}',
                   description='{$movie->getDescription()}',
                   movieUrl='{$movie->getMovieUrl()}',
                   imageUrl='{$movie->getImageUrl()}',
                   derector={$movie->getDerector()} WHERE movieId={$movie->getMovieId()}");
        return ($resp>0);
    }

    public function deleteMovie(string $name): bool
    {
        $resp= $this->connection->query("DELETE FROM movie WHERE movieName='{$name}'");
        return ($resp>0);
    }

    public function searchMovie(string $name): array
    {

    }
    public function searchMovieByName(string $name): array
    {
        $resultSet=$this->connection->query("Select movieId,movieName,catogory,description,movieUrl,imageUrl from Movie  where movieName='{$name}'");
        return $resultSet->fetch_all();
    }

    public function searchMovieByCatogory(string $name): array
    {
        // TODO: Implement searchMovieByCatogory() method.
    }

    public function getAll(): array
    {

        $resultSet=$this->connection->query("SELECT * FROM movie");
        return $resultSet->fetch_all();
    }
}