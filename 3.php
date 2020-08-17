<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 23.05.2019
 * Time: 23:04
 */
function checkFunc($x) {
    if (! is_numeric($x)) return false;
    if ($x > 170) {
        return "Big";
    } else {
        return "Small";
    }
}
echo checkFunc(169);