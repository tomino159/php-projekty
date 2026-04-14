<?php
session_start();

if(!isset($_SESSION["h1"])){
    $_SESSION["h1"] = 0;
    $_SESSION["h2"] = 0;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $vitaz = $_SESSION["h1"] >= 11 || $_SESSION["h2"] >= 11;

    if(isset($_POST["hrac1"]) && !$vitaz) $_SESSION["h1"]++;
    if(isset($_POST["hrac2"]) && !$vitaz) $_SESSION["h2"]++;
    if(isset($_POST["reset"])){
        $_SESSION["h1"] = 0;
        $_SESSION["h2"] = 0;
    }
}
?>

<p>Hráč 1: <?php echo $_SESSION["h1"]; ?></p>
<p>Hráč 2: <?php echo $_SESSION["h2"]; ?></p>

<?php 
if($_SESSION["h1"] >= 11) echo "<p>🏆 Vyhral Hráč 1!</p>";
if($_SESSION["h2"] >= 11) echo "<p>🏆 Vyhral Hráč 2!</p>";
?>

<form method="post">
    <input type="submit" name="hrac1" value="+1 Hráč 1">
    <input type="submit" name="hrac2" value="+1 Hráč 2">
    <input type="submit" name="reset" value="Reset skóre">
</form>