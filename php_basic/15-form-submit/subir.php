<?php

$file = $_FILES['file'];
$nombre_file = $file['name'];
$type_file = $file['type'];

if ($type_file == "image/jpg" || $type_file == "image/jpeg" || $type_file == "image/png" || $type_file == "image/gif") {

    // Crear dir, si no existe
    if (!is_dir('images')) {
        mkdir('images', 0777);
    }

    move_uploaded_file($file['tmp_name'], 'images/' . $nombre_file);

    header("Refresh: 2; URL=index.php");
    echo "<h3>Imagen subida correctamente</h3>";
} else {
    header("Refresh: 2; URL=index.php");
    echo "Sube una imagen con un formato correcto, por favor.";
}
