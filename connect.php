<?php
// Ladataan yhteysmuuttujat taulukkoon
$config = parse_ini_file('../../../connect.ini');
// Yhteyden muodostaminen tietokantaan
$con = mysqli_connect($config['server'],$config['username'],$config['password']);
// MerkistÃ¶n asettaminen
mysqli_query($con,"set names utf8");
if($con == false) {
echo "tietokantayhteyden muodostaminen epäonnistui";
}
else {
 mysqli_select_db($con,$config['dbname']) or die ("Tietokannan valitseminen epäonnistui");
}
?>
