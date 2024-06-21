<?php
    $resultado = false;
if (isset($_POST['num1']) && isset($_POST['num2'])) {

    if (isset($_POST['sumar'])) {
        $resultado = "El resultado de sumar " . $_POST['num1'] . " + " . $_POST['num2'] . " es: " . ($_POST['num1'] + $_POST['num2']);
    }

    if (isset($_POST['restar'])) {
        $resultado = "El resultado de restar " . $_POST['num1'] . " - " . $_POST['num2'] . " es: " . ($_POST['num1'] - $_POST['num2']);
    }

    if (isset($_POST['multiplicar'])) {
        $resultado = "El resultado de multiplicar " . $_POST['num1'] . " * " . $_POST['num2'] . " es: " . ($_POST['num1'] * $_POST['num2']);
    }

    if (isset($_POST['dividir'])) {
        $resultado = "El resultado de dividir " . $_POST['num1'] . " / " . $_POST['num2'] . " es: " . ($_POST['num1'] / $_POST['num2']);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        * {
            color: #fff;
            background-color: black;
            margin: 1rem;
        }

        body {
            justify-content: center;
            align-items: center;
            margin: 0 40%;
        }

        hr {
            border-color: white;
        }

        form {
            justify-content: center;
            align-items: center;
            margin: auto;
        }
    </style>
</head>

<body>
    <form action="e3.php" method="POST">
        <label for="num1">#1</label>
        <input type="number" name="num1" required>
        <label for="num2">#2</label>
        <input type="number" name="num2" required>
        <br>
        <input type="submit" value="+" name="sumar">
        <input type="submit" value="-" name="restar">
        <input type="submit" value="*" name="multiplicar">
        <input type="submit" value="/" name="dividir">
    </form>

    <?php
    if ($resultado != false) {
        echo "<p>$resultado</p>";
    }
    ?>
</body>

</html>