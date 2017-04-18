<?php
    // Tietokantayhteyden muodostaminen
    include "connect.php";

    // Lomakkeen muuttujat ($_POST-määritys kerää tiedon lomakkeen osoitetusta kentästä)
    $summa_tulot = $_POST['summa_tulot'];
    $tyyppi_tulo = $_POST['tyyppi_tulo'];


    //tulot
    if($tyyppi_tulo=='palkka'){
        $query5 = "insert into TULOT (palkka) values('$summa_tulot')";
    }if($tyyppi_tulo=='tuki'){
        $query5 = "insert into TULOT (tuki) values('$summa_tulot')";
    }if($tyyppi_tulo=='laina'){
        $query5 = "insert into TULOT (laina) values('$summa_tulot')";
    }if($tyyppi_tulo=='muut_t'){
        $query5 = "insert into TULOT (muut) values('$summa_tulot')";
    };

    mysqli_query($con,$query5) or die ("Jotain meni vikaan1");

    header('Location:suunnitelma.php');

    // Suljetaan yhteys
    mysqli_close($con);
?>
