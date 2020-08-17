<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 24.05.2019
 * Time: 12:05
 */
$num = 10;

function minusNumber(&$num) {
    $num = $num - 1;
    if ($num > 3) minusNumber($num);
}
minusNumber($num);
echo $num;