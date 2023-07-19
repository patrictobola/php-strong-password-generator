<?php


function randomPassword($letters)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz|!"$%&/()=?^*@#-_<>';
    $password = [];
    for ($i = 0; $i < $letters; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password[] = $characters[$index];
    }
    return implode($password);
}
?>





<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <title>Password Generator</title>
</head>

<body>
    <h1 class="text-center">Password Generator</h1>
    <div class="container w-50 mt-5 bg-secondary p-5">
        <div class="bg-success p-3 mb-5">
            Messaggio di errore
        </div>
        <div>
            <form action="">
                <div class="d-flex justify-content-between mb-5">
                    <label for="psw">Lunghezza della tua password:</label>
                    <input type="number" name="psw" id="psw">
                </div>
                <button class="btn btn-success">Invia Form</button>

            </form>
        </div>

    </div>
</body>

</html>