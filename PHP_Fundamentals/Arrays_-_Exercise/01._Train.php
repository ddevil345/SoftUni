<?php
$countWagons = intval(readline());
$train = [];
$sum = 0;
for ($i = 0; $i < $countWagons; $i++) {
    $people = intval(readline());
    $train[$i] = $people;
    $sum += $people;
}

echo implode(" ", $train) . PHP_EOL;
echo $sum;