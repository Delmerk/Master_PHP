<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Blog</title>
</head>

<body>
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">Blog</a>
        </div>

        <!-- Menu -->
        <nav id="menu">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Categoria 1</a></li>
                <li><a href="">Sobre Mí</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div id="contenedor">
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Inicia sesión</h3>
                <form action="login.php">
                    <label for="email">Emial</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="login" class="bloque">
                <h3>Registraté</h3>
                <form action="register.php">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">

                    <label for="email">Emial</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <label for="cpassword">Confirmar Contraseña</label>
                    <input type="password" name="cpassword">

                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </aside>

        <div id="princial">
            <h1>últimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Descripción de la entrada</p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Descripción de la entrada</p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>Descripción de la entrada</p>
            </article>
        </div>
    </div>

    <footer id="pie">
<p>Desarrollado por Delmerk Escobar &copy; 2024</p>
    </footer>
</body>

</html>