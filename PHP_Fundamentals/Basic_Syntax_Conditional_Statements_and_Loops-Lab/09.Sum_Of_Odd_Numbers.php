<?php
$n = intval(readline());
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    $res = 2 * $i - 1;
    echo $res.PHP_EOL;
    $sum += $res;
}
echo "Sum: " . $sum
?>

