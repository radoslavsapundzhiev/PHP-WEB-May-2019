<?php

$input = explode(", ", readline());

$rows = intval($input[0]);
$cols = intval($input[1]);
$matrix = [];

for($row = 0; $row < $rows; $row++){
    $matrix[$row] = array_map("intval", explode(", ", readline()));
}

$min = PHP_INT_MAX;
$max = PHP_INT_MIN;

for($row = 0; $row < $rows; $row++){
    for($col = 0; $col < $cols; $col++){
        if($matrix[$row][$col] < $min){
            $min = $matrix[$row][$col];
        }
        if($matrix[$row][$col] > $max){
            $max = $matrix[$row][$col];
        }
    }
}

echo "Min: $min" . PHP_EOL;
echo "Max: $max";