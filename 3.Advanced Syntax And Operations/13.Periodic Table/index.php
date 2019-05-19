<?php
$elements = explode(", ", readline());
//$elements = ['Ce', 'O', 'Mo', 'O', 'Ce', 'Ee', 'Mo'];
$uniqueElements = [];

for($i = 0; $i < count($elements); $i++){
    $current = $elements[$i];
    if(!array_key_exists($current, $uniqueElements)){
        $uniqueElements[$current] = 0;
    }
    $uniqueElements[$current]++;
}
$output = [];

foreach ($uniqueElements as $key => $value){
    if($value === 1){
        $output[] = $key;
    }
}

echo implode(" ", $output);

