<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 4</h1>
<?php


header ("Content-type: text/html;charset=\"utf-8\"");
$usuario = "yumari26";

if ($usuario == "yumari2" || $usuario == "yumari6")
{
    echo "<h1>Usuario es valido</h1>";

}
else
{
    echo "<h1>Lo siento $usuario, no tiene acceso a las opciones</h1>";
}


$edad= 22;
if ($edad >=18)
{
    echo "<h1>Tiene la edad requerida</h1>";
}
else
{
    echo "<h1>Lo siento debe tener al menos 18 años</h1>";
}

?>
</body>
</html>
