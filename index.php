<?php

function generatePassword($length){
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";
    $password = "";

    for ($i = 0; $i < $length; $i++){
        $password .= $characters[rand(0, strlen($characters) -1)];
    }

    return $password;
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
    
</body>
</html>