
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>KINO Za rogiem</title>
</head>

  <header class="baner">
    <img src="baner.jpg" alt="baner">
  </header>
<body>
  <section class="main">
  <section class="left">
    <ul>
      <li>
        <a href="index.html">Strona główna</a>
      </li>
    </ul>
    <form method="POST" action=".php">
    <p>Data i godzina seansu</p>
    <hr>
    <input type="date" name="data" id="data">
    <input type="time" name="godzina" id="godzina">
    <button type="submit">Wyslij</button>
  </form>
  </section>
  <section class="recht">
    <h1>System monitorowania rezerwacji</h1>
  </section>
</section>
  <footer>
    <h5>Egzamin INF.03 - AUTOR: Kita</h5>
  </footer>
</body>
</html>
<?php
$serwer = "localhost";
$user = "root";
$baza = "kino";
$pol = mysqli_connect($serwer, $user,"",$baza);
if(!$pol)
{
  echo "brak połączenia";
}
// $mysqli_close($pol);
?>