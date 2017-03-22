<?php
    // Tietokantayhteyden muodostaminen
    include "connect.php";

    // Lomakkeen muuttujat ($_POST-määritys kerää tiedon lomakkeen osoitetusta kentästä)
    $ktunnusID = $_POST['tunnus'];
    $salasana = $_POST['salasana'];
    $taulu = "KAYTTAJANIMI";

    // Valmistellaan siirrettävä jono
    $query = "insert into $taulu (tunnus, salasana) values ('".$ktunnusID."', '".$salasana."'')";

    // Suoritetaan siirto
    mysqli_query($yhteys,$query) or die ("Ei voitu siirtää tietoja kantaan!");

    // Suljetaan yhteys
    mysqli_close($yhteys);
?>
