<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/24/19
 * Time: 1:19 PM
 */

class Movie
{
    private $movieId;
    private $movieName;
    private $catogory;
    private $description;
    private $movieUrl;
    private $imageUrl;
    private $derector;

    /**
     * Movie constructor.
     * @param $movieId
     * @param $movieName
     * @param $catogory
     * @param $description
     * @param $movieUrl
     * @param $imageUrl
     * @param $derector
     */
    public function __construct($movieId, $movieName, $catogory, $description, $movieUrl, $imageUrl, $derector)
    {
        $this->movieId = $movieId;
        $this->movieName = $movieName;
        $this->catogory = $catogory;
        $this->description = $description;
        $this->movieUrl = $movieUrl;
        $this->imageUrl = $imageUrl;
        $this->derector = $derector;
    }

    /**
     * @return mixed
     */
    public function getMovieId()
    {
        return $this->movieId;
    }

    /**
     * @param mixed $movieId
     */
    public function setMovieId($movieId)
    {
        $this->movieId = $movieId;
    }

    /**
     * @return mixed
     */
    public function getMovieName()
    {
        return $this->movieName;
    }

    /**
     * @param mixed $movieName
     */
    public function setMovieName($movieName)
    {
        $this->movieName = $movieName;
    }

    /**
     * @return mixed
     */
    public function getCatogory()
    {
        return $this->catogory;
    }

    /**
     * @param mixed $catogory
     */
    public function setCatogory($catogory)
    {
        $this->catogory = $catogory;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getMovieUrl()
    {
        return $this->movieUrl;
    }

    /**
     * @param mixed $movieUrl
     */
    public function setMovieUrl($movieUrl)
    {
        $this->movieUrl = $movieUrl;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getDerector()
    {
        return $this->derector;
    }

    /**
     * @param mixed $derector
     */
    public function setDerector($derector)
    {
        $this->derector = $derector;
    }




}