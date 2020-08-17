<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 23.05.2019
 * Time: 23:22
 */
function elements($x) {
    if (! is_numeric($x)) return 'Функция принимает только числовые значения';

    $cell = intdiv($x, 7);
    $ostatok = fmod( $x, 7);

    if ($ostatok > 0) {
        $otvet = "Создано " . $cell . " штук, остаток - " . $ostatok * 1000 * 1000 . " грамм";
    } else {
        $otvet = "Создано " . $cell . " штук";
    }
    return $otvet;
}
echo elements(21);
