<?php
// Porto il psw generator 
include __DIR__ . '/includes/scripts/random_psw_generator.php';

// Porto i dati da un'altra parte 
session_start();
if (isset($_GET['psw'])) $_SESSION['psw'] = $_GET['psw'];

// Se la psw è stata settata, redirect alla pagina con la psw 
if (isset($_GET['psw']) && $_GET['psw'] != '' && $_GET['psw'] > 0) header('Location: ./new_password.php')

?>





<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<?php require __DIR__ . '/includes/layouts/head.php'; ?>

<body>
    <h1 class="text-center">Password Generator</h1>
    <div class="container w-50 mt-5 bg-secondary p-5">
        <div>
            <form action="">
                <div class="d-flex justify-content-between mb-5">
                    <label for="psw">Lunghezza della tua password:</label>
                    <input type="number" min="1" max="20" name="psw" id="psw" value="<?= $_GET['psw'] ?? 1 ?>">
                </div>
                <button class="btn btn-success">Invia Form</button>

            </form>
        </div>

    </div>
</body>

</html>