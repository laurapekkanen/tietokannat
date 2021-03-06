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
    a {text-decoration: none;}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <a href="index.php"><h3 class="w3-padding-64"><b>Budjettilaskuri</b></h3></a>
  </div>
  <!--<div class="w3-bar-block">
    <a href="profiili.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Profiili</a>
    <a href="suunnitelma.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Suunnitelma</a>
    <a href="menottulot.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Menot ja Tulot</a>
    <a href="tilanne.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tilanne</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Aiemmat kuukaudet</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kirjaudu ulos</a>
  </div>-->
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
    <h1 class="w3-jumbo"><b>Budjettilaskuri</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

<!-- Kirjaudu -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Kirjaudu</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <form action="check.php" method="post">
        <div class="w3-group">
        <label>Käyttjätunnus</label>
        <input class="w3-input w3-border" type="text" name="tunnus" required>
      </div>
        <div class="w3-group">
        <label>Salasana</label>
        <input class="w3-input w3-border" name="salasana" type="password" maxlenght="20" minlength="5" required>
      </div>
      <input type="submit" name="kirjaudu" value="Kirjaudu" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom"/>
    </form>
  </div>

    <!-- TARVITSEEKO TEHDÄ TOINEN TSEKKAUS LUO TUNNUS KOHDASSA? (ONKO TUNNUS JO OLEMASSA)
    KAKSI ERI KYSELYÄ?
    MIHIN INSERT?-->

  <!-- Luo tunnus -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Luo käyttäjä</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <form action="insert.php" method="post" onsubmit="return checkForm(this);"><!--onsubmit tärkeä-->
      <div class="w3-group">
        <label>Etunimi</label>
        <input class="w3-input w3-border" type="text" name="enimi" required>
      </div>
      <div class="w3-group">
        <label>Sukunimi</label>
        <input class="w3-input w3-border" type="text" name="snimi" required>
      </div>
        <div class="w3-group">
        <label>Käyttäjätunnus</label>
        <input class="w3-input w3-border" type="text" name="tunnus2" required>
      </div>
        <div class="w3-group">
        <label>Salasana</label>
        <input class="w3-input w3-border" name="salasana1" type="password" maxlenght="20" minlength="5" required>
      </div>
      <div class="w3-group">
        <label>Vahvista salasana</label>
        <input class="w3-input w3-border"  name="salasana2" type="password" maxlenght="20" minlength="5" required>
      </div>
      <input type="submit" name="luo_tunnus" value="Luo tunnus" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom"/>
    </form>
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

//salasanan tarkistus
function checkForm(form){
    if(form.salasana1 == form.salasana2)
    return true;
}else {
    alert("Error: Tarkista salasana!");
}
</script>

</body>
</html>
