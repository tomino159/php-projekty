<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nakup = $_POST["nakup"] ?? [];
    $celkova_cena = 0;

    foreach($nakup as $polozka){
        $produkt = explode("-", $polozka);
        echo $produkt[0] . " " . $produkt[1] . "<br>";
        $celkova_cena += $produkt[1];
    }
    echo "Celkova cena je: " . $celkova_cena;
}
?>

<form method="post">
    <label>--- Nakupny zoznam ---</label><br>
    <input type="checkbox" name="nakup[]" value="chlieb-1.20"> Chlieb (1.20€)<br>
    <input type="checkbox" name="nakup[]" value="vajcia-1.99"> Vajcia (1.99€)<br>
    <input type="checkbox" name="nakup[]" value="maslo-2.50"> Maslo (2.50€)<br>
    <input type="checkbox" name="nakup[]" value="mlieko-0.89"> Mlieko (0.89€)<br>
    <input type="checkbox" name="nakup[]" value="syr-3.20"> Syr (3.20€)<br>
    <input type="submit" value="Vypocitaj vyslednu sumu">
</form>