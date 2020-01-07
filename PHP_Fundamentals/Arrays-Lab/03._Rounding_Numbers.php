<?php
$str = readline();
$arr =  explode(" ", $str);
foreach($arr as $v){
    $v = (float)$v;
    $x = round($v);
    printf("%.2f => %.0f".PHP_EOL, $v, $x);
}

