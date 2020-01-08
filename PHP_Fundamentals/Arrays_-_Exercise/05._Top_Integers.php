<?php
$arr = explode(" ", readline());
$countArr = count($arr);
$newArr = [];
for ($i = 0; $i < $countArr; $i++) {

    $isItBigger = true;
    for ($j = $i + 1; $j < $countArr; $j++) {
        if ($arr[$i] <= $arr[$j]) {
            $isItBigger = false;
        }
    }

    if ($isItBigger) {
        $newArr[] = $arr[$i];
    }
}
echo implode(" ", $newArr);
