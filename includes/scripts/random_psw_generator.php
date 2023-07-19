<?php
// Funzione che con il metodo str_shuffle crea una psw senza doppioni
function random_psw($length, $chars)
{
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
};

// Funzione che sfrutta un ciclo for per creare una psw con possibili doppioni
function random_psw_with_doubles($length, $chars)
{
    $psw = [];
    $alphabet_length = strlen($chars) - 1;
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, $alphabet_length);
        $psw[] = $chars[$index];
    }
    return implode($psw);
}
