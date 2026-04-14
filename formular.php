<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $meno = $_POST["meno"];
    $vek = $_POST["vek"];
    $mesto = $_POST["mesto"];
    echo "Volám sa $meno, mám $vek rokov a bývam v $mesto.";
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
    <label>Meno:</label>
    <input type="text" name="meno"><br><br>

    <label>Vek: </label>
    <input type="number" name="vek"><br><br>

    <label>Mesto: </label>
    <input type="text" name="mesto"><br><br>

    <input type="submit" value="Odoslať">
</form>

</body>
</html>