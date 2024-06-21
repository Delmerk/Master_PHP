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
    <h1>Ejercicio 1:</h1>
    <div>Crear una sesión que aumente su valor en 1 o disminuya en 1 en función si el parámetro GET counter está a 1 o a 0</div>

    <?php
    session_start();

    if (!isset($_SESSION['numero'])) {
        $_SESSION['numero'] = 0;
    }

    if (isset($_GET['counter']) && $_GET['counter'] == 1) {
        $_SESSION['numero']++;
    }

    if (isset($_GET['counter']) && $_GET['counter'] == 0) {
        $_SESSION['numero']--;
    }
    ?>
    <h2>El valor de la sesión número es: <?=$_SESSION['numero'] ?></h2>
    <a href="e1.php?counter=1">Aumentar</a><br/>
    <a href="e1.php?counter=0">Disminuir</a>
</body>

</html>