<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="session.php">Iniciar Session</a>
	<a href="contenido.php">Contenido Protegido</a>
	<h2>Bienvenido: <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'] : 'Invitado' ?></h2>
	
</body>
</html>