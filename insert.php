<?php
    // Tietokantayhteyden muodostaminen
    include "connect.php";

    // Lomakkeen muuttujat ($_POST-määritys kerää tiedon lomakkeen osoitetusta kentästä)
    $enimi = $_POST['enimi'];
    $snimi = $_POST['snimi'];
    $taulu = "HENKILO";

    // Valmistellaan siirrettävä jono
    $query = "insert into $taulu (enimi, snimi) values ('".$enimi."', '".$snimi."'')";

    // Suoritetaan siirto
    mysqli_query($yhteys,$query) or die ("Ei voitu siirtää tietoja kantaan!");

    // Suljetaan yhteys
    mysqli_close($yhteys);
?>
