<?php
if (isset($_GET["slovo"])) {
    $slovo = $_GET["slovo"];
    echo "Hľadáš: $slovo";
}
?>

<form action="" method="GET">
    <input type="text" name="slovo" placeholder="Čo hľadáš?">
    <input type="submit" value="Hľadaj">
</form>