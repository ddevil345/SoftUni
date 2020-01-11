<?php
$n = intval(readline());
for ($i = 2; $i <= $n; $i++) {
    $prime = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $prime = false;
            break;
        }
    }

    if ($prime == true) {
        printf("%d -> true" . PHP_EOL, $i);
    } else {
        printf("%d -> false" . PHP_EOL, $i);
    }
}