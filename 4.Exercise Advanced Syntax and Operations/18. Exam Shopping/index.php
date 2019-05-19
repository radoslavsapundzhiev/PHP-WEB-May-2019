<?php
$shop = [];

while (true){
    $input = explode(" ", readline());
    //$input = ['stock', 'Boca_Cola', '10'];
    if($input[0] === "shopping"){
        break;
    }
    $command = $input[0];
    $product = $input[1];
    $quantity = intval($input[2]);

    if($command === "stock"){
        if(!key_exists($product, $shop)){
            $shop[$product] = $quantity;
        }else{
            $shop[$product] += $quantity;
        }
    }
}

while (true){
    $input = explode(" ", readline());
    if($input[0] === "exam"){
        foreach ($shop as $product => $quantity){
            if($quantity !== 0){
                echo $product . " -> " . $quantity . PHP_EOL;
            }
        }
        break;
    }
    $command = $input[0];
    $product = $input[1];
    $quantity = intval($input[2]);
    if($command === "buy"){
        if(!key_exists($product, $shop)){
            echo $product . " doesn't exist" . PHP_EOL;
        }else{
            if($shop[$product] === 0){
                echo $product . " out of stock" . PHP_EOL;
            }
            $shop[$product] -= $quantity;
            if($shop[$product] < 0){
                $shop[$product] = 0;
            }
        }
    }
}