<?php 

$link= 'mysql:host=localhost;dbname=testcolores';
$usuario = 'root';
$pass = '1234';

try {

	$pdo = new PDO($link,$usuario,$pass);
	
	//echo 'Conectado a la base de datos <br>';

	//foreach($pdo->query('SELECT * FROM `colores`') as $fila) {
	//	print_r($fila);
	//}

} catch (PDOException $e) {
	print "!Error!: " . $e->getMessage() . "<br>";
	die();
	
}

//llamando a la tabla colores por un array
//leer
$sql_read = 'SELECT * FROM colores';

	$gsent = $pdo->prepare($sql_read);
	$gsent->execute();

	$resultado = $gsent->fetchAll();

	//var_dump($resultado)




	if ($_GET) {
		$id = $_GET['id'];
		$sql_unico = 'SELECT * FROM colores WHERE id=?';

		$gsent_unico = $pdo->prepare($sql_unico);
		$gsent_unico->execute(array($id));

		$resultado_unico = $gsent_unico->fetch();

		//var_dump($resultado_unico);
	}
 





 ?>
