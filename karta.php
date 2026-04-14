<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $meno = $_POST["meno"];
    $vek = $_POST["vek"];
    $oblubena_hra = $_POST["oblubena_hra"];

    echo "=== OSOBNÁ KARTA ===";
    echo "Meno: " . $meno . "<br>";
    echo "Vek: " . $vek . "<br>";
    echo "Obľúbená hra: " . $oblubena_hra . "<br>";
}
?>

<form action="" method="POST">
    <label>Meno: </label>
    <input type="text" name="meno"><br>

    <label>Vek: </label>
    <input type="number" name="vek"><br>

    <label>Obľúbená hra: </label>
    <input type="text" name="oblubena_hra">

    <input type="submit" value="Odoslať">
</form>