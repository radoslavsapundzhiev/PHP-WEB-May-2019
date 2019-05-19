<?php
$input = explode(", ", readline());

$matrixSize = intval($input[0]);
$pattern = $input[1];
$counter = 1;
$matrix = [];

switch ($pattern){
    case "A":
        for($row = 0; $row < $matrixSize; $row++){
            for($col = 0; $col < $matrixSize; $col++){
                $matrix[$col][$row] = $counter++;
            }
        }
        break;
    case "B":
        for($row = 0; $row < $matrixSize; $row++){
            for($col = 0; $col < $matrixSize; $col++){
                if($row % 2 === 0){
                    $matrix[$col][$row] = $counter++;
                }else{
                    $matrix[$matrixSize - 1 - $col][$row] = $counter++;
                }
            }
        }
        break;
}



printMatrix($matrix);

function printMatrix($matrix){
    for($row = 0; $row < count($matrix); $row++){
        for($col = 0; $col < count($matrix[$row]); $col++){
            echo $matrix[$row][$col] . " ";
        }
        echo PHP_EOL;
    }
}


