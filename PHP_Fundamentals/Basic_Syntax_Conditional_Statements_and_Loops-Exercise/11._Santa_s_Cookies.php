<?php
$amountOfBatches = intval(readline());
$box = 0;

for ($i = 0; $i < $amountOfBatches; $i++) {
    $amountOfFlourInGrams = intval(readline());
    $amountOfSugarInGrams = intval(readline());
    $amountOfCocoaInGrams = intval(readline());

    $cupOfFlour = floor($amountOfFlourInGrams / 140);
    $bigSpoon = floor($amountOfSugarInGrams / 20);
    $smallSpoon = floor($amountOfCocoaInGrams / 10);


    if ($cupOfFlour <= 0 || $smallSpoon <= 0 || $bigSpoon <= 0) {
        echo "Ingredients are not enough for a box of cookies." . PHP_EOL;
        continue;
    }


    $minOfThis = min($cupOfFlour, $bigSpoon, $smallSpoon);

    $cooks = ((140 + 10 + 20) * $minOfThis) / 25;
    $currentBox = intval($cooks / 5);
    $box += $currentBox;
    echo "Boxes of cookies: " . intval($currentBox) . PHP_EOL;

}

echo "Total boxes: " . intval($box);
?>