<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 23.05.2019
 * Time: 22:56
 */

$arr = ["a" => 12, "b" => 2, "c" => 4];
function sum_string(array $arr) {
    $string = '';
    $summ = 0;
    foreach ($arr as $key => $value) {
        $string = $string . $key;
        $summ += $value * 13;
    }

    return $string . ' ' . $summ;
}
echo sum_string($arr);