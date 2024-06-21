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
    <h1>Sesiones - Sessions:</h1>
    <div>
        Almacenar y persistir datos del usuario mientras que navega en un sitio web hasta que cierra sesión o cierra el navegador.

        Es el periodo de tiempo durante el cual el usuario ve un número de página determinado de su dominio de la web donde te vida sin necesidad de identificarse cada vez que recargarla la página.
        Decir que la sesión se mantiene hay una información unos datos del usuario que están persistiendo durante la navegación en la aplicación web.


        PHP trabaja con una combinación de métodos que son capaces de ocultar variables y cookies por ejemplo en un carrito de la compra.
        Necesitamos que la sesión dure hasta que finalice el carrito mientras que navegamos por las páginas del sitio de acuerdo es decir cuando acabamos de terminar de hacer la compra con el carrito.

        La sesión se borra ese tipo de sesión se borra pero mientras que navegamos por la web la sesión persiste.

        Las sessiones deben detectar que durante el transcurso de la navegación por varias páginas web dentro del sitio web la sesión permanece invariable es decir ahí sigue persistiendo hasta que el usuario cierre sesión o cierre el navegador es decir cuando el usuario cierra el navegador la sesión se borra y después debe almacenar información que formará parte de la sesión de una sesión en concreto.
    </div>
    <?php
    // Iniciar la sesión
    session_start();
    
    echo "<br/>";
    // Variable de sesión
    $_SESSION['variable_persistente'] = "Im a active session";
    echo $_SESSION['variable_persistente'];
    ?>
</body>

</html>