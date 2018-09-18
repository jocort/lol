<?php 

#costante nota: son globales
define('PI', 3.14);
echo 'constante: ' . PI;
echo "<br><br>";

#variable integer
$numero = 3;
echo "variable integer: $numero<br>";
var_dump($numero);
echo "<br><br>";


#variable string
$texto = 'textos';
echo "variable string: $texto<br>";
var_dump($texto);
echo "<br><br>";


#variable bolean
$verdadero = true;
echo "variable bolean: $verdadero<br>";
var_dump($verdadero);
echo "<br><br>";


#variable arreglo
$colores = array('rojo','amarillo','azul');
echo "variable arreglo: $colores[1]<br>";
var_dump($colores);
echo "<br><br>";


#variable de arreglo con propiedades
$verduras = array('verdura1' =>'lechuga' , 'verdura2'=> 'tomate');
echo "variable arreglo con propiedades: $verduras[verdura2]<br>";
var_dump($verduras);
echo "<br><br>";


#variable de objetos
$frutas = (object)['fruta1' => 'piña' , 'fruta2' => 'fresa'];
echo "variable arreglo con propiedades: $frutas->fruta1<br>";
var_dump($frutas);

$a = 3;

$b = '2';

$resul = $a + $b;

echo 'resultado: ' . $resul;

 ?>
