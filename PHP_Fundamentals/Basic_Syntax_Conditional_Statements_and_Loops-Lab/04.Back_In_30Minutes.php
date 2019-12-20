<?php

$h = intval(readline());
$m = intval(readline());

$m += 30;

if ($m > 59){
    $h++;
    $m -=60;
}

if ($h > 23)
{
	$h = 0;
}
printf('%d:%02d', $h, $m);

?>
