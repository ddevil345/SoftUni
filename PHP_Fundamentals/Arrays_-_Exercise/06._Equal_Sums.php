<?php
$arr = explode(" ", readline());
$count = count($arr);

for ($i = 0; $i < $count; $i++) {
    $leftSum = 0;
    $rightSum = 0;
    for ($j = 0; $j < $i; $j++) {
        $leftSum += $arr[$j];
    }
    for ($j = $i + 1; $j < $count; $j++) {
        $rightSum += $arr[$j];
    }
    if ($leftSum == $rightSum) {
        echo $i;
        return;
    }
}
echo "no";