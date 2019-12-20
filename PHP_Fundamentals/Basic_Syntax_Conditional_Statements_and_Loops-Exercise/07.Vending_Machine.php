<?php

$addsum = 0;
$input = "";

while ($input != "Start") {
    $input = readline();
    $coins = is_numeric($input);
    $acceptN = array(0.1, 0.2, 0.3, 0.5, 1, 2);
    $acceptP = array("Nuts", "Water", "Crisps", "Soda", "Coke");

    if ($coins == true) {
        if (in_array($input, $acceptN)) {
            $addsum += $input;
        } else {
            echo "Cannot accept " . $input . PHP_EOL;
        }
    }
}

while ($input != "End") {
    $input = readline();
    $acceptP = array("Nuts", "Water", "Crisps", "Soda", "Coke");

    if (in_array($input, $acceptP)) {

        switch ($input) {
            case "Nuts":
                $price = 2.0;
                break;
            case "Water":
                $price = 0.7;
                break;
            case "Crisps":
                $price = 1.5;
                break;
            case "Soda":
                $price = 0.8;
                break;
            case "Coke":
                $price = 1.0;
                break;
        }


        $addsum = round($addsum, 2);
        $price = round($price, 2);

        if ($addsum >= $price) {
            $addsum -= $price;
            echo "Purchased " . strtolower($input) . PHP_EOL;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } else {
        if ($input != "End") {
            echo "Invalid product" . PHP_EOL;
        }
    }
}
$totalPrice = printf("Change: %.2f", $addsum);
