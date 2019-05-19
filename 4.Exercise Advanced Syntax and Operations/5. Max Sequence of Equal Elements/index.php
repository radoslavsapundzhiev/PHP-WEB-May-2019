<?php
$numbers = array_map("intval", explode(" ", readline()));

$count = 0;
$maxCount = 0;
$index = 0;

for($row = 0; $row < count($numbers); $row++){
    for($col = $row; $col < count($numbers); $col++){
        if($numbers[$row] == $numbers[$col]){
            $count++;
            if($count > $maxCount){
                $maxCount = $count;
                $index = $row;
            }
        }else{
            break;
        }
    }
    $count = 0;
}

for($i = $index; $i < $index + $maxCount; $i++){
    echo $numbers[$i] . " ";
}