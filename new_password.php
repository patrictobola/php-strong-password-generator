<?php
include __DIR__ . '/includes/scripts/random_psw_generator.php';
session_start()
?>


<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/includes/layouts/head.php' ?>

<body>
    <h1 class="text-center">Password Created</h1>
    <div class="container w-50 mt-5 bg-secondary p-5">
        <h3>La tua password è:</h3>
        <div class="bg-success p-3 mb-5">
            <?= random_psw($_SESSION['psw']) ?>
        </div>
        <a href="index.php" class="btn btn-success">Genera un'altra password</a>
    </div>
</body>

</html>