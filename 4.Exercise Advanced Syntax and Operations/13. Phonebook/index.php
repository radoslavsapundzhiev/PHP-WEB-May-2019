<?php
$phonebook = [];
while (true){
    $input = explode(" ", readline());
    //$input = ['S', 'Mariika'];
    $command = $input[0];

    if($command === "A"){
        $name = $input[1];
        $phone = $input[2];
        if(!key_exists($name, $phonebook)){
            $phonebook[$name] = $phone;
        }
        $phonebook[$name] = $phone;
    }elseif ($command === "S"){
        $name = $input[1];
        if(!key_exists($name, $phonebook)){
            echo "Contact $name does not exist." . PHP_EOL;
        }else{
            echo $name . " -> " . $phonebook[$name] . PHP_EOL;
        }
    }elseif ($command === "END"){
        break;
    }
}