<?php
/**
 * Created by IntelliJ IDEA.
 * User: shashika
 * Date: 1/26/19
 * Time: 11:14 AM
 */

class Rate
{
    private $rateId;
    private $movieId;
    private $rateCount;

    /**
     * Rate constructor.
     * @param $rateId
     * @param $movieId
     * @param $movieName
     * @param $rateCount
     */
    public function __construct($rateId, $movieId,  $rateCount)
    {
        $this->rateId = $rateId;
        $this->movieId = $movieId;
        $this->rateCount = $rateCount;
    }

    /**
     * @return mixed
     */
    public function getRateId()
    {
        return $this->rateId;
    }

    /**
     * @param mixed $rateId
     */
    public function setRateId($rateId): void
    {
        $this->rateId = $rateId;
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
    public function setMovieId($movieId): void
    {
        $this->movieId = $movieId;
    }


    /**
     * @return mixed
     */
    public function getRateCount()
    {
        return $this->rateCount;
    }

    /**
     * @param mixed $rateCount
     */
    public function setRateCount($rateCount): void
    {
        $this->rateCount = $rateCount;
    }



}