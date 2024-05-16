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
            echo "<small style='color: red'>Introduce todos los datos correctamente.</small>";
        }
    }
    ?>
    <form action="guardar.php" method="POST" enctype="multipart/form-data">

        <label for="name">Nombre</label>
        <input type="text" autofocus name="name" minlength="3" pattern="[a-zA-Z ]+" placeholder="Your name" required>
        <?php
        if ($error == 'nombre') {
            echo "<small style='color: red'>El nombre no puede contener números y carácteres especiales distintos al espacio.</small>";
        }
        ?>

        <label for="email">Email</label>
        <input type="email" name="email" required>
        <?php
        if ($error == 'email') {
            echo "<small style='color: red'>Introduce el e-mail correctamente.</small>";
        }
        ?>

        <label for="edad">Edad</label>
        <input type="number" name="edad" minlength="14" placeholder="Mayor de 14años" required pattern="[0-9]+">
        <?php
        if ($error == 'edad') {
            echo "<small style='color: red'>Debes ser mayor de 14años</small>";
        }
        ?>

        <label for="pass">Password</label>
        <input type="password" name="pass" minlength="3" required>
        <?php
        if ($error == 'password') {
            echo "<small style='color: red'>La contraseña es requerida.</small>";
        }
        ?>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>