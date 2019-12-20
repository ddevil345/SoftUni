<?php

while (true) {
    $num = intval(readline());

    if ($num % 2 != 0) {
        echo "Please write an even number.".PHP_EOL;
    } else {
        $num = abs($num);
        echo "The number is: " . $num;
        break;
    }
}
?>
