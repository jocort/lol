<?php 

$login; // no iniciado 'null - false'
$login = 'ususario'; // iniciado 'true'

var_dump(isset($login));

if (isset($login)) {
	echo '<br> esta iniciado';
} else {
	echo '<br> no esta iniciado';
}

 ?>