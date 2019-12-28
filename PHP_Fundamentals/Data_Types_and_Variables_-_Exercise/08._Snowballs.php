<?php
$nSnowballs = intval(readline());
$highestValue = 0;
$bestSnowBallSnow = 0;
$bestSnowBallTime = 0;
$bestSnowBallQuality = 0;
$bestSnowBallValue = 0;

for ($i = 0; $i < $nSnowballs; $i++) {

    $snowballSnow = intval(readline());
    $snowballTime = intval(readline());
    $snowballQuality = intval(readline());

    $snowballValue = bcpow(($snowballSnow / $snowballTime), $snowballQuality);

    if ($snowballValue >= $highestValue) {
        $highestValue = $snowballValue;
        $bestSnowBallQuality = $snowballQuality;
        $bestSnowBallSnow = $snowballSnow;
        $bestSnowBallTime = $snowballTime;
        $bestSnowBallValue = $snowballValue;
    }
}
echo $bestSnowBallSnow . " : " . $bestSnowBallTime . " = " . $bestSnowBallValue . " (" . $bestSnowBallQuality . ")";
