<?php
$vaha = 79;
$vyska = 1.90;
$bmi = round($vaha / ($vyska * $vyska), 2);
// Mozem urobit aj round($bmi, 2) = $vaha / ($vyska * $vaha); ?
if ($bmi < 18.5) {
    echo "Tvoje BMI je: $bmi";
    echo "Máš podváhu.";
} elseif ($bmi > 18.5 && $bmi < 24.9 ) {
    echo "Tvoje BMI je: $bmi";
    echo "Máš normálnu váhu.";
} else {
    echo "Tvoje BMI je: $bmi";
    echo "Máš nadváhu.";
}
?>