<?php
$n = intval(readline());

for ($i = 1; $i <= $n; $i++) {
    $sum = 0;
    $num = $i;

    for ($e = 0; $e < $i; $e++)
    {
        $sum += $num % 10;
        $num /= 10;
    }
    if ($sum == 5 || $sum == 7 || $sum == 11) {
        echo "$i -> True" . PHP_EOL;
    } else {
        echo "$i -> False" . PHP_EOL;
    }
}