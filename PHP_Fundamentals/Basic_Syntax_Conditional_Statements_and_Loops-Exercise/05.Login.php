<?php
$user = readline();
$countBadPass = 0;
while (true) {
    $pass = readline();
    $verify = strrev($user);
    if ($pass != $verify) {
        $countBadPass++;
        if ($countBadPass >= 4) {
            echo "User $user blocked!";
            break;
        }
        echo "Incorrect password. Try again." . PHP_EOL;
    } else {
        echo "User $user logged in.";
        break;
    }
}
