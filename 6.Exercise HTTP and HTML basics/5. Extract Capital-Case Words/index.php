<?php
    $capitalCaseWords = "";
    if(isset($_GET['text'])){
        $text = htmlspecialchars($_GET['text']);
        $words = preg_split("/[^A-Za-z]+/", $text);

        $words = array_filter($words, function($el){
            return $el == strtoupper($el) && $el !== "";
        });

        $capitalCaseWords = implode(", ", $words);
    }
?>

<form>
    <textarea rows="10" name="text"><?= $capitalCaseWords ?></textarea><br>
    <input type="submit" value="Extract">
</form>

