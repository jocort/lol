<?php 
include_once '../another_practice/conexion.php';
//echo password_hash("joseort", PASSWORD_DEFAULT)."\n";

//capturar datos por post
$nuevo_user = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

//verificar si usuario existe
$sql = 'SELECT * FROM  usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($nuevo_user));
$resultado = $sentencia->fetch();

var_dump($resultado);

//si existe usuario matamos la operacion
if ($resultado) {
	echo "<br> Usuario Existente";
	die();
}


//contraseña hash
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

echo "<pre>";
var_dump($nuevo_user);
var_dump($contrasena);
var_dump($contrasena2);
echo "</pre>";


if (password_verify($contrasena2, $contrasena)) {
    echo '¡La contraseña es válida! <br>';


    $sql_agregarr = 'INSERT INTO usuarios (nombre,contrasena) VALUES (?,?)';
		$sentencia_agregarr = $pdo->prepare($sql_agregarr);

		if ($sentencia_agregarr->execute(array($nuevo_user,$contrasena)) ) {
			echo "Agregado <br>";
		}else {
			echo "Error <br>";
		}

		//cerramos la conexion de base de datos y sentencia
		$pdo = null;
		$sentencia_agregarr = null;

		//header('location:index3.php');

} else {
    echo 'La contraseña no es válida.';
}

 ?>