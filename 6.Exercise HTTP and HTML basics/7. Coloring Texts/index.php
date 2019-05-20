<form>
    <textarea name="input" cols="50"></textarea><br/>
    <input type="submit" value="Color text">
</form>

<?php
    if(isset($_GET['input'])){
        $text = $_GET['input'];
        for ($i = 0; $i < strlen($text); $i++){
            $currentChar = $text[$i];
            if($currentChar !== " "){
                if(ord($currentChar) % 2 !== 0){
                    echo "<span style='color:blue'>$currentChar </span>";
                }else{
                    echo "<span style='color:red'>$currentChar </span>";
                }
            }
        }
    }
?>