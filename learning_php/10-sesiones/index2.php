<!DOCTYPE html>
<html>
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

<body>
    <h3><a href="./index.php">Pagína Principal</a></h3>
    <?php
    echo "<hr>";
    echo "<h1>Sessions Sesiónes</h1>";
    echo "Una session es el periodo de tiempo durante el cual el usuario ve un número determinado de paginas de su dominio o web, sin necesitar de identificarse cada vez que se recarga la pagina, hay unos datos de usuario que persisten durante la navegación del sitio web.";
    echo "<br/>";
    echo "Las sessiones deben detectar que durante el transcurso de la navegación por varias páginas web dentro del sitio web la sesión permanece invariable es decir ahí sigue persistiendo hasta que el usuario cierre sesión o cierre el navegador es decir cuando el usuario cierra el navegador la sesión se borra y después debe almacenar información que formará parte de la sesión de una sesión en concreto.<br/>  PHP trabajo con una combinación de métodos que son capaces de ocultar variables y cookies.";
    echo "<br/>";
    echo "Una sesión almacena y persiste datos del usuario mientras que navegue por un sitio web hasta que la sesión se cierre o se cierre el navegador";

    // INICIAR LA SESIÓN
    session_start();
    echo "<br/>";
    // Variable de sesión
    $_SESSION['variable_persistente'] = "Im a active session";
    echo $_SESSION['variable_persistente'];
    ?>
</body>

</html>