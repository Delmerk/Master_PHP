<?php
if (isset($_COOKIE['mi_cookie'])) {
    echo "<h3>" . $_COOKIE['mi_cookie'] . "</h3>";
} else {
    echo "No hay cookie";
}

echo "<br/>";

if (isset($_COOKIE['unyear'])) {
    echo "<h3>" . $_COOKIE['unyear'] . "</h3>";
} else {
    echo "No hay cookie";
}
echo "<br/>";
?>
<a href="borrar_cookies.php">Borrar cookies</a>
