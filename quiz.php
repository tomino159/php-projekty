<?php
$otazky = [
    [
        "otazka" => "Hlavne mesto Slovenska ?",
        "moznosti" => ["a" => "Kosice", "b" => "Bratislava", "c" => "Poprad"],
        "spravna" => "b"
    ],
    [
        "otazka" => "Kolko je 7 x 8 ?",
        "moznosti" => ["a" => "56", "b" => "54", "c" => "58"],
        "spravna" => "a"
    ],
    [
        "otazka" => "Co znamena PHP ?",
        "moznosti" => ["a" => "Pretty Hypertext Processor", "b" => "Public Hyper Protocol", "c" => "Personal Home Page"],
        "spravna" => "c"
    ],
];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $skore = 0;
    $odpovede = $_POST["odpoved"] ?? [];

    foreach ($otazky as $index => $q){
        $zvolena = $odpovede[$index] ?? "";
        if($zvolena == $q["spravna"]) {
            $skore++;
        }
    }
    echo "Tvoje skore: $skore/" . count($otazky) . "</h2>";
}
?>

<form action="" method="POST">
    <?php foreach ($otazky as $index => $q): ?>
        <p><strong><?= $q["otazka"] ?></strong></p>
        <?php foreach($q["moznosti"] as $pismeno => $text): ?>
        <input type="radio" name="odpoved[<?= $index ?>]" value="<?= $pismeno?>">
        <?= $text ?><br>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <input type="submit" value="Vyhodnotit">
</form>