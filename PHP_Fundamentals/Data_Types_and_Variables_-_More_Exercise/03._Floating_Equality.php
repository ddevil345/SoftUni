<?php
$eps = 0.000001;
$fistNum = floatval(readline());
$secondNum = floatval(readline());

if (abs($fistNum - $secondNum) < $eps) {
    echo "True";
} else {
    echo "False";
}