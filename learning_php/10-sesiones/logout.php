<?php

session_start();
// El contenido de la var $_SESSION se muestra en otras paginas o archivos
echo $_SESSION['variable_persistente'];

session_destroy();
