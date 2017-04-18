<?php
    // Tietokantayhteyden muodostaminen
    include "connect.php";

    // Lomakkeen muuttujat ($_POST-määritys kerää tiedon lomakkeen osoitetusta kentästä)
    $summa = $_POST['summa'];
    $kk = $_POST['kk'];
    $vuosi = $_POST['vuosi'];

    $query6 = "insert into BUDJETTI(kknimi, vuosi) values($kk, $vuosi)";

    mysqli_query($con,$query6) or die ("Jotain meni vikaan");

    header('Location:suunnitelma.php');

    // Suljetaan yhteys
    mysqli_close($con);
?>
