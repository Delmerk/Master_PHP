<?php

if(isset($_POST)){
	
	require_once 'includes/conexion.php';
	
	$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
	$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
	$categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
	$direction_web = isset($_POST['direction_web']) ? mysqli_real_escape_string($db, $_POST['direction_web']) : false;
	$usuario = $_SESSION['usuario']['id'];
	$estadoPublication = isset($_POST['active']) ? 1 : 0;

	
	// Validación
	$errores = array();
	
	if(empty($titulo)){
		$errores['titulo'] = 'El titulo no es válido';
	}
	
	if(empty($descripcion)){
		$errores['descripcion'] = 'La descripción no es válida';
	}
	
	if(empty($categoria) && !is_numeric($categoria)){
		$errores['categoria'] = 'La categoría no es válida';
	}

	if(empty($direction_web)){
		$errores['direction_web'] = 'La DIRECTION WEB no es válida';
	}
	
	
	if(count($errores) == 0){
		if(isset($_GET['editar'])){
			$entrada_id = $_GET['editar'];
			$usuario_id = $_SESSION['usuario']['id'];
			
			$sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion', direction_web='$direction_web', categoria_id=$categoria, activa=$estadoPublication  ".
					" WHERE id = $entrada_id AND usuario_id = $usuario_id";

		}else{
			$sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$direction_web', '$titulo', '$descripcion',  CURDATE(), $estadoPublication);";
		}
		$guardar = mysqli_query($db, $sql);

		header("Location: index.php");
	}else{

		$_SESSION["errores_entrada"] = $errores;
		
		if(isset($_GET['editar'])){
			header("Location: editar-entrada.php?id=".$_GET['editar']);
		}else{
			header("Location: crear-entradas.php");
		}
	}
	
}

