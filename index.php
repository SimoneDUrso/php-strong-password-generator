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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
                <p>ciao</p>
            </div>
        </div>
    </div>
</body>

</html>