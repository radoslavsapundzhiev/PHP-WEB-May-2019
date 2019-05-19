<?php
$numbers = array_map("intval", explode(" ", readline()));
//$numbers = [2, 10, 3];
while (count($numbers) > 1){
    $condensed = [];
    for($i = 0; $i < count($numbers) - 1; $i++){
        $condensed[$i] = $numbers[$i] + $numbers[$i + 1];
    }
    $numbers = $condensed;
}

echo $numbers[0];