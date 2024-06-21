<!-- Crear un array con el contenido de una tabla. -->
<?php
/* 
Games   Comida      Music
WoW     Espagueti   Nanpa Basicó
Albion  Ensalada    Canserbero
        Frutas
Cada fila debe ir en un fichero separado includes.
*/
$tabla = array(
    "GAMES" => array("WoW", "Albion"),
    "COMIDA" => array("Espagueti", "Ensalada", "Frutas"),
    "MUSIC" => array("Nanpa Básico", "Canserbero")
);
$categorias = array_keys($tabla);
?>
<table border="1">
    <tr>
        <?php foreach ($categorias as $categoria) : ?>
            <th><?=$categoria?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <td><?=$tabla['GAMES'][0]?></td>
        <td><?=$tabla['COMIDA'][0]?></td>
        <td><?=$tabla['MUSIC'][0]?></td>
    </tr>
    <tr>
        <td><?=$tabla['GAMES'][1]?></td>
        <td><?=$tabla['COMIDA'][1]?></td>
        <td><?=$tabla['MUSIC'][1]?></td>
    </tr>
    <tr>
        <td><?=$tabla['GAMES'][2]?></td>
        <td><?=$tabla['COMIDA'][2]?></td>
        <td><?=$tabla['MUSIC'][2]?></td>
    </tr>
</table>