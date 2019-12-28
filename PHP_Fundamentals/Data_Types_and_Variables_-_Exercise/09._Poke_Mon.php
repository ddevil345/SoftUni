<?php
$pokemonPower = intval(ReadLine());
$distance = intval(ReadLine());
$exhaustionFactory = intval(ReadLine());

$targetsPoked = 0;

$originalValue = $pokemonPower * 0.50;

while ($pokemonPower >= $distance) {
    if ($pokemonPower == $originalValue)
        if ($exhaustionFactory > 0) {
            {
                $pokemonPower = $pokemonPower / $exhaustionFactory;
                if ($pokemonPower < $distance) {
                    break;
                }
            }
        }
    $pokemonPower -= $distance;
    $targetsPoked++;
}

echo floor($pokemonPower) . PHP_EOL;
echo $targetsPoked . PHP_EOL;