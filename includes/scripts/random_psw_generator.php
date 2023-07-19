<?php 

function random_psw($length)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz|!"$%&/()=?^*@#-_<>';
    $password = [];
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password[] = $characters[$index];
    }
    return implode($password);
}
