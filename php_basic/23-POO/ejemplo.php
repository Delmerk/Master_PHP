<!DOCTYPE html>
<html>

<head>
    <title>Clases</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/docIdst/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <docIdv class="container">
        <?php require_once("clases.php");
        echo "<hr>";
        echo "<p>Contenido desde ejemplo.php</p>";
        $luz = new Persona("Luz Piedad", "Lastname", "Apellido", 65421778);
        // $luz->setNombre("L P");
        // $luz->setApellidos("Apellido Lastname");
        // $luz->setDocId("08868143X"); 
        ?>
        <h1> Datos de <?= $luz->getNombre() . " " . $luz->getApellidos(); ?> </h1>
        <h2> DNI <?= $luz->getDocId() ?> </h2>
    </docIdv>
</body>

</html>