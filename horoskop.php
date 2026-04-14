<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $znamenie = $_POST["znamenie"];

        $predpovede = [
            "vodnar" => ["Vodnári sú ovplyvnení dvomi charakterovo odlišnými planétami.", "Urán v nich prebúdza výbušnosť, nepokoj a originalitu.", "Saturn im prináša vytrvalosť, sústredenosť a pokoj."],
            "rak" => ["Mesiac, ktorý ovláda znamenie Raka.", "Dáva týmto ľuďom zvláštne, výrazne citové založenie", "Rak má veľmi náladové myslenie, rozum a správanie."],
            "blizenci" => ["V znamení Blíženci sídli planéta Merkúr.", "Neposedný posol bohov s okrídlenými pätami.", " Ľudia narodení v znamení Blíženci vedia svoje schopnosti využiť aj v teórii."]
        ];

        if(isset($predpovede[$znamenie])){
            $nahodna = $predpovede[$znamenie][array_rand($predpovede[$znamenie])];
            echo "<p><strong>Predpoved:</strong> " . $nahodna . "</p>";
        }
    }
?>
<form method="POST">
    <select name="znamenie">
        <option value="vodnar">Vodnar</option>
        <option value="rak">Rak</option>
        <option value="blizenci">Blizenci</option>
    </select>
    <input type="submit" value="Vygeneruj predpoved!">
</form>