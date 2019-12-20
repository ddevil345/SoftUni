<?php
$num = intval(readline());
$sum = 0;
$r = 0;
$temp = $num;

while ($num) {
    $i = 1;
    $fact = 1;
    $r = $num % 10;
    while ($i <= $r) {
        $fact = $fact * $i;
        $i++;
    }
    $sum = $sum + $fact;
    $num = floor($num / 10);
}
if ($temp == $sum) {
    echo "yes";
} else {
    echo "no";
}
