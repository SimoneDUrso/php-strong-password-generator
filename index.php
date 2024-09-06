<?php
session_start(); // Avvia la sessione
include './functions.php';

if (isset($_GET['length'])) {
    $length = intval($_GET['length']);

    // Verifica se la lunghezza è valida
    if ($length >= 4 && $length <= 10) {
        $generatedPassword = generatePassword($length);

        // Salva la password nella sessione
        $_SESSION['generatedPassword'] = $generatedPassword;

        // Redirect alla pagina dedicata
        header("Location: show_password.php");
        exit(); // Termina l'esecuzione del codice
    } else {
        // Messaggio di errore per lunghezza non valida
        $_SESSION['error'] = "La lunghezza deve essere tra 4 e 10 caratteri.";
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Strong Password Generator</title>
</head>

<body class="bg-body">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Strong Password Generator</h1>
            <h2 class="text-center">Genera una password sicura</h2>
            <div class="col-6">
                <form action="./index.php" method="GET">
                    <label for="length">Lunghezza password:</label>
                    <input class="form-control w-50" type="number" name="length" id="length" min="4" max="10">
                    <br>
                    <button type="submit" class="btn btn-md btn-primary">Genera</button>
                </form>
            </div>
            <div class="col-6">
                <?php
                // Mostra eventuali messaggi di errore dalla sessione
                if (isset($_SESSION['error'])) {
                    echo "<div class='alert alert-danger'>{$_SESSION['error']}</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>