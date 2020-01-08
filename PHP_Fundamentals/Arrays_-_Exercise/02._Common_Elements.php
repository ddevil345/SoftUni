<?php
$firstArr = explode(" ", readline());
$secondArr = explode(" ", readline());
$fistCount = count($firstArr);
$secondCount = count($secondArr);

for ($i = 0; $i < $secondCount; $i++) {
    for ($j = 0; $j < $fistCount; $j++) {
        if ($secondArr[$i] === $firstArr[$j]) {
            echo "$secondArr[$i] ";
        }
    }
}