<?php
$numbers = array_map("intval", explode(" ", readline()));
//$numbers = [0, 1, 1, 2, 2, 3, 3];
$count = 1;
$maxCount = 0;
$index = 0;

for($row = 0; $row < count($numbers); $row++){
    for($col = $row; $col < count($numbers) - 1; $col++){
        if($numbers[$col] < $numbers[$col + 1]){
            $count++;
            if($count > $maxCount){
                $maxCount = $count;
                $index = $row;
            }
        }else{
            break;
        }
    }
    $count = 1;
}

for($i = $index; $i < $maxCount + $index; $i++){
    echo $numbers[$i] . " ";
}