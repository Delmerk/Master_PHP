<?php
if (isset($_COOKIE['mi_cookie'])) {
    setcookie('mi_cookie', "", time() - (60 * 60 * 24 * 365));
    unset($_COOKIE['mi_cookie']);
}

header('Location:ver_cookies.php');