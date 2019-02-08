<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/24/19
 * Time: 1:20 PM
 */

require_once __DIR__."/../core/Movie.php";

interface MovieRepo
{
    public function setConnection(mysqli $connection): void;

    public function addMovie(Movie $movie): bool;

    public function updateMovie(Movie $movie): bool;

    public function deleteMovie(string $name): bool;

    public function searchMovie(string $name): array;

    public function searchMovieByName(string $name): array;

    public function searchMovieByCatogory(string $name): array;

    public function getAll(): array;

}