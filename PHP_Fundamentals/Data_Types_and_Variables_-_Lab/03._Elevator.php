<?php
$people = intval(readline());
$capacity = intval(readline());

$res = ceil($people / $capacity);
echo $res;