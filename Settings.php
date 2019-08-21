<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 21.08.2019
 * Time: 20:53
 */

include 'SettInterface.php';

class Settings implements SettInterface
{
    protected $length = 20 ;

    protected $stopWords = [
        'Автомобиль',
        'world2',
        'слово'
    ];

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getStopWords()
    {
        return $this->stopWords;
    }

    /**
     * @param mixed $stopWords
     */
    public function setStopWords($stopWords)
    {
        $this->stopWords = $stopWords;
    }



}