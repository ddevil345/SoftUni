<?php

$day = intval(readline());
$days = [

    'Invalid Day!',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];
if ($day >= 1 && $day <= 7){
    echo $days[$day];
}else{
    echo "Invalid Day!";
}

