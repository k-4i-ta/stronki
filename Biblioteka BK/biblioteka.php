<?php
$adres = '127.0.0.1';
$user = 'root';
$pwd = '';
$baza = 'biblioteka';
$pol = mysqli_connect($adres,$user,$pwd,$baza);
if(!$pol)
{
    mysqli_error($pol);
}
else
{

}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <header><h1>Biblioteka w Książkowicach Małych</h1></header>
    <main>
        <section class="lewy">
            <h4>Dodaj czytelnika</h4>
            <form action="#" method="POST">
                Imie: <input type="text" id="imie" name="imie"> <br>
                Nazwisko: <input type="text" id="nazwisko" name="nazwisko"> <br>
                Symbol: <input type="number" id="symbol" name="symbol"> <br>
                <button type="submit" name="submit" id="submit">AKCEPTUJ</button>
            </form>
            <?php
                if(isset($_POST['submit']))
                {

                    @$name = $_POST['imie'];
                    @$vorname = $_POST['nazwisko'];
                    @$kod = $_POST['symbol'];
                    if(!empty($name) && !empty($vorname))
                    {
                        echo "dodano użytkownika $name $vorname!";
                        $zap1 = "INSERT INTO czytelnicy(czytelnicy.id, czytelnicy.imie, czytelnicy.nazwisko, czytelnicy.kod) VALUES (NULL, '$name','$vorname','$kod' );";
                        $query1 = mysqli_query($pol, $zap1);
                    }
                    else
                    {
                        echo "wprowadź poprawne dane";
                    }
                }
            ?>
        </section>
        <section class="srodkowy">
            <img src="biblioteka.png" alt="biblioteka">
            <h6>ul.&nbspCzytelników&nbsp15;&nbspKsiążkowice&nbspMałe</h6>
            <p><a href="mailto: biuro@bib.pl">Czy masz jakieś uwagi?</a></p>
        </section>
        <section class="prawy">
            <h4>Nasi czytelnicy</h4>
            <ol>
                <?php
                      $zap2 = "SELECT czytelnicy.imie, czytelnicy.nazwisko FROM czytelnicy";
                      $query2 = mysqli_query($pol, $zap2);
                      while($wynik2 = mysqli_fetch_assoc($query2)) {
                          echo "<li>".$wynik2['imie']."&nbsp".$wynik2['nazwisko'] ."</li>";
                      } 
                ?>
            </ol>
        </section>
    </main>
    <footer><p>Projekt witryny: BK</p></footer>
</body>
</html>
<?php
mysqli_close($pol);
?>