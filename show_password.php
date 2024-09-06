<?php
session_start(); // Avvia la sessione

// Verifica se la password è stata salvata nella sessione
if (isset($_SESSION['generatedPassword'])) {
    $generatedPassword = $_SESSION['generatedPassword'];
} else {
    // Se non c'è una password nella sessione, redireziona alla pagina principale
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Generata</title>
</head>

<body class="bg-body">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Password Generata</h1>
            <div class="col-12 text-center">
                <!-- Mostra la password generata -->
                <p class='alert alert-info'>La tua password generata è: <strong><?php echo $generatedPassword; ?></strong></p>
                <a href="index.php" class="btn btn-md btn-primary">Genera una nuova password</a>
            </div>
        </div>
    </div>
</body>

</html>