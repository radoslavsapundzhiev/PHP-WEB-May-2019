<?php
$list = [];
$attempts = 0;
while (true){
    $input = explode(" -> ", readline());
    if($input[0] === "login"){
        break;
    }
    $username = $input[0];
    $password = $input[1];
    if(!key_exists($username, $list)){
        $list[$username] = $password;
    }
    $list[$username] = $password;
}

while (true){
    $input = explode(" -> ", readline());
    if($input[0] === "end"){
        echo "unsuccessful login attempts: " . $attempts;
        break;
    }
    $username = $input[0];
    $password = $input[1];

    if(!key_exists($username, $list)){
        $attempts++;
        echo $username . ": login failed" . PHP_EOL;
    }else{
        if($list[$username] !== $password){
            $attempts++;
            echo $username . ": login failed" . PHP_EOL;
        }else{
            echo $username . ": logged in successfully" . PHP_EOL;
        }
    }
}