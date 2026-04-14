<?php
require "db.php";

$vysledok = mysqli_query($conn, "SELECT * FROM pouzivatelia");

if(isset($_GET["zmaz"])) {
    $id = $_GET["zmaz"];
    mysqli_query($conn, "DELETE FROM pouzivatelia WHERE id = $id");
    header("Location: spravca.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $meno = trim($_POST["meno"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $heslo = $_POST["heslo"] ?? "";

    if(!empty($meno) && !empty($email) && !empty($heslo)) {
        mysqli_query($conn, "INSERT INTO pouzivatelia (meno, email, heslo)
                             VALUES ('$meno', '$email', '$heslo')");
        header("Location: spravca.php");
        exit();
    }
}
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Meno</th>
        <th>Email</th>
    </tr>
    <?php while($riadok = mysqli_fetch_assoc($vysledok)): ?>
        <tr>
            <td><?= $riadok["id"] ?></td>
            <td><?= $riadok["meno"] ?></td>
            <td><?= $riadok["email"] ?></td>
            <td><a href="spravca.php?zmaz=<?= $riadok["id"]?>">Zmazať</a></td>
        </tr>
    <?php endwhile; ?>
</table>

<br>
<br>

<h2>=== PRIDAŤ POUŽIVATEĽA ===</h2>
<form method="POST">
    <label>Meno</label>
    <input type="text" name="meno" placeholder="Meno" value="<?=htmlspecialchars($meno ?? "")?>" >

    <label>Email</label>
    <input type="email" name="email" placeholder="Email" value= "<?=htmlspecialchars($email ?? "") ?>">

    <label>Heslo</label>
    <input type="password" name="heslo" placeholder="Heslo">

    <input type="submit" value="Pridat pouzivatela">
</form>