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
    <h1>Formulario de imagenes:</h1>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'faltan_datos') {
            echo "<small style='color: red'>Introduce todos los datos correctamente.</small>";
        }
    }
    ?>
    <form action="subir.php" method="POST" enctype="multipart/form-data">

        <label for="file">Fichero:</label>
        <input type="file" autofocus name="file" required>
        <?php

        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'file') {
                echo "<small style='color: red'>Error con el archivo.</small>";
            }
        }
        ?>

        <input type="submit" value="Enviar">
    </form>

    <?php
    $gestor = opendir('./images');

    if ($gestor) :
        while (($image = readdir($gestor)) !== false) :
            if ($image != '.' && $image != '..') :
                echo "<img src='images/$image' alt='$image' width='200px' /><br />";

            endif;
        endwhile;
    endif;
    ?>

</body>

</html>