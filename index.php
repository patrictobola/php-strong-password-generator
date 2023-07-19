<?php
session_start();
// Porto il psw generator 
include __DIR__ . '/includes/scripts/random_psw_generator.php';


// Preset di caratteri che si aggiungeranno in base alle richieste dell'utente 
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$special = '!@#$%^&*()_+-={}[];\',./<>?:"|\\';
$chars = '';



// Creiamo un array in base alle scelte fatte dall'utente
if (isset($_GET['lower'])) $chars .= $lowercase;
if (isset($_GET['upper'])) $chars .= $uppercase;
if (isset($_GET['number'])) $chars .= $numbers;
if (isset($_GET['symbols'])) $chars .= $special;

if (isset($_GET['psw'])) {
    $_SESSION['psw'] = $_GET['psw'];
    $_SESSION['chars'] = $chars;
    $password = intval($_GET['psw']);
}
// Se la psw è stata settata, redirect alla pagina con la psw 
if (isset($password) && $password != '' && $password > 0 && $password) header('Location: ./new_password.php');
var_dump($chars)
?>





<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<?php require __DIR__ . '/includes/layouts/head.php'; ?>

<body>
    <h1 class="text-center">Password Generator</h1>
    <div class="container w-50 mt-5 bg-secondary p-5">
        <div>
            <h6 class="mb-5">Ho sfruttato la validazione di 'input number' per informare l'utente dov'è l'errore. Ma se volesse forzare altri caratteri il button non reindirizza da nessuna parte</h6>
            <form action="">
                <div class="d-flex justify-content-between mb-5">
                    <label for="psw">Lunghezza della tua password:</label>
                    <input type="number" min="1" max="20" name="psw" id="psw" value="<?= $password ?? 1 ?>">
                </div>
                <div class="d-flex flex-column align-items-end">
                    <div>
                        <label for="lower">Lowercase</label>
                        <input type="checkbox" id="lower" name="lower">
                    </div>
                    <div>
                        <label for="upper">Uppercase</label>
                        <input type="checkbox" id="upper" name="upper">
                    </div>
                    <div>
                        <label for="symbols">Symbols</label>
                        <input type="checkbox" id="symbols" name="symbols">
                    </div>
                    <div>
                        <label for="number">Numbercase</label>
                        <input type="checkbox" id="number" name="number">
                    </div>
                </div>
                <button class="btn btn-success">Invia Form</button>

            </form>
        </div>

    </div>
</body>

</html>