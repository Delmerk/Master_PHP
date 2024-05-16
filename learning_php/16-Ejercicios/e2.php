<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <style>
        * {
            color: #fff;
            background-color: black;
            margin: 1rem;
        }

        hr {
            border-color: white;
        }
    </style>
</head>

<body>
    <h1>Ejercicio 2:</h1>
    <div>
        <ol>
            <li>1. Una función</li>
            <li>2. Debe validar un email con filter_var</li>
            <li>3. Recoger una variable por get y validarla</li>
            <li>4. Mostrar resultado</li>
        </ol>
    </div>

    <?php
    function validarEmail($email)
    {
        $status = "No válido";
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status = "Válido";
        }
        return $status;
    }

    if (isset($_GET['email'])) {
        echo validarEmail($_GET['email']);
    }else {
        echo "Pasa por GET un email.";
    }
    ?>
</body>

</html>