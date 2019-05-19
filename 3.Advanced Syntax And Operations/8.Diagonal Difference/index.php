<?php
$matrixSize = intval(readline());
$matrix = [];

for($i = 0; $i < $matrixSize; $i++){
    $matrix[$i] = array_map("intval", explode(" ", readline()));
}

$mainDiagonalSum = 0;
$secondaryDiagonalSum = 0;

for($row = 0; $row < count($matrix); $row++){
    $mainDiagonalSum += $matrix[$row][$row];
    $secondaryDiagonalSum += $matrix[$row][count($matrix) - 1 - $row];
}

$difference = abs($mainDiagonalSum - $secondaryDiagonalSum);

echo $difference;

