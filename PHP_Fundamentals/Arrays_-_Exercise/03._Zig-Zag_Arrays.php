<?php
$num = intval(readline());
$zig = [];
$zag = [];
for ($i = 0; $i < $num; $i++) {
    $arr = explode(" ", readline());
    if ($i % 2 == 0) {
        $zig[] = $arr[0];
        $zag[] = $arr[1];
    } else {
        $zig[] = $arr[1];
        $zag[] = $arr[0];
    }

}
echo implode(" ", $zig) . PHP_EOL;
echo implode(" ", $zag) . PHP_EOL;