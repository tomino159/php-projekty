<?php
if (isset($_GET["cislo1"])){
    $cislo1 = $_GET["cislo1"];
    $cislo2 = $_GET["cislo2"];
    $operacia = $_GET["operacia"];

    if ($operacia == "scitaj") {
        echo "$cislo1 + $cislo2 = " . ($cislo1 + $cislo2); 
    } elseif ($operacia == "odcitaj") {
        echo "$cislo1 - $cislo2 = " . ($cislo1 - $cislo2);
    } elseif ($operacia == "nasob") {
        echo "$cislo1 * $cislo2 = " . ($cislo1 * $cislo2);
    } elseif ($operacia == "vydel") {
        echo "$cislo1 / $cislo2 = " . ($cislo1 / $cislo2);
    }
}
?>
<form action="" method="GET">
    <label>Prve cislo: </label>
    <input type="number" name="cislo1">

    <label> Druhe cislo: </label>
    <input type="number" name="cislo2">

    <select name="operacia">
        <option value="scitaj">+</option>
        <option value="odcitaj">-</option>
        <option value="nasob">*</option>
        <option value="vydel">/</option>
    </select>

    <input type="submit" value="Vypocitaj">
</form>