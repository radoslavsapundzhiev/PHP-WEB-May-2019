<?php
$numbers = array_map("intval", explode(" ", readline()));
$k = intval(readline());
//$numbers = [3, 2, 4, -1];
//$k = 2;
$sumArray = [];
$arrToRotate = $numbers;
$output = [];

for($row = 0; $row < count($numbers); $row++){
    $output[$row] = 0;
}

for($i = 0; $i < $k; $i++){
    $rotated = rotateToRight($arrToRotate);

    for($row = 0; $row < count($rotated); $row++){
        $output[$row] += $rotated[$row];
    }
    $arrToRotate = $rotated;
}

function rotateToRight($arr){
    $last = array_pop($arr);
    array_unshift($arr, $last);
    return $arr;
}

echo implode(" ", $output);
