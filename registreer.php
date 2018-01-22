<?php
$user=" ";
$password=" ";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//login check
if(isset($_POST['submit'])){

    if(($_POST['user'] == $user) and (password_verify($password, $hashed_password))){
        echo "login gelukt.";
    }
    else
    {
        echo "login mislukt.";
    }
}
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="Style.css">
    <title>LOG IN PAGINA</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<header>
    <div class="navbar">
        <a href="http://localhost:63342/SportschoolBenno/Home.html?_ijt=41d0ins4s7s1ggohc6f7h1d4">Home</a>
        <a href="http://localhost:63342/SportschoolBenno/Sportinzage.html?_ijt=p66km7vg5rb0k7r6crgmohm39c"> Sportinzage</a>
        <a href="http://localhost:63342/SportschoolBenno/SporttipsEnAdviezen.html?_ijt=p66km7vg5rb0k7r6crgmohm39c">Sporttips en Adviezen</a>
        <a href="http://localhost:63342/SportschoolBenno/Aanbod.html?_ijt=p66km7vg5rb0k7r6crgmohm39c">Aanbod</a>
        <a href="http://localhost:63342/SportschoolBenno/Tarieven.html?_ijt=p66km7vg5rb0k7r6crgmohm39c">Tarieven</a>
        <a href="http://localhost:63342/SportschoolBenno/Contactinformatie.html?_ijt=p66km7vg5rb0k7r6crgmohm39c">Contact Informatie</a>
        <a id="INLOG" href="http://localhost/sportschoolBenno/registreer.php">Registreren</a>
        <a id="INLOG">Inloggen</a>

    </div>
</header>

<div class="loginform">
  <form method="Post">
      <input type="text" name = "naam" placeholder = "naam" />
      <br>
      <input type="text" name = "adres" placeholder = "adres" />
      <br>
      <input type="text" name = "woonplaats" placeholder = "woonplaats" />
      <br>
      <input type="text" name = "geslacht" placeholder = "geslacht" />
      <br>
      <input type="text" name = "user" placeholder = "gebruikersnaam" />
      <br>
      <input type="password" name = "password" placeholder = "wachtwoord" />
      <br>
      <input type="submit" name = "submit" value = "registreer"/ >
  </form>
</div>
</html>