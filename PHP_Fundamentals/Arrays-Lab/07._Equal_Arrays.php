<?php
$str = readline();
$str2 = readline();

$arr = explode(" ", $str);
$arr2 = explode(" ", $str2);

if ($arr === $arr2) {
    $sum = array_sum($arr);
    echo "Arrays are identical. Sum: $sum";
} else {
    $result = array_diff_assoc($arr, $arr2);
    $res = key($result);
    echo "Arrays are not identical. Found difference at $res index.";
}