<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 6</h1>
<?php


header ("Content-type: text/html;charset=\"utf-8\"");

echo "<h1>".$_GET['clase']."</h1>";
echo "<h2>".$_GET['periodo']."</h2>";

echo "<h1>".$_GET['nombre']."</h1>";
echo "<h2>".$_GET['apellido']."</h2>";


if (is_numeric($_GET['edad']) && $_GET['edad'] >=1)
{
    echo "<h3>Bienvenido". $_GET['nombre']. " ".$_GET['apellido']."</h3>";
}
else
{
    echo "<h3>no es una edad valida</h3>";
}
?>




</body>
</html>