<?php
$people = intval(readline());
$type = readline();
$day = readline();
$price = 0;
switch ($day) {
    case "Friday":
        if ($type == "Students") {
            $price = $people * 8.45;
            if ($people >= 30) {
                $price *= 0.85;
            }
        } else if ($type == "Business") {
            $price = $people * 10.90;
            if ($people >= 100) {
                $price = ($people - 10) * 10.90;
            }
        } else if ($type == "Regular") {
            $price = $people * 15;
            if ($people >= 10 && $people <= 20) {
                $price *= 0.95;
            }
        }
        $totalPrice = printf("Total price: %.2f", $price);
        break;
    case "Saturday":
        if ($type == "Students") {
            $price = $people * 9.80;
            if ($people >= 30) {
                $price *= 0.85;
            }
        } else if ($type == "Business") {
            $price = $people * 15.60;
            if ($people >= 100) {
                $price = ($people - 10) * 15.60;
            }
        } else if ($type == "Regular") {
            $price = $people * 20;
            if ($people >= 10 && $people <= 20) {
                $price *= 0.95;
            }
        }
        $totalPrice = printf("Total price: %.2f", $price);
        break;
    case "Sunday":
        if ($type == "Students") {
            $price = $people * 10.46;
            if ($people >= 30) {
                $price *= 0.85;
            }
        } else if ($type == "Business") {
            $price = $people * 16;
            if ($people >= 100) {
                $price = ($people - 10) * 16;
            }
        } else if ($type == "Regular") {
            $price = $people * 22.50;
            if ($people >= 10 && $people <= 20) {
                $price *= 0.95;
            }
        }
        $totalPrice = printf("Total price: %.2f", $price);
        break;
}
