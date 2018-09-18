<?php 

include_once 'conexion.php';

$sql_eliminar = 'DELETE FROM colores WHERE id=?';
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($id));

//cerramos la conexion de base de datos y sentencia
$pdo = null;
$sentencia_eliminar = null;

header('location:index3.php');


 ?>