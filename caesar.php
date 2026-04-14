<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $text = strtolower($_POST["text"]);
        $posun = (int)$_POST["posun"];
        $vysledok = "";

        foreach(str_split($text) as $znak){
            if($znak >= "a" && $znak <= "z"){
                $vysledok .= chr((ord($znak) - 97 + $posun) % 26 + 97);
            } else {
                $vysledok .= $znak;
            }
        }
        echo "<p>Vysledok: <strong>" . $vysledok . "</strong></p>";
    }
?>

<form method="post">
    <input type="text" name="text" placeholder="Zadaj text...">
    <input type="number" name="posun" placeholder="Posun (napr. 3)">
    <input type="submit" value="Zašifruj!">
</form>