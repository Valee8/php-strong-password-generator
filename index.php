<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Strong Password Generator</title>

    <?php
        require_once __DIR__ . '/partials/helper.php';
    ?>

</head>
<body>

    <div class="container text-center">
        <h1>
            Strong Password Generator
        </h1>

        <h2>
            Genera una password sicura
        </h2>

        <form>
            <label for="lengthPassword" class="col-form-label">Lunghezza password: </label>

            <input type="text" name="lengthPassword">

            <input type="submit" value="Invia" class="btn btn-primary">

        </form>    

        <br>

        <?php

            echo generatePassword($lengthPassword);
        ?>
    </div>

</body>
</html>