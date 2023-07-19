<?php
function random_psw($length, $chars)
{
    // $characters = implode("", range('A', 'z'));
    // $password = [];
    // for ($i = 0; $i < $length; $i++) {
    //     $index = rand(0, strlen($characters) - 1);
    //     $password[] = $characters[$index];
    // }
    // return implode($password);

    // Versione semplificata della funzione precedente 
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}
