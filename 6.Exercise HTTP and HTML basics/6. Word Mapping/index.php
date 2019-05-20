<form>
    <textarea name="input" cols="50"></textarea><br/>
    <input type="submit" value="Count words">
</form>

<?php
    if(isset($_GET['input'])){
        $occurrences = [];
        $text = $_GET['input'];
        $words = preg_split("/[^A-Za-z]/",$text);

        $words = array_filter($words);
        $words = array_map("strtolower", $words);
        foreach ($words as $word){
            if(!key_exists($word, $occurrences)){
                $occurrences[$word] = 0;
            }
            $occurrences[$word]++;
        }
        echo "<table border='2'>";
        foreach ($occurrences as $key => $value){
        echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    }
?>


