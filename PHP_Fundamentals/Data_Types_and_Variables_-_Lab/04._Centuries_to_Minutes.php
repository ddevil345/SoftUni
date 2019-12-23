<?php
$centuries = intval(readline());
$years = $centuries * 100;
$days = intval($years * 365.2422);
$hours = $days * 24;
$mins = $hours * 60;
echo "$centuries centuries = $years years = $days days = $hours hours = $mins minutes";
