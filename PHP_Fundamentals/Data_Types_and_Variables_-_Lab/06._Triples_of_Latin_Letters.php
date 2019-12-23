<?php
$n = intval(readline());
for ($a = 0; $a < $n; $a++) {
    for($b = 0; $b <$n; $b++){
        for ($c = 0; $c < $n ; $c++){
            $chara = chr($a + 97);
            $charb = chr($b + 97);
            $charc = chr($c + 97);
            echo $chara.$charb.$charc.PHP_EOL;
        }
    }
}