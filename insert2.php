<?php
    // Tietokantayhteyden muodostaminen
    include "connect.php";

    // Lomakkeen muuttujat ($_POST-määritys kerää tiedon lomakkeen osoitetusta kentästä)
    $summa = $_POST['summa'];
    $tyyppi_meno = $_POST['tyyppi_meno'];

    //menot
    if($tyyppi_meno=='ruoka'){
        $query4 = "insert into MENOT (ruoka) values('$summa')";
    }if($tyyppi_meno=='laskut'){
        $query4 = "insert into MENOT (laskut) values('$summa')";
    }if($tyyppi_meno=='asuminen'){
        $query4 = "insert into MENOT (asuminen) values('$summa')";
    }if($tyyppi_meno=='viihde'){
        $query4 = "insert into MENOT (viihde) values('$summa')";
    }if($tyyppi_meno=='liikkuminen'){
        $query4 = "insert into MENOT (liikkuminen) values('$summa')";
    }if($tyyppi_meno=='muut'){
        $query4 = "insert into MENOT (muut) values('$summa')";
    };

    mysqli_query($con,$query4) or die ("Jotain meni vikaan");

    header('Location:suunnitelma.php');

    // Suljetaan yhteys
    mysqli_close($con);
?>
