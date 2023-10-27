
<?php 
    $imie = $_POST ['imie'];
    if (!isset($_COOKIE[$imie]))
    {
        $cookie = 1;
        setcookie($imie, $cookie);
        echo("Witaj $imie, jesteś tu po raz pierwszy");
    }
    else
    {
        $cookie = ++$_COOKIE[$imie];
        setcookie($imie, $cookie);
        echo("$imie, byłeś tu
        $_COOKIE[$imie] razy");
    }
 ?> 
