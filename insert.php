<?php
    // Tietokantayhteyden muodostaminen
    include "connect.php";

    // Lomakkeen muuttujat ($_POST-määritys kerää tiedon lomakkeen osoitetusta kentästä)
    $enimi = $_POST['enimi'];
    $snimi = $_POST['snimi'];
    $ktunnusID = $_POST['tunnus2'];
    $salasana = $_POST['salasana1'];
    $summa = $_POST['summa'];
    $ruoka = $_POST['ruoka'];

    // Valmistellaan siirrettävä jono
    $query = "insert into KAYTTAJA (enimi, snimi) values ('$enimi', '$snimi')";
    $sql = mysqli_query($con,$query);

    // Valmistellaan siirrettävä jono
    $query2 = "select * from KAYTTAJA order by kayttajaID desc limit 1";

    // Suoritetaan siirto
    $sql2 = mysqli_query($con,$query2) or die ("Ei voitu hakea käyttäjää!");

    $result = mysqli_fetch_array($sql2);
    $id = $result['kayttajaID'];

    // Valmistellaan siirrettävä jono
    $query3 = "insert into KAYTTAJANIMI (ktunnusID, salasana, kayttajaID) values ('$ktunnusID','$salasana',$id)";

    // Suoritetaan siirto
    mysqli_query($con,$query3) or die ("Tunnus jo olemassa!");

    header('Location:profiili.php');

    // Suljetaan yhteys
    mysqli_close($con);
?>
