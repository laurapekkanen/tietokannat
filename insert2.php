<?php
    // Tietokantayhteyden muodostaminen
    include "connect.php";

    // Lomakkeen muuttujat ($_POST-määritys kerää tiedon lomakkeen osoitetusta kentästä)
    $summa = $_POST['summa'];
    $tyyppi = $_POST['tyyppi'];

    /*switch(){
        case 1:
            "insert into MENOT (ruoka) values('$summa')"
            break;
    }*/



    //$query4 = "insert into MENOT (ruoka) values('$summa')";

    if($tyyppi=='ruoka'){
        $query4 = "insert into MENOT (ruoka) values('$summa')";
    }if($tyyppi=='laskut'){
        $query4 = "insert into MENOT (laskut) values('$summa')";
    }if($tyyppi=='asuminen'){
        $query4 = "insert into MENOT (asuminen) values('$summa')";
    }if($tyyppi=='viihde'){
        $query4 = "insert into MENOT (viihde) values('$summa')";
    }if($tyyppi=='liikkuminen'){
        $query4 = "insert into MENOT (liikkuminen) values('$summa')";
    }if($tyyppi=='muut'){
        $query4 = "insert into MENOT (muut) values('$summa')";
    }

    mysqli_query($con,$query4) or die ("Jotain meni vikaan");

    header('Location:suunnitelma.php');

    // Suljetaan yhteys
    mysqli_close($con);
?>
