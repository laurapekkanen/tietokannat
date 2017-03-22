<?php
    // Yhteysparametrit
    $user = "root";
    $pass = "root66";
    $host = "dbserver.fi";
    $db = "testikanta";

    // Yhteyden muodostaminen (mukana virheiden hallinta)
    $yhteys = mysqli_connect($host,$user,$pass) or die("Yhteyttä palvelimeen ei voitu muodostaa!");

    // Valitaan käytettävä tietokanta
    mysqli_select_db($yhteys,$db) or die("Tietokantaa ei voitu valita!");
?>
