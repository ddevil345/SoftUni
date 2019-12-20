<?php
$money = floatval(readline());
$students = intval(readline());
$sabresPrice = floatval(readline());
$priceRobe = floatval(readline());
$priceBelt = floatval(readline());
$freebelt = 0;
$addtenpercent = ceil(1.10 * $students);

if ($students >= 6) {
    $freebelt = intval($students / 6);
}
$totalPriceBelt = $priceBelt * ($students - $freebelt);
$totalPriceSabresPrice = $addtenpercent * $sabresPrice;
$totalPriceRobe = $students * $priceRobe;
$totalPrice = $totalPriceSabresPrice + $totalPriceBelt + $totalPriceRobe;
if ($money >= $totalPrice) {
    printf("The money is enough - it would cost %.2flv.", $totalPrice);

} else {
    $totalPrice -= $money;

    printf("Ivan Cho will need %.2flv more.", $totalPrice);
}
