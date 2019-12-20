<?php

$country = readline();

if ($country == "England" || $country == "USA")
{
    echo "English";
}else if ($country == "Spain" || $country == "Argentina" || $country == "Mexico")
{
    echo "Spanish";
}else{
    echo "unknown";
}
?>
