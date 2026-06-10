<?php

function generatePassword($length)
{
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}

$password = "";

if (isset($_GET["length"])) {
    $password = generatePassword($_GET["length"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Password Generator</title>
</head>

<body>
    <form method="GET">
        <input type="number" name="length">
        <button type="submit">Invia</button>
    </form>

    <p><?php echo $password ?></p>
</body>

</html>