<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Recorger los valores del formulario de actulizacion
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, trim($_POST['nombre'])) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, trim($_POST['apellidos'])) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
	$passwordAntigua = isset($_POST['old_password']) ? mysqli_real_escape_string($db, $_POST['old_password']) : false;
	$nuevaPassword = isset($_POST['new_password']) ? mysqli_real_escape_string($db, $_POST['new_password']) : false;

	// Array de errores
	$errores = array();
	
	// Validar los datos antes de guardarlos en la base de datos
	// Validar campo nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";
	}
	
	// Validar apellidos
	if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
		$apellidos_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son válido";
	}
	
	// Validar el email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}

	// Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
	$login = mysqli_query($db, $sql);

	$usuario = mysqli_fetch_assoc($login);

	// var_dump($usuario);
	// var_dump($_SESSION['usuario']['nombre']);
	// die();
	
	// Comprobar la contraseña
	$verify = password_verify($passwordAntigua, $usuario['password']);

	// Validar la contraseña Antigua
	if($verify){
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['old_password'] = "Su contraseña antigua no coincide";
	}

	// Validar la contraseña
	if(!empty($nuevaPassword)){
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['new_password'] = "La contraseña está vacía";
	}
	
	
	$guardar_usuario = false;
	
	if(count($errores) == 0 && $verify){
		$usuario = $_SESSION['usuario'];
		$guardar_usuario = true;

		// Cifrar la contraseña, cost es el # de veces que cifra la pass
		$password_segura = password_hash($nuevaPassword, PASSWORD_BCRYPT, ['cost'=>4]);
		
		// COMPROBAR SI EL EMAIL YA EXISTE
		$sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
		$isset_email = mysqli_query($db, $sql);
		$isset_user = mysqli_fetch_assoc($isset_email);
		
		if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
			// ACTULIZAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
			
			$sql = "UPDATE usuarios SET ".
				   "nombre = '$nombre', ".
				   "apellidos = '$apellidos', ".
				   "email = '$email', ".
				   "password = '$password_segura' ".
				   "WHERE id = ".$usuario['id'];
			$guardar = mysqli_query($db, $sql);


			if($guardar){
				$_SESSION['usuario']['nombre'] = $nombre;
				$_SESSION['usuario']['apellidos'] = $apellidos;
				$_SESSION['usuario']['email'] = $email;
				$_SESSION['usuario']['password'] = $password_segura;

				$_SESSION['completado'] = "Tus datos se han actualizado con éxito";
			}else{
				$_SESSION['errores']['general'] = "Fallo al guardar el actulizar tus datos!!";
			}
		}else{
			$_SESSION['errores']['general'] = "El usuario ya existe!!";
		}
		
	}else{
		$_SESSION['errores'] = $errores;
	}
}

header('Location: mis-datos.php');
