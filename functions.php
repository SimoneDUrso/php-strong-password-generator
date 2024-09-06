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
