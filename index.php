<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Strong Password Generator</title>

    <?php

        session_start();

        require_once __DIR__ . '/partials/helper.php';

        $lengthPassword = $_GET['lengthPassword'] ?? 0;
        $filterNumbers = $_GET['numbers'] ?? false;
        $filterUppercaseLetters = $_GET['uppercaseLetters'] ?? false;
        $filterLowercaseLetters = $_GET['lowercaseLetters'] ?? false;
        $filterSymbols = $_GET['symbols'] ?? false;

        if ($lengthPassword && ($filterNumbers || $filterUppercaseLetters || $filterLowercaseLetters || $filterSymbols)) {

            $passw = $_SESSION['password'];
            
            $_SESSION['password'] = generatePassword($lengthPassword, $filterNumbers, $filterUppercaseLetters, $filterLowercaseLetters, $filterSymbols);

            header('Location: password.php');
        }
    ?>

</head>
<body>

    <div class="container text-left w-50 bg-primary my-5 rounded p-3">
        <h1 class="text-center">
            Strong Password Generator
        </h1>

        <h2 class="text-center">
            Genera una password sicura
        </h2>

        <?php

            if ($lengthPassword && (!$filterNumbers && !$filterUppercaseLetters && !$filterLowercaseLetters && !$filterSymbols)) {
                echo "<h4 class='text-center text-danger'>Scegli almeno una delle opzioni</h4>";
            }
            if ($lengthPassword === "") {
                echo "<h4 class='text-center text-danger'>Inserisci lunghezza password</h4>";
            }

        ?>

        <form class="bg-white text-secondary rounded p-2">
            <div class="w-50 mx-auto">
                <div class="text-center">
                    <label for="lengthPassword" class="col-form-label pe-2">Lunghezza password: </label>

                    <input type="text" name="lengthPassword">
                </div>

                <input type="checkbox" name="numbers">

                <label for="numbers">Numeri </label>

                <br>

                <input type="checkbox" name="uppercaseLetters">

                <label for="uppercaseLetters">Maiuscole </label>

                <br>

                <input type="checkbox" name="lowercaseLetters">

                <label for="lowercaseLetters">Minuscole </label>

                <br>

                <input type="checkbox" name="symbols">

                <label for="symbols">Simboli </label>

                <br>

                <input type="submit" value="Invia" class="btn btn-danger mt-2">
            </div>
        </form>    
            
    </div>

</body>
</html>