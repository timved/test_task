<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 19.08.2019
 * Time: 21:12
 */

include 'Preview.php';
include 'Settings.php';

$settings = new Settings;
$str = ['Hello world5! автомобиль, слово...'];
$preview = new Preview($settings);
$out = $preview->getPreview($str);
var_dump($out);
