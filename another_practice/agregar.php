<?php 

include_once 'conexion.php';
//AGREGAR
	if ($_POST) {
		$color = $_POST['color'];
		$descripcion = $_POST['descripcion'];

		$sql_agregar = 'INSERT INTO colores (color,descripcion) VALUES (?,?)';
		$sentencia_agregar = $pdo->prepare($sql_agregar);
		$sentencia_agregar->execute(array($color,$descripcion));

		//cerramos la conexion de base de datos y sentencia
		$pdo = null;
		$sentencia_agregar = null;

		header('location:index3.php');

	}

	

 ?>