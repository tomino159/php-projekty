<?php
function scitaj($a, $b){
    $sucet = $a + $b;
    return $sucet;
}

function odcitaj($a, $b){
    $rozdiel = $a - $b;
    return $rozdiel;
}

function nasob($a, $b) {
    $sucin = $a * $b;
    return $sucin;
}

function vydel($a, $b) {
    $podiel = $a / $b;
    return $podiel;
}

echo "20 + 4 = " . scitaj(20, 4) . "<br>";
echo "20 - 4 = " . odcitaj(20, 4) . "<br>";
echo "20 * 4 = " . nasob(20, 4) . "<br>";
echo "20 / 4 = " . vydel(20, 4) . "<br>"; 
?>