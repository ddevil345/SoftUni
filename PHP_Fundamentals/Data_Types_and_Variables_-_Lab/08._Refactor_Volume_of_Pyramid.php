<?php
echo "Length: ";
$length = floatval(readline());
echo "Width: ";
$width = floatval(readline());
echo "Height: ";
$height = floatval(readline());
$volume = ($length * $width * $height) / 3;
echo sprintf("Pyramid Volume: %.2f", $volume) . PHP_EOL;
