<?php
$arr = explode(" ", readline());
$res = intval(readline());
$count = count($arr);
for ($i = 0; $i < $count; $i++) {

    for ($j = $i +1 ; $j < $count; $j++) {
        if ($arr[$i] + $arr[$j] === $res) {
           echo $arr[$i]." ".$arr[$j].PHP_EOL;
        }

    }
}