<?php
$n1 = intval(readline());
$n2 = intval(readline());
$n3  = intval(readline());

$tmp = array($n1, $n2, $n3);

rsort($tmp);

foreach ($tmp as $n){
    echo $n.PHP_EOL;
}
