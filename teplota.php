<?php
 if(isset($_GET["vstup"])){
    $celsius = $_GET["vstup"];
    $jednotka = $_GET["jednotka"];

    if($jednotka == "f"){
        $vysledok = round(($celsius * 9/5) + 32, 2);
        $symbol = "°F";
    } elseif($jednotka == "k") {
        $vysledok = round($celsius + 273.15, 2);
        $symbol = "K";
    } elseif ($jednotka == "r"){
        $vysledok = round(($celsius + 273.15) * 9/5, 2);
        $symbol = "R";
    }

    echo "<h2>$celsius °C = $vysledok $symbol</h2>";
 }
?>
<form action="" method="get">
    <label>Teplota v Celziusoch</label>
    <input type="number" name="vstup" value="<?= $_GET["vstup"] ?? ""?>">
    <br>
    <label>Prevadzaj na:</label>
    <select name="jednotka">
        <option value="f">Fahrenheit</option>
        <option value="k">Kelvin</option>
        <option value="r">Rankine</option>
    </select>
    <br>
    <input type="submit" value="Vypocitaj">
</form>