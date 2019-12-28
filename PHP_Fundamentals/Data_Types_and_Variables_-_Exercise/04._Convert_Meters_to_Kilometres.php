<?php
$meters = intval(readline());
$km = $meters / 1000;
$km = number_format($km, 2);
echo $km;