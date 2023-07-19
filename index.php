<?php

$psw_length = $_GET['psw'] ?? NULL;

include __DIR__ . '/includes/scripts/random_psw_generator.php'
?>





<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<?php require __DIR__ . '/includes/layouts/head.php'; ?>

<body>
    <h1 class="text-center">Password Generator</h1>
    <div class="container w-50 mt-5 bg-secondary p-5">
        <div class="bg-success p-3 mb-5">
            <?php if (isset($psw_length)) echo random_psw($psw_length) ?>
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