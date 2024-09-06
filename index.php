<?php
include './functions.php';
?>

<!DOCTYPE html>
<html lang="en">

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
                <p>
                    <?php
                    // Se generatedPassword esiste e le condizioni sono state rispettate, mostra la password
                    if (isset($generatedPassword)) {
                        echo "<p class='alert alert-info'>Password Generata: $generatedPassword</p>";
                    }
                    // Se è stata richiesta una password ma la lunghezza non è valida, mostra l'errore
                    else if (isset($_GET['length']) && ($_GET['length'] < 4 || $_GET['length'] > 10)) {
                        echo "<div class='alert alert-danger'>La lunghezza deve essere tra 4 e 10 caratteri.</div>";
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>