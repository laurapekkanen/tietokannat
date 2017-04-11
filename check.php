<?php
    session_start();
    // Tietokantayhteys
    include "connect.php";

    // Muuttujat
    $user = $_POST['tunnus'];
    $pass = $_POST['salasana'];

    // Kysely
    $query = "select * from KAYTTAJANIMI where ktunnusID like '$user' and salasana like '$pass'";
    $sql = mysqli_query($con,$query);

    $num_row = mysqli_num_rows($sql);

    if($num_row == 1) {
        $_SESSION['user'] = $user;
        header("Location:profiili.php");
    } else {
        header( "refresh:2;url=index.php" );
        echo "Väärä käyttäjätunnus tai salasana";
    }
    mysqli_close($con);

?>
