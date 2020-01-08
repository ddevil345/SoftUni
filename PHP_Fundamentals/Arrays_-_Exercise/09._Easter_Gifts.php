<?php
$arr = explode(" ", readline());
$count = count($arr);
$input = readline();
while ($input != "No Money") {

    $args = explode(" ", $input);
    $command = $args[0];
    $gift = $args[1];

    if ($command === "OutOfStock") {
        for ($i = 0; $i < $count; $i++) {
            if ($arr[$i] === $gift) {
                $arr[$i] = "None";
            }
        }
    } else if ($command === "Required") {
        $index = $args[2];
        if ($index >= 0 && $index < $count) {
            $arr[$index] = $gift;
        }
    } else if ($command === "JustInCase") {
        $lastIndex = $count - 1;
        $arr[$lastIndex] = $gift;
    }
    $input = readline();
}
for ($i = 0; $i < $count; $i++) {
    if ($arr[$i] !== "None") {
        echo $arr[$i] . " ";
    }
}