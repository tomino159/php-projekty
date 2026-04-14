<?php
    if(isset($_POST["teplota"])){
        $teplota = $_POST["teplota"];

        if($teplota < 0){
            echo "🧥 Vezmi si Kabát!";
        }elseif($teplota <= 15){
            echo "🧣 Vezmi si bundu.";
        }elseif($teplota <= 25){
            echo "👕 Tričko postačí.";
        }else{
            echo "🩳 Krátke nohavice!";
        }
    }
?>

<h3>=== Čo si dnes oblečiem ? ===</h3>
<form action="" method="POST">
    <select name="teplota">
        <option value="-5">-5°C (mráz)</option>
        <option value="10">10°C (chladno)</option>
        <option value="20">20°C (teplo)</option>
        <option value="30">30°C (horúco)</option>
    </select>
    <input type="submit" value="Vyber oblečenie">
</form>