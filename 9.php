<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 24.05.2019
 * Time: 0:47
 */
function Pyramid($number) {
    for ($n = 0; $n <= $number; $n++) {
        $str = '';
        for ($i = 0; $i <= $n; $i++) {
            $str = $str . $n;
        }
        echo $str . '</br>';
    }
}
Pyramid(5);