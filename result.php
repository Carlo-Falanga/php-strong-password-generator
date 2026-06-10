<?php

session_start();

$password = $_SESSION["password"];

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-dark py-5">

    <div class="container">

        <header class="text-center mb-4">
            <h1 class="text-secondary fw-bold">Strong Password Generator</h1>
            <h2 class="text-white fw-bold h3">La tua password sicura</h2>
        </header>

        <div class="card">
            <div class="card-body p-4 text-center">
                <p class="mb-3">La password generata è:</p>
                <p class="fs-4 fw-bold mb-4"><?php echo $password ?></p>
                <a href="./index.php" class="btn btn-primary px-4">Genera un'altra password</a>
            </div>
        </div>

    </div>

</body>

</html>
