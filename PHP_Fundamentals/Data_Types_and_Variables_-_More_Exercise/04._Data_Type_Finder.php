<?php
while(true) {
    $input = readline();
    if($input == "END") return ;
    if(is_numeric($input)) {
        $sum = 0;
        $sum += $input;
        switch(gettype($sum)) {
            case "integer": $type = "integer"; break;
            case "double": $type = "floating point"; break;
        }
        echo "$input is $type type" . PHP_EOL;
    }
    if(strlen($input) == 1 && !is_numeric($input)) {
        echo "$input is character type" . PHP_EOL;
    } else if(strlen($input) > 1 && !is_numeric($input) && strtolower($input) != "true" && strtolower($input) != "false") {
        echo "$input is string type" . PHP_EOL;
    }  if(strtolower($input) == "true" || strtolower($input) == "false") {
        echo "$input is boolean type" . PHP_EOL;
    }
}