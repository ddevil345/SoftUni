<?php
$number = readline();
$sum=0;
for($i=0;$i<strlen($number);$i++)
{
    $sum+=intval($number[$i]);
}
echo $sum;