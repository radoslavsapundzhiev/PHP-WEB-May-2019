<?php
$input = array_map("intval", explode(", ", readline()));
//$input = [3, 6];
$rows = $input[0];
$columns = $input[1];
$matrix = [];

for($row = 0; $row < $rows; $row++){
    $matrix[$row] = array_map("intval", explode(", ", readline()));
}

$maxSum = 0;
$startRow = 0;
$startCol = 0;

for($row = 0; $row < $rows - 1; $row++){
    for($col = 0; $col < $columns - 1; $col++){
        $sum = 0;
        for($i = $row; $i < $row + 2; $i++){
            for($j = $col; $j < $col + 2; $j++){
                $sum += $matrix[$i][$j];
            }
        }
        if($sum > $maxSum){
            $maxSum = $sum;
            $startRow = $row;
            $startCol = $col;
        }
    }
}

for($row = $startRow; $row < $startRow + 2; $row++){
    for($col = $startCol; $col < $startCol + 2; $col++) {
        echo $matrix[$row][$col]. " ";
    }
    echo PHP_EOL;
}

echo $maxSum;

