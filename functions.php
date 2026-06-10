<?php

function generatePassword($length, $characters)
{

    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}

$password = "";

if (isset($_GET["length"])) {

    $characters = "";

    if (isset($_GET["letters"])) {
        $characters .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }
    if (isset($_GET["numbers"])) {
        $characters .= "0123456789";
    }
    if (isset($_GET["symbols"])) {
        $characters .= "!@#$%&*";
    }

    if ($characters !== "") {
        $password = generatePassword($_GET["length"], $characters);
    }
}
