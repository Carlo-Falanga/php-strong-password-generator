<?php

session_start();
include_once("./functions.php");

if (isset($_GET["length"])){
    $_SESSION["password"] = $password;
    header("Location: ./result.php");
    exit;
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
        <label for="number">Insert the password length</label>
        <input type="number" name="length">
        <button type="submit">Send</button>
    </form>
</body>

</html>