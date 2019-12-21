<?php
$clicks = intval(readline());
$message = 0;
$sms = "";

for ($i = 0; $i < $clicks; $i++) {
    $digits = readline();
    $digitLength = strlen($digits);
    $digit = $digits[0] - '0';
    $offset = ($digit - 2) * 3;

    if ($digit == 0) {

        $message += ($digit + 32);
        $message = chr($message);
        $sms .= $message;
        $message = 0;
        continue;
    }

    if ($digit == 8 || $digit == 9) {
        $offset++;
    }
    $letterIndex = $offset + $digitLength - 1;
    $message = $letterIndex + 97;
    $message = chr($letterIndex + 97);
    $sms .= $message;
    $message = 0;
}
echo $sms;
