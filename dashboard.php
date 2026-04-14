    <?php
    session_start();

    if(!isset($_SESSION["prihlaseny"])) {
        header("Location: login.php");
        exit();
    }
    ?>

    <h1>👋 Vitaj, <?= $_SESSION["user_meno"] ?>!</h1>
    <h2>📧 Tvoj email: <?= $_SESSION["user_email"] ?></h2>
    <a href="odhlasenie.php">Odhlasit sa</a>