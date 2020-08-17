<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 25.05.2019
 * Time: 19:10
 */

$days = [
    'ru' => [1 => 'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб', 7 => 'вс'],
    'en' => [1 => 'mo', 2 => 'tu', 3 => 'we', 4 => 'th', 5 => 'fr', 6 => 'sa', 7 => 'su'],
    ];
$lang = 'en';
$day = 3;
echo $days[$lang][$day];
