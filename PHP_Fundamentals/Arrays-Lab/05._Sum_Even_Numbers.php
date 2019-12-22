<?php
$res = 0;
$str = readline();
$arr = explode(" ", $str);

foreach ($arr as $v){

    if($v % 2 == 0){
        $res += $v;
    }
}
echo $res;