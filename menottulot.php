<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
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
    // Kutsutaan PHP:n istuntomuuttujia
    echo "Tunnus on " . $_SESSION['user'] . ".<br>";
    //echo "Salasana on " . $_SESSION['password'] . ".";

    $query = "select * from KAYTTAJA, KAYTTAJANIMI where KAYTTAJA.kayttajaID=KAYTTANIMI.kayttajaID";
    $meno = "select * from MENOT";
    $sql = mysqli_query($con,$query);
    //$meno = "select * from MENOT";
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
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kirjaudu ulos</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">â˜°</a>
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

<!-- MENOT -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Menot.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <form action="/action_page.php" target="_blank">
      <div class="w3-group">
        <label>Meno</label>
        <input class="w3-input w3-border" type="text" name="meno" required>
      </div>
      <div class="w3-group">
          <label>Tyyppi</label><br>
          <select name="tyyppi">
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
    <h1 class="w3-xxxlarge w3-text-red"><b>Tulot.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <form action="/action_page.php" target="_blank">
      <div class="w3-group">
        <label>Tulo</label>
        <input class="w3-input w3-border" type="text" name="tulo" required>
      </div>
      <div class="w3-group">
          <label>Tyyppi</label><br>
          <select name="tyyppi">
            <option value='tyyppi'>Valitse tyyppi</option>
            <option name="ruoka_t" value='ruoka'>Ruoka</option>
            <option name="laskut_t" value='laskut'>Laskut</option>
            <option name="asuminen_T" value='asuminen'>Asuminen</option>
            <option name="viihde_t" value='viihde'>Viihde</option>
            <option name="liikkuminen_t" value='liikkuminen'>Liikkuminen</option>
            <option name="muut_T" value='muut'>Muut</option>
          </select>
      </div>
      <div class="w3-group">
        <label>Summa</label>
        <input class="w3-input w3-border" type="text" name="summa" required>
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
        <li class="w3-padding-16">Ruoka</li>
        <li class="w3-padding-16">Laskut</li>
        <li class="w3-padding-16">Asuminen</li>
        <li class="w3-padding-16">Viihde</li>
        <li class="w3-padding-16">Liikkuminen</li>
          <li class="w3-padding-16">Muut</li>
        <li class="w3-padding-16">
            <h2>Yhteensä</h2>
          <h2>$ 199</h2>
          <span class="w3-opacity">per room</span>
        </li>
      </ul>
    </div>

    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Tulot</li>
        <li class="w3-padding-16">Ruoka</li>
        <li class="w3-padding-16">Laskut</li>
        <li class="w3-padding-16">Asuminen</li>
        <li class="w3-padding-16">Viihde</li>
        <li class="w3-padding-16">Liikkuminen</li>
          <li class="w3-padding-16">Muut</li>
        <li class="w3-padding-16">
            <h2>Yhteensä</h2>
          <h2>$ 249</h2>
          <span class="w3-opacity">per room</span>
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
