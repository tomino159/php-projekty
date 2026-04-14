<?php
// Data
$ziaci = [
    ["meno" => "Janko",   "znamka" => 2],
    ["meno" => "Zuzka",   "znamka" => 1],
    ["meno" => "Peto",    "znamka" => 4],
    ["meno" => "Katka",   "znamka" => 3],
    ["meno" => "Tomáš",   "znamka" => 5],
];

// Funkcie
function slovnaZnamka($znamka) {
    if($znamka == 1) {
        return "Výborný";
    } elseif ($znamka == 2) {
        return "Chválitebný";
    } elseif ($znamka == 3) {
        return "Dobrý";
    } elseif ($znamka == 4) {
        return "Dostatočný";
    } else {
        return "Nedostatočný";
    }
}

function priemer($ziaci) {
    $sucet = 0;
    foreach($ziaci as $ziak) {
        $sucet = $sucet + $ziak["znamka"];
    }
    return round($sucet / count($ziaci), 2);
}

function najlepsiZiak($ziaci) {
    $najlepsiaZnamka = 5;
    $meno = "";

    foreach($ziaci as $ziak) {
        if($ziak["znamka"] < $najlepsiaZnamka) {
            $najlepsiaZnamka = $ziak["znamka"];
            $meno = $ziak["meno"];
        }
    }
    return $meno;
}

echo "--- TRIEDNA KNIHA---" . "<br>";
foreach($ziaci as $ziak){
    echo $ziak["meno"] . ": známka " . $ziak["znamka"] . " (" . slovnaZnamka($ziak["znamka"]) . ")<br>"; 
}

echo "<br>";
echo "Priemer triedy: " . priemer($ziaci) . "<br>";
echo "Najlepší žiak: " . najlepsiZiak($ziaci) . "<br>";

?>