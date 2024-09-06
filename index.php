<?php
function generatePassword($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-={}[]|:;<>,.?';
    $password = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
}

// Controllo se esiste il parametro "length"
if (isset($_GET['length'])) {

    // Qui converto il parametro in un numero intero
    $length = intval($_GET['length']);

    // Se la password è compresa tra 4 e 30 generami la password
    if ($length >= 4 && $length <= 30) {
        $generatedPassword = generatePassword($length);
    }
}
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

<body>
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
                    // Se generatedPassword esiste e le condizioni sono state rispettate restituiscimi la password a schermo
                    if (isset($generatedPassword)) {
                        echo "<p class='alert alert-info'>Password Generata: $generatedPassword</p>";
                    }

                    // Altrimenti restituiscimi questo messaggio di avviso
                    else {
                        echo "<div>La lunghezza deve essere tra 4 e 30 caratteri.</div>";
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>