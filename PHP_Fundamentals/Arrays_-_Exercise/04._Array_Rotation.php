<?php
$arr = explode(" ", readline());

$rotate = intval(readline());
for ($i = 0; $i < $rotate; $i++) {
    array_push($arr, array_shift($arr));
}

echo implode(" ", $arr);