<?php
$even = 0;
$odd = 0;
$str = readline();
$arr = explode(" ", $str);

foreach ($arr as $v) {

    if ($v % 2 == 0) {
        $even += $v;
    }else{
        $odd += $v;
    }
}
$res = $even - $odd;
echo $res;