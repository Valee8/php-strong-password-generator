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

        $passw = $_SESSION['password'];
    
    ?>

</head>
<body>

    <div class="container text-center">
        <h1>
            <?php

                echo "La tua password: " . $passw;

            ?>
        </h1>
    </div>

</body>
</html>