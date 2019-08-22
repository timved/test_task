<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 21.08.2019
 * Time: 20:53
 */

declare(strict_types=1);

include 'PreviewSetting.php';

/**
 * Class Settings
 */
class Settings extends PreviewSetting
{
    /**
     * @return int|null
     */
    public function getLength() : ?int
    {
        return $this->length;
    }


    /**
     * @return array|null
     */
    public function getStopWords() : ?array
    {
        return $this->stopWords;
    }





}