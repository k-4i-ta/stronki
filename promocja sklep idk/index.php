<?php
    $adres = "127.0.0.1";
    $user = "root";
    $baza = "sklep";
    $pol = mysqli_connect($adres, $user, "", $baza);
    mysqli_error($pol);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Sklep dla uczniów</title>
</head>
<body>
    <header class="baner"><h1>Dzisiejsze promocje naszego sklepu</h1></header>
    <section class="box">
        <section class="lewo">
            <h2>Taniej o 30%</h2>
            <ol>
            </html>
                <?php
                    $zap1 = "SELECT towary.nazwa FROM towary WHERE towary.promocja = 1;";
                    $query1 = mysqli_query($pol, $zap1);
                    while($wynik1 = mysqli_fetch_assoc($query1)) {
                        // var_dump($wynik1);
                        echo "<li>".$wynik1['nazwa'] ."</li>"."<br>";
                    }
                ?>
            <html>
            </ol>
        </section>
        <section class="srod">
            <h2>Sprawdź cenę</h2>
            <form action="#" method="POST">
                <select name="lista" id="lista">
                    <option value="Gumka do mazania">Gumka do mazania</option>
                    <option value="Cienkopis">Cienkopis</option>
                    <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                    <option value="Markery 4 szt.">Markery 4 szt.</option>
                </select>
                <button type="submit">Sprawdź</button>
        </form>
        <div class="skrypt2">
            </html>
            <?php
                @$wartosc = $_POST['lista'];
                $zap2 = "SELECT towary.cena FROM towary WHERE towary.nazwa = '$wartosc';";
                $query2 = mysqli_query($pol, $zap2);
                $cena1 = mysqli_fetch_row($query2);
                if(isset($wartosc))
                {
                    echo "Cena regularna: $cena1[0]zł"."<br>";
                    $cena2 = $cena1[0] * 0.7;
                    echo "Cena w promocji: $cena2"."zł";
                }
                
            ?>
            <html>
        </div>
    </section>
    <section class="prawo">
        <h2>Kontakt</h2>
        <p>email: <a href="mailto:bok@sklep.pl">boki@sklep.pl</a></p>
        <img src="promocja.png" alt="promocja">
    </section>
</section>
    <footer>Bartosz kita</footer>
</body>
</html>
<?php
mysqli_close($pol);
?>