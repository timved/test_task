<?php

declare(strict_types=1);


/**
 * Class PreviewSetting
 */
abstract class PreviewSetting
{
    /**
     * @var int|null
     */
    protected $length;

    /**
     * @var array|null
     */
    protected  $stopWords;

    /**
     * PreviewSetting constructor.
     * @param int|null $length
     * @param array|null $stopWords
     */
    public function __construct(int $length = null, array $stopWords = null)
    {
        $this->length = $length;
        $this->stopWords = $stopWords;
    }

    /**
     * @return int|null
     */
    abstract public function getLength() : ?int;

    /**
     * @return array|null
     */
    abstract public function getStopWords() : ?array;

}