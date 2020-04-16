<?php

    $password = 'Boolean';
    $parola_utente = $_GET['parola'];

    if ($parola_utente == $password) {
        echo '<h1 style="color: green;"> Hai indovinato la password: ' .$parola_utente .'</h1>';
    } else
        echo '<h1 style="color: red;">'.$parola_utente .' non è la password esatta.</h1>';
?>
