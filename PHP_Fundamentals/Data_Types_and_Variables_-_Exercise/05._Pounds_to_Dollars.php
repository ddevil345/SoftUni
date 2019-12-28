<?php
$pounds = floatval(readline());
$usd = $pounds * 1.31;
$usd = round($usd,3);
$usd = number_format($usd,3);
echo $usd;
