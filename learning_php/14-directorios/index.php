<?php
if (!is_dir('carpeta')) {
    // Crear carpeta
    mkdir("carpeta", 0777) or die("No se pudo crear la carpeta");
} else {
    echo "Ya existe la carpeta";
}

// Borrar carpeta
// rmdir('carpeta');

// Recorrer contenido del dir
if ($gestor = opendir('./carpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        echo $archivo;
    }
}
