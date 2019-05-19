<?php
$phonebook = [];

while (true){
    $input = explode(" : ", readline());
    if($input[0] === "Over"){
        ksort($phonebook);
        foreach ($phonebook as $name => $phone){
            echo $name . " -> " . $phone . PHP_EOL;
        }
        break;
    }elseif(count($input) === 2){
        if(preg_match('/^[0-9]+$/', $input[0])){
            $phone = $input[0];
            $name = $input[1];
        }else{
            $phone = $input[1];
            $name = $input[0];
        }
        if(!key_exists($name, $phonebook)){
            $phonebook[$name] = $phone;
        }
        $phonebook[$name] = $phone;
    }
}