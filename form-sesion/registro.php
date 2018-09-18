<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Registro de Usuario</h3>
	<form action="agg-usuario.php" method="POST">
		<input type="text" name="nombre_usuario" placeholder="ingresa usuario">
		<input type="text" name="contrasena" placeholder="ingresa contrasena">
		<input type="text" name="contrasena2" placeholder="ingresa contrasena de new">
		<button type="submit">Guardar</button>
	</form>
	<h3>Login</h3>
	<form action="login.php" method="POST">
		<input type="text" name="nombre_usuario" placeholder="ingresa usuario">
		<input type="text" name="contrasena" placeholder="ingresa contrasena">
		<button type="submit">Guardar</button>
	</form>


</body>
</html>