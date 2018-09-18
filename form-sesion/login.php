<?php 
include_once '../another_practice/conexion.php';

//capturar datos por post
$usuario_login = $_POST['nombre_usuario'];
$pass_login = $_POST['contrasena'];

echo "<pre>";
var_dump($usuario_login );
var_dump($pass_login);
echo "</pre>";

//verificar si usuario existe
$sql = 'SELECT * FROM  usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

echo "<pre>";
var_dump($resultado);
echo "</pre>";

if (!$resultado) {
	//matar la operacion
	echo "no existe usuario";
	die();
}
	echo "usuario verificado correctamente!";

if ((password_verify($pass_login, $resultado['contrasena'])) {
	//contraseñas iguales
	$_SESSION['admin'] = $usuario_login;
	header('Location: restringido.php');
}else{
	echo "No son iguales las contraseñas";
	die();
}

 ?>