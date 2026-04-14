<?php
session_start();

$pouzivatelia = [
    ["email" => "admin@test.sk", "heslo" => "heslo123", "meno" => "Admin"],
    ["email" => "tomas@test.sk", "heslo" => "tomas123", "meno" => "Tomas"],
];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["user_email"] ?? "";
    $heslo = $_POST["user_heslo"] ?? "";
    $najdeny = false;

    foreach($pouzivatelia as $user) {
        if($email == $user["email"] && $heslo == $user["heslo"]) {
            $_SESSION["prihlaseny"] = true;
            $_SESSION["user_meno"] = $user["meno"];
            $_SESSION["user_email"] = $user["email"];
            $najdeny = true;
            header("Location: dashboard.php");
            exit();
        }
    }

    if(!$najdeny){
        $chyba = "Zle meno alebo heslo!";
    }
}
?>

<?php if(isset($chyba)): ?>
    <p style="color: red"><?= $chyba ?></p>
<?php endif; ?>

<form method="POST">
    <input type="email" name="user_email" placeholder="Email">
    <input type="password" name="user_heslo" placeholder="Heslo">
    <input type="submit" value="Prihlasit sa">
</form>