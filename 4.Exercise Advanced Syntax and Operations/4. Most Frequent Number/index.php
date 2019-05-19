<?php
$numbers = array_map("intval", explode(" ", readline()));
//$numbers = [4, 1, 1, 4, 2, 3, 4, 4, 1, 2, 4, 9, 3];
$count = 0;
$maxCount = 0;
$element = null;

for($row = 0; $row < count($numbers); $row++){
    for($col = $row; $col < count($numbers); $col++){
        if($numbers[$row] == $numbers[$col]){
            $count++;
            if($count > $maxCount){
                $maxCount = $count;
                $element = $numbers[$row];
            }
        }
    }
    $count = 0;
}

echo $element;