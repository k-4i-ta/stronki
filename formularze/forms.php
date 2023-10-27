
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="head">
        <h2 class="p1">Ciucholandia</h2>
    </header>
    <section class="main">
        <div class="Lbaner"> 
            <h3>Najlepsze ubrania tylko u nas!</h3>
            <img src="logo.png" alt="logo">
            <h6>Ubrania szyte etycznie, nie z Chin a z Kambodży!</h6>
        </div>
        <div class="obraz"> 
            <img src="bryczesy.jpg" alt="miejsce na obraz" id="obraz" width="512" height = "500">
        </div>
        <form method="post" action="wynik.php" id="formularz" onchange="funkcja()">
            <span>Wybierz produkt: </span> 
            <select name="ciuchy" id="ubrania" >
                <option value="bryczesy">Bryczesy</option>
                <option value="koszulka">Koszulka</option>
                <option value="klapki">Klapki</option>
                <option value="skiety">Skiety</option>
                <option value="kimono">Kimono</option>
            </select>
            <span>Podaj ilość</span>
            <input type="number" id="wiela" name="wiela"></input>
            <br>
            <span>Podaj imię: </span>
            <input type="text" name="imie" id="name" required></input>
            <br>
            <button type="submit">Zatwierdź</button>
        </form>
    </section>
    <footer><p>Bartosz Kita 5i </p></footer>
    <script>
    function funkcja(){
        const obraz = document.querySelector("#obraz");
        const wybor = document.querySelector("#ubrania").value;

        switch (wybor) {
    case "bryczesy":
    obraz.src = "bryczesy.jpg";
      break;

    case "koszulka":
    obraz.src = "koszulka.jpg";
      break;

    case "klapki":
    obraz.src = "klapki.jpg";
      break;

    case "skiety":
    obraz.src = "skiety.jpg";     
     break;
    case "kimono":
    obraz.src = "kimono.jpg";
      break;
    default:
        }}
    </script>
</body>
</html>
