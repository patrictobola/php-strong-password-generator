<?php
// Porto il psw generator 
include __DIR__ . '/includes/scripts/random_psw_generator.php';




session_start();
if (isset($_GET['psw'])) {
    $_SESSION['psw'] = $_GET['psw'];
    $password = intval($_GET['psw']);
}

// Se la psw è stata settata, redirect alla pagina con la psw 
if (isset($password) && $password != '' && $password > 0 && $password) header('Location: ./new_password.php')

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
                <button class="btn btn-success">Invia Form</button>

            </form>
        </div>

    </div>
</body>

</html>