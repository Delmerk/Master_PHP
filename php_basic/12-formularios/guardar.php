<?php
$error = "faltan_datos";

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['edad']) && !empty($_POST['pass'])) {
    $error = "ok";

    $nombre = trim($_POST['name']);
    $email = trim($_POST['email']);
    $edad = intval($_POST['edad']);
    $pass = $_POST['pass'];


    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $error = "nombre";
    }

    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "email";
    }

    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT) || $edad < 14) {
        $error = "edad";
    }

    if (empty($pass) || strlen($pass) < 8) {
        $error = "password";
    }

    // var_dump($_POST);
    // var_dump($edad);
    // var_dump($error);
    // die();
} else {
    $error = "faltan_datos";
}

if ($error != "ok") {
    header("Location:index.php?error=$error");
} 
if ($error == "ok") {
    header("Location:index.php?error=$error");
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones y cookies</title>
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
    <?php if ($error == 'ok') : ?>
        <h2>Datos validados correctamente</h2>
        <p><?= $nombre ?></p>
        <p><?= $email ?></p>
        <p><?= $edad ?> </p>
        <p><?= $pass ?> </p>
    <?php endif ?>
</body>

</html>