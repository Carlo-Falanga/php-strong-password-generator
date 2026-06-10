<?php

include_once("./functions.php")

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