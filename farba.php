<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $den = date("d");
    $mesiac = date("m");
    $rok = date("y");

    $r = str_pad(dechex($den), 2, "0", STR_PAD_LEFT);
    $g = str_pad(dechex($mesiac), 2, "0", STR_PAD_LEFT);
    $b = str_pad(dechex($rok), 2, "0", STR_PAD_LEFT);

    $farba =  "#" . $r . $g . $b;

    echo "<p>Farba dna: <strong> " . $farba . "</strong></p>";
    echo "<div style='background-color:".$farba."; width: 300px; height: 300px;'></div>";
}
?>

<form method="post">
    <input type="submit" value="Ukaz farbu dna!">
</form>