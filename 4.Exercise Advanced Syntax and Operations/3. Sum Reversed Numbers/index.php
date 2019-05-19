<?php
$numbers = array_map("intval", explode(" ", readline()));
//$numbers = [123, 234, 12];
$sum = 0;

foreach ($numbers as $number){
    $numberAsArray = array_map("intval", str_split($number));
    $numberAsArray = array_reverse($numberAsArray);
    $reversedNumber = (int)implode("", $numberAsArray);
    $sum += $reversedNumber;
}

echo $sum;

