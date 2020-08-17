<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 23.05.2019
 * Time: 23:12
 */
function HowManyBetween($x, $y) {
    if (! is_numeric($x) || ! is_numeric($y)) return 'Функция принимает только числовые значения';

    $number = $x - $y;

    return abs($number);
}
echo HowManyBetween(13, 12);