<?php
$n = intval(readline());
$k = intval(readline());
//$n = 9;
//$k = 5;

$numbers = [];
$numbers[0] = 1;

for($row = 1; $row < $n; $row++){
    $sum = 0;
    for($col = max(0, $row - $k); $col < $row; $col++){
        $sum += $numbers[$col];
    }
    $numbers[$row] = $sum;
}

echo implode(" ", $numbers);