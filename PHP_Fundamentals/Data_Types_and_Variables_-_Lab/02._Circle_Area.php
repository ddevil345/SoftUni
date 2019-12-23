<?php
$r = floatval(readline());

    $circum = 2 * pi() * $r;
    $area = pi() * pow($r, 2);
    echo number_format($area,12);
