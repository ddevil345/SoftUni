<?php
$balance = floatval(readline());
$spent = 0;
$game = "";

while ($balance != 0){
    $game = readline();
    //var_dump($balance);
    if ($game == "Game Time"){
        printf("Total spent: $%.2f. Remaining: $%.2f", $spent, $balance);
        break;
    }

    $price = 0;

    switch ($game){

        case "RoverWatch Origins Edition":
        case "OutFall 4":
            $price = 39.99;
            if ($balance >= $price){
                echo "Bought ".$game . PHP_EOL;
            }else{
                echo "Too Expensive" . PHP_EOL;
                $price = 0;
            }
            break;
        case "CS: OG":
            $price = 15.99;
            if ($balance >= $price){
                echo "Bought ".$game . PHP_EOL;
            }else{
                echo "Too Expensive" . PHP_EOL;
                $price = 0;
            }
            break;
        case "Zplinter Zell":
            $price = 19.99;
            if ($balance >= $price){
                echo "Bought ".$game . PHP_EOL;
            }else{
                echo "Too Expensive" . PHP_EOL;
                $price = 0;
            }
            break;
        case "Honored 2":
            $price = 59.99;
            if ($balance >= $price){
                echo "Bought ".$game . PHP_EOL;
            }else{
                echo "Too Expensive" . PHP_EOL;
                $price = 0;
            }
            break;
        case "RoverWatch":
            $price = 29.99;
            if ($balance >= $price){
                echo "Bought ".$game . PHP_EOL;
            }else{
                echo "Too Expensive" . PHP_EOL;
                $price = 0;
            }
            break;
        default:
            echo "Not Found" . PHP_EOL;
            break;
    }
    $balance -= $price;
    $spent += $price;

}
if ($balance == 0) {
    echo "Out of money!" . PHP_EOL;

