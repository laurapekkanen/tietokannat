<?php
    // Aloitetaan istunto
    session_start();
?>
<!DOCTYPE html>
<html>
<title>Budjettilaskuri</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<?php
    include "connect.php";
    // Kutsutaan PHP:n istuntomuuttujia
    echo "Tunnus on " . $_SESSION['user'] . ".<br>";
    //echo "Salasana on " . $_SESSION['password'] . ".";
    //$meno = "select * from MENOT";
    //$sumruoka = "select sum(ruoka) from MENOT";
    //$sql = mysqli_query($con,$query);
    //$sql_ruoka = mysqli_query($con,$sumruoka);
    //$rivi = mysqli_fetch_array($sql_ruoka);
    $row_ruoka = mysqli_query($con, 'select sum(ruoka) as ruoka_summa from MENOT');
    $result_ruoka = mysqli_fetch_array($row_ruoka);
    $sumruoka = $result_ruoka['ruoka_summa'];

    $row_laskut = mysqli_query($con, 'select sum(laskut) as laskut_summa from MENOT');
    $result_laskut = mysqli_fetch_array($row_laskut);
    $sumlaskut = $result_laskut['laskut_summa'];

    $row_asu = mysqli_query($con, 'select sum(asuminen) as asu_summa from MENOT');
    $result_asu = mysqli_fetch_array($row_asu);
    $sumasu = $result_asu['asu_summa'];

    $row_viih = mysqli_query($con, 'select sum(viihde) as viih_summa from MENOT');
    $result_viih = mysqli_fetch_array($row_viih);
    $sumviih = $result_viih['viih_summa'];

    $row_liik = mysqli_query($con, 'select sum(liikkuminen) as liik_summa from MENOT');
    $result_liik = mysqli_fetch_array($row_liik);
    $sumliik = $result_liik['liik_summa'];

    $row_muut = mysqli_query($con, 'select sum(muut) as muut_summa from MENOT');
    $result_muut = mysqli_fetch_array($row_muut);
    $summuut = $result_muut['muut_summa'];

    $row_yht = mysqli_query($con, 'select sum(ruoka)+sum(laskut)+sum(asuminen)+sum(viihde)+sum(liikkuminen)+sum(muut) as yht_summa from MENOT');
    $result_yht = mysqli_fetch_array($row_yht);
    $sumyht = $result_yht['yht_summa'];
?>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <a href="index.php"><h3 class="w3-padding-64"><b>Budjettilaskuri</b></h3></a>
  </div>
  <div class="w3-bar-block">
    <a href="profiili.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Profiili</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Suunnitelma</a>
    <a href="menottulot.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Menot ja Tulot</a>
    <a href="tilanne.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tilanne</a>
    <a href="kuukaudet.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Aiemmat kuukaudet</a>
    <a href="destroy_session.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kirjaudu ulos</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">MENU</a>
  <span>Budjettilaskuri</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Suunnitelma</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

    <!-- Luo uusi suunnitelma -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Luo uusi suunnitelma</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <form action="insert_suun.php" method="post">
      <div class="w3-group">
      </div><!--
      <div class="w3-group">
          <label>Kuukausi</label><br>
          <select name="kk">
            <option value='kk'>Valitse kuukausi</option>
            <option name="1" value='tammi'>Tammi</option>
            <option name="helmi" value='helmi'>Helmi</option>
            <option name="maalis" value='maalis'>Maalis</option>
            <option name="huhti" value='huhti'>Huhti</option>
            <option name="touko" value='touko'>Touko</option>
            <option name="kesa" value='kesa'>Kesä</option>
            <option name="heina" value='heina'>Heinä</option>
            <option name="elo" value='elo'>Elo</option>
            <option name="syys" value='syys'>Syys</option>
            <option name="loka" value='loka'>Loka</option>
            <option name="marras" value='marras'>Marras</option>
            <option name="joulu" value='joulu'>Joulu</option>
          </select>
      </div>
      <div class="w3-group">
          <label>Vuosi</label><br>
          <select name="vuosi">
            <option value='vuosi'>Valitse vuosi</option>
            <option name="2017" value='2017'>2017</option>
            <option name="2018" value='2018'>2018</option>
            <option name="2019" value='2019'>2019</option>
            <option name="2020" value='2020'>2020</option>
            <option name="2021" value='2021'>2021</option>
            <option name="2022" value='2022'>2022</option>
            <option name="2023" value='2023'>2023</option>
          </select>
      </div>-->

        <div class="w3-group">
        <label>Kuukauden numero (esim. tammi = 1) </label>
        <input class="w3-input w3-border" type="text" name="kk" required>
      </div>
        <div class="w3-group">
        <label>Vuosi</label>
        <input class="w3-input w3-border" type="text" name="vuosi" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Luo uusi suunnitelma</button>
    </form>
  </div>

<!-- MENOT -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Lisää meno</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <form action="insert2.php" method="post">
      <div class="w3-group">
      </div>
      <div class="w3-group">
          <label>Tyyppi</label><br>
          <select name="tyyppi_meno">
            <option value='tyyppi'>Valitse tyyppi</option>
            <option name="ruoka" value='ruoka'>Ruoka</option>
            <option name="laskut" value='laskut'>Laskut</option>
            <option name="asuminen" value='asuminen'>Asuminen</option>
            <option name="viihde" value='viihde'>Viihde</option>
            <option name="liikkuminen" value='liikkuminen'>Liikkuminen</option>
            <option name="muut" value='muut'>Muut</option>
          </select>
      </div>
      <div class="w3-group">
        <label>Summa</label>
        <input class="w3-input w3-border" type="text" name="summa" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Talleta menot</button>
    </form>
  </div>

<!-- Tulot -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Lisää tulo</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <form action="insert_tulo.php" method="post">
      <div class="w3-group">
      </div>
      <div class="w3-group">
          <label>Tyyppi</label><br>
          <select name="tyyppi_tulo">
            <option value='tyyppi'>Valitse tyyppi</option>
            <option name="palkka" value='palkka'>Palkka</option>
            <option name="tuki" value='tuki'>Tuki</option>
            <option name="laina" value='laina'>Laina</option>
            <option name="muut_t" value='muut_t'>Muu</option>
          </select>
      </div>
      <div class="w3-group">
        <label>Summa</label>
        <input class="w3-input w3-border" type="text" name="summa_tulot" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Talleta tulot</button>
    </form>
  </div>

<!-- Suunnitellut menot ja tulot -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Menot ja tulot</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Menot</li>
        <?php
        echo "<li class='w3-padding-16'>Ruoka:".$sumruoka."</li>";
        echo "<li class='w3-padding-16'>Laskut:".$sumlaskut."</li>";
        echo "<li class='w3-padding-16'>Asuminen:".$sumasu."</li>";
        echo "<li class='w3-padding-16'>Viihde:".$sumviih."</li>";
        echo "<li class='w3-padding-16'>Liikkuminen:".$sumliik."</li>";
        echo "<li class='w3-padding-16'>Muut:".$summuut."</li>";
        echo"<li class='w3-padding-16'>
            <h2>Yhteensä:".$sumyht."</h2>
        </li>";
          ?>
      </ul>
    </div>

    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Tulot:</li>
        <li class="w3-padding-16">Palkka:</li>
        <li class="w3-padding-16">Tuki:</li>
        <li class="w3-padding-16">Laina:</li>
        <li class="w3-padding-16">Muu:</li>
        <li class="w3-padding-16">
            <h2>Yhteensä:</h2>
          <h2></h2>
        </li>
      </ul>
    </div>
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
