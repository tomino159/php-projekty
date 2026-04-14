<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $hraci = explode("\n", $_POST["hraci"]);
        $hraci = array_map("trim", $hraci);
        $hraci = array_filter($hraci); // odstráni prázdne riadky

        shuffle($hraci);

        $timy = array_chunk($hraci, ceil(count($hraci) / 2));

        // Alternativa:
        // echo "<p><strong>Tím 1:</strong> " . implode(", ", $timy[0]) . "</p>";
        echo "<p><strong>Tím 1:</strong></p>";
        foreach($timy[0] as $hrac){
            echo "<p>" . $hrac . "</p>";
        }

        // Alternativa:
        //echo "<p><strong>Tím 2:</strong> " . implode(", ", $timy[1]) . "</p>";
        echo "<p><strong>Tím 2:</strong></p>";
        foreach($timy[1] as $hrac){
            echo "<p>" . $hrac . "</p>";
        }
    }
?>
<form method="post">
    <textarea name="hraci" rows="6" placeholder="Každé meno na nový riadok..."></textarea>
    <input type="submit" value="Rozdeľ tímy!">
</form>