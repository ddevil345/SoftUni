<?php
$res = "";
$str = readline();
$arr = explode(" ", $str);
$arr = array_reverse($arr);
foreach ($arr as $v){
    echo $res.$v." ";
}