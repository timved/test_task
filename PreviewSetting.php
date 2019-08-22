<?php

declare(strict_types=1);
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

    public function __construct(int $length = null, array $stopWords = null)
    {
        $this->length = $length;
        $this->stopWords = $stopWords;
    }

    abstract public function getLength() : ?int;

    abstract public function getStopWords() : ?array;

}