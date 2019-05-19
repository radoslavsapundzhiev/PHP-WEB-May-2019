<?php
$input = array_map("intval", explode(", ", readline()));

$rows = $input[0];
$columns = $input[1];
$matrix = [];
$sum = 0;
for($row = 0; $row < $rows; $row++){
    $matrix[$row] = array_map("intval", explode(", ", readline()));
}


for($row = 0; $row < $rows; $row++){
    for($col = 0; $col < $columns; $col++) {
        $sum += $matrix[$row][$col];
    }
}

echo $rows . PHP_EOL;
echo $columns . PHP_EOL;
echo $sum . PHP_EOL;