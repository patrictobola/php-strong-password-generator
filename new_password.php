<?php
include __DIR__ . '/includes/scripts/random_psw_generator.php';
session_start();
$chars = $_SESSION['chars'];
$doubles = $_SESSION['doubles'];
?>


<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/includes/layouts/head.php' ?>

<body>
    <h1 class="text-center">Password Created</h1>
    <div class="container w-50 mt-5 bg-secondary p-5">
        <h3>La tua password è:</h3>
        <div class="bg-success p-3 mb-5">
            <?php
            // Se dal form arriva un 'no' dal ratio input facciamo partire una funzione, altrimenti l'altra
            if ($doubles === 'no') echo random_psw($_SESSION['length'], $chars);
            else echo random_psw_with_doubles($_SESSION['length'], $chars);

            ?>
        </div>
        <a href="index.php" class="btn btn-success">Genera un'altra password</a>
    </div>
</body>

</html>