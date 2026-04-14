<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $meno = trim($_POST["meno"] ?? "");
        $rok = $_POST["rok"] ?? "";

        $meno = strtoupper($meno);
        $posledna_cislica = $rok % 10;

        echo "$meno-$rok-$posledna_cislica";


    }
?>
<form action="" method="post">
    <label>Meno:</label>
    <input type="text" name="meno">
    <br>
    <label>Rok narodenia:</label>
    <input type="number" name="rok" >
    <input type="submit" value="Vygeneruj tajny kod!">
</form>