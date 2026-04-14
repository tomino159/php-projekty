<?php
$host = "localhost";
$uzivatel = "root";
$heslo = "";
$databaza = "moja_app";

$conn = mysqli_connect($host, $uzivatel, $heslo, $databaza);

if(!$conn){
    die("Chyba pripojenia: " . mysqli_connect_error());
}
?>