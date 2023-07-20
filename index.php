<?php
session_start();
// Porto il psw generator 
include __DIR__ . '/includes/scripts/random_psw_generator.php';


// Preset di caratteri che si aggiungeranno in base alle richieste dell'utente 
include __DIR__ . '/includes/utils/chars_preset.php';



// Creiamo un array in base alle scelte fatte dall'utente
if (isset($_GET['lower'])) $chars .= $lowercase;
if (isset($_GET['upper'])) $chars .= $uppercase;
if (isset($_GET['number'])) $chars .= $numbers;
if (isset($_GET['symbols'])) $chars .= $special;

// Baso tutta la validazione dall'input dei numeri
if (isset($_GET['length'])) {
    $_SESSION['length'] = $_GET['length'];
    $_SESSION['chars'] = $chars;
    $_SESSION['doubles'] = $_GET['doubles'];
    $password = intval($_GET['length']);
}
// Se la psw è stata settata, redirect alla pagina con la psw 
if (isset($password) && $password != '' && $password > 0 && $password && $chars != '') header('Location: ./new_password.php');
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
                    <label for="length">Lunghezza della tua password:</label>
                    <input type="number" min="1" max="20" name="length" id="length" value="<?= $password ?? 1 ?>">
                </div>
                <div class="d-flex flex-column align-items-end mb-5">
                    <div>
                        <label for="doubles">Inserire doppioni nella password</label>
                        <input type="radio" name="doubles" id="doubles" value="yes">
                    </div>
                    <div>
                        <label for="no_doubles">Non inserire doppioni nella password</label>
                        <input type="radio" name="doubles" id="no_doubles" value="no" checked>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-end">
                    <div>
                        <label for="lower">Lowercase</label>
                        <input type="checkbox" id="lower" name="lower" checked>
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
                        <label for="number">Numbers</label>
                        <input type="checkbox" id="number" name="number">
                    </div>
                </div>
                <button class="btn btn-success">Invia Form</button>

            </form>
        </div>

    </div>
</body>

</html>