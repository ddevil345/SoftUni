<?php
$x = intval(readline());
$y = intval(readline());
$sum = 0;
for ($i = $x; $i <= $y; $i++) {
    echo $i." ";
    $sum += $i;
}
echo PHP_EOL."Sum: ".$sum;
