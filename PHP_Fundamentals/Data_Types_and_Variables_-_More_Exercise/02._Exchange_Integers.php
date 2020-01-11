<?php

$a = intval(readline());
$b = intval(readline());
$tempA = $a;
$tempB = $b;
$a = $tempB;
$b = $tempA;

echo "Before:".PHP_EOL."a = ".$tempA.PHP_EOL."b = ".$tempB.PHP_EOL;
echo "After:".PHP_EOL."a = ".$a.PHP_EOL."b = ".$b.PHP_EOL;