<?php
$lostgames = intval(readline());
$priceHeadset = floatval(readline());
$priceMouse = floatval(readline());
$priceKeyboard = floatval(readline());
$priceDisplay = floatval(readline());

$lostHeadset = intval($lostgames / 2);
$lostMouse = intval($lostgames / 3);
$lostKeyboard = intval($lostgames / 6);
$lostDisplay = intval($lostgames / 12);

$price = ($priceHeadset * $lostHeadset) + ($priceMouse * $lostMouse) + ($priceKeyboard * $lostKeyboard) + ($priceDisplay * $lostDisplay);
printf("Rage expenses: %.2f lv.",$price);
