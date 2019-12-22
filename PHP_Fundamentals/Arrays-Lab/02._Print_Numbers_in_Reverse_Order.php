<?php
$num = intval(readline());
$arr = array();
for ($i = 0 ; $i < $num ; $i++){
    $n = intval(readline());
    $arr[] = $n;
}
$arr = array_reverse($arr);
foreach ($arr as $res){
    echo $res." ";
}
