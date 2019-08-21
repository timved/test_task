<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 21.08.2019
 * Time: 18:53
 */

use PHPUnit\Framework\TestCase;

include 'Preview.php';
include 'Settings.php';

class PreviewTest extends TestCase
{
    protected $preview;

    protected $settings;

    protected function setUp() : void
    {
        $this->settings = new Settings();

        $this->preview = new Preview($this->settings);
    }

    protected function tearDown() : void
    {
        $this->preview = NULL;
    }

    public function testGetPreview()
    {
        $result = $this->preview->getPreview(['Hello world! автомобиль, тратата?','']);
        $resultArray = explode(" " , $result);
        $this->assertEquals(2, count($resultArray));
    }

}