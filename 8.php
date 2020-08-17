<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 24.05.2019
 * Time: 0:41
 */
function checkValue(array $arr, $str) {
    foreach ($arr as $key => $item) {
        if ($item == $str) {
            return $key;
        }
    }
}

$arr = ["a" => 'abc', "b" => 'bcd', "c" => 'ert'];
echo checkValue($arr, 'ert');