<?php

session_start();
include_once("./functions.php");

if (isset($_GET["length"]) && $password !== "") {
    $_SESSION["password"] = $password;
    header("Location: ./result.php");
    exit;
}

$invalidParams = isset($_GET["length"]) && $password === "";

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
            <h2 class="text-white fw-bold h3">Genera una password sicura</h2>
        </header>

        <?php if ($invalidParams) : ?>
            <div class="alert alert-info">Nessun parametro valido inserito</div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body p-4">
                <form method="GET" class="row g-3">

                    <label for="length" class="col-sm-6 col-form-label">Lunghezza password:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="length" name="length">
                    </div>

                    <label class="col-sm-6 col-form-label">Consenti ripetizioni di uno o più caratteri:</label>
                    <div class="col-sm-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeatYes" value="yes" checked>
                            <label class="form-check-label" for="repeatYes">Sì</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeat" id="repeatNo" value="no">
                            <label class="form-check-label" for="repeatNo">No</label>
                        </div>
                    </div>

                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="letters" id="letters" value="1">
                            <label class="form-check-label" for="letters">Lettere</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="numbers" id="numbers" value="1">
                            <label class="form-check-label" for="numbers">Numeri</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="symbols" id="symbols" value="1">
                            <label class="form-check-label" for="symbols">Simboli</label>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary px-4">Invia</button>
                        <button type="reset" class="btn btn-secondary px-4">Annulla</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

</body>

</html>
