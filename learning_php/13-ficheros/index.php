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
    <?php
    /*
    // r = lectura, x = ejecución, w = escritura a+ = permite leer y escribir
    $file = fopen("text.txt", "a+"); //Abrir archivo

    // Leer contenido, el while es para que lea todas las lineas no solo la primera.
    while (!feof($file)) {
        $contenido = fgets($file);
        echo $contenido  . "<br/>";
    }

    // Escribir un archivo
    fwrite($file, "Soy un texto insertado desde php");

    fclose($file); //Cerrar archivo
    */

    // Copiar file
    // copy('text.txt', 'text_copy.txt') or die("Error al copiar el archivo");

    // Renombrar file
    // rename("text_copy.txt", "text_rename.txt")

    // Eliminar file
    // unlink("text_rename.txt") or die("Error al borrar file");

    if (file_exists("text.txt")) {
        echo "El archivo existe";
    } else {
        echo "El archivo no existe";
    }

    ?>
</body>

</html>