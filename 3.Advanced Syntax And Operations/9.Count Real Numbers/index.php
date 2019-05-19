<?php
$realNumbers = array_map("floatval", explode(" ", readline()));

$numberOfOccurences = [];

for($i = 0; $i < count($realNumbers); $i++){
    $current = $realNumbers[$i] . "";
    if(!array_key_exists($current, $numberOfOccurences)){
        $numberOfOccurences[$current] = 0;
    }
    $numberOfOccurences[$current]++;
}

ksort($numberOfOccurences);

foreach ($numberOfOccurences as $key => $value){
    echo $key . " -> " . $value . PHP_EOL;
}