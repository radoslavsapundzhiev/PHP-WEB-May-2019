<?php
$input = array_map("intval", explode(" ", readline()));
$rows = $input[0];
$columns = $input[1];
$matrix = [];

for($row = 0; $row < $rows; $row++){
    $matrix[$row] = array_map("intval", explode(" ", readline()));
}

$maxSum = 0;
$startRow = 0;
$startCol = 0;

for($row = 0; $row < $rows - 2; $row++){
    for($col = 0; $col < $columns - 2; $col++){
        $sum = 0;
        for($i = $row; $i < $row + 3; $i++){
            for($j = $col; $j < $col + 3; $j++){
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

echo "Sum = $maxSum" . PHP_EOL;

for($row = $startRow; $row < $startRow + 3; $row++){
    for($col = $startCol; $col < $startCol + 3; $col++) {
        echo $matrix[$row][$col]. " ";
    }
    echo PHP_EOL;
}



