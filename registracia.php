<?php
session_start();
$chyby = [];
$uspech = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $meno = trim($_POST["meno"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $heslo = $_POST["heslo"] ?? "";

    if (empty($meno)) {
        $chyby[] = "Meno je povinne.";
    } elseif (strlen($meno) < 2) {
        $chyby[] = "Meno musi mat aspon 2 znaky.";
    }

    if(empty($email)) {
        $chyby[] = "Email je povinny!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $chyby[] = "Email nie je platny!";
    }

    if(empty($heslo)) {
        $chyby[] = "Heslo je povinne!";
    } elseif (strlen($heslo) < 6) {
        $chyby[] = "Heslo musi mat minimalne 6 znakov.";
    }

    if(empty($chyby)) {
        $uspech = true;
    }

    if($uspech){
        $_SESSION["user_meno"] = $meno;
        $_SESSION["user_email"] = $email;
        $_SESSION["prihlaseny"] = true;
        header("Location: dashboard.php");
        exit();
    }
}
?>

<?php if($uspech): ?>
    <p style="color:green">✅ Registrácia úspešná! Vitaj, <?= $meno ?>!</p>
<?php elseif(!empty($chyby)): ?>
    <?php foreach($chyby as $chyba): ?>
        <p style="color:red">❌ <?= $chyba ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form action="" method="POST">
    <label>Meno: </label>
    <input type="text" name="meno" value="<?=htmlspecialchars($meno ?? '') ?>">
    <br><br>

    <label>Email: </label>
    <input type="email" name="email" value="<?=htmlspecialchars($email ?? '') ?>">
    <br><br>

    <label>Heslo: </label>
    <input type="password" name="heslo">

    <input type="submit" value="Registrovať sa">
</form>