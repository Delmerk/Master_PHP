<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
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
    <h1>Formularios:</h1>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];

        if ($error == 'faltan_datos') {
            echo "<small style='color: red'>Introduce tus datos  correctamente, en cada campo respectivamente.</small>";
        }
    }
    ?>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'ok') {
            echo "<small style='color: green'>Datos enviados correctamente.</small>";
        }
    }
    ?>
    <form action="guardar.php" method="POST" enctype="multipart/form-data">

        <label for="name">Nombre</label>
        <input type="text" autofocus name="name" required placeholder="Your name">
        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'nombre') {
                echo "<small style='color: red'>El nombre no puede contener números y carácteres especiales distintos al espacio.</small>";
            }
        } ?>
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" required>
        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'email') {
                echo "<small style='color: red'>Introduce el e-mail correctamente.</small>";
            }
        } ?>
        
        <br>

        <label for="edad">Edad</label>
        <input type="number" name="edad" minlength="14" required placeholder="Mayor de 14años" pattern="[0-9]+">
        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'edad') {
                echo "<small style='color: red'>Debes ser mayor de 14años.</small>";
            }
        } ?>
        <br>

        <label for="pass">Password</label>
        <input type="password" name="pass" minlength="8" required pattern="[a-zA-Z *_-/.0-9]+">
        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'pass') {
                echo "<small style='color: red'>La contraseña es requerida.</small>";
            }
        } ?>
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>