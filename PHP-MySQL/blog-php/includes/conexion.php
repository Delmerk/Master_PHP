<?php
// Conexión
$servidor = 'localhost';
$usuario = 'admin';
$password = 'wpassword';
$basededatos = 'blog';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}