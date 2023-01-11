<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Strong Password Generator</title>

</head>
<body>

    <h1>
        Strong Password Generator
    </h1>

    <h2>
        Genera una password sicura
    </h2>

    <form>
        <label for="lengthPassword">Lunghezza password: </label>

        <input type="text" name="lengthPassword">

        <input type="submit" value="Invia">

        <br>

    <?php

        $lengthPassword = $_GET['lengthPassword'] ?? 0;

        function generatePassword($lengthPassword) {
            $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?$%^&*()_-+=[]{}:,;@|<>./";

            $lengthCharacters = strlen($characters);

            $password = "";

            for ($i = 0; $i < $lengthPassword; $i++) {
                $password .= $characters[rand(0, $lengthCharacters - 1)];
            }

            return $password;
        }

        echo generatePassword($lengthPassword);
    ?>

</body>
</html>