<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 3</h1>
<?php


$miarreglo = array (10,20,30,40,50);

echo "<p>Contenido del elemento 2 del arreglo: $miarreglo [2]</p>";

echo "<p>Despliega el contenido del arreglo: </p>";
print_r ($miarreglo);


echo "<p>El tamaño del arreglo es:" .sizeof($miarreglo)."</p>";

$miFechaArr ["dia"]= "Lunes";
$miFechaArr ["mes"]= "Mayo";
$miFechaArr ["año"]= "2020";

echo "<br><br>";

var_dump ($miFechaArr);
unset ($miFechaArr["año"]);
echo "<br><br>";
print_r ($miFechaArr);
$miarregloReves = array_reverse($miarreglo);

echo "<br><br>";
print_r($miarregloReves);

?>
</body>
</html>
