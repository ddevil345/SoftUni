<?php
function lastDigit($n)
{
    return ((int)$n % 10);
}

$num = intval(readline());
$last = lastDigit($num);

switch ($last)
{
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "three";
        break;
    case 4:
        echo "four";
        break;
    case 5:
        echo "five";
        break;
    case 6:
        echo "six";
        break;
    case 7:
        echo "seven";
        break;
    case 8:
        echo "eight";
        break;
    case 9:
        echo "nine";
        break;
    case 0:
        echo "zero";
        break;
}
