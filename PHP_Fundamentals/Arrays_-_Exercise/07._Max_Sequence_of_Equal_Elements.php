<?php
$arr = explode(" ", readline());
$count = count($arr);
$bestCount = 0;
$bestElement = 0;

for ($i = 0; $i < $count; $i++) {
    $repeat = 1;
    for ($j = $i + 1; $j < $count; $j++) {
        if ($arr[$i] === $arr[$j]) {
            $repeat++;
        } else {
            break;
        }
    }
    if ($repeat > $bestCount) {
        $bestCount = $repeat;
        $bestElement = $arr[$i];
    }
}
for ($i = 0; $i < $bestCount; $i++) {
    echo $bestElement . " ";
}