<?php
$chyby = [];
$uspech = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $meno = trim($_POST["meno"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $sprava = trim($_POST["sprava"] ?? "");

    if(empty($meno)){
        $chyby[] = "Meno je povinne.";
    } elseif (strlen($meno) < 2) {
        $chyby[] = "Meno musi mat minimalne 2 znaky!";
    }

    if(empty($email)) {
        $chyby[] = "Email je povinny!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $chyby[] = "Email nie je platny!";
    }

    if(strlen($sprava) < 10){
        $chyby[] = "Sprava je prilis kratka.";
    }

    if(strlen($sprava) > 500){
        $chyby[] = "Sprava je prilis dlha.";
    }

    if(empty($chyby)){
        $uspech = true;
    }

}
?>
<?php if($uspech): ?>
    <p style="color:green">✅ Sprava od <?= $meno ?>, bola uspesne odoslana!</p>
<?php elseif(!empty($chyby)): ?>
    <?php foreach($chyby as $chyba): ?>
        <p style="color:red">❌ <?= $chyba ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form action="" method="post">
    <label>Meno</label>
    <input type="text" name="meno" value="<?= $_POST["meno"] ?? ""?> ">
    <br>
    <label>Email</label>
    <input type="email" name="email" value="<?= $_POST["email"] ?? "" ?>">
    <br>
    <label>Sprava</label>
    <textarea name="sprava" rows="5"><?= htmlspecialchars($sprava ?? "") ?></textarea>
    <br>
    <input type="submit" value="Odoslat">
</form>