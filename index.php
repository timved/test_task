<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 19.08.2019
 * Time: 21:12
 */
declare(strict_types=1);
include 'Preview.php';
include 'Settings.php';

/**
 * @var Settings $settings
 */
$settings = new Settings(10,
    [
    'Автомобиль',
        'world2',
        'слово1'
]
);

/**
 * @var array $str
 */
$str = ['Sed ut perspiciatis автомобиль, unde iste  error sit voluptatem'];

/**
 * @var Preview $preview
 *
 */
$preview = new Preview($settings);

/**
 * @var array $out
 */
$out = $preview->getPreview($str);

var_dump($out);
