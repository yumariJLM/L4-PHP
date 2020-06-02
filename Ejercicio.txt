<!DOCTYPE html>
<html>
<body>

<?php
$num = $_POST['numero'];
echo $num;



?>
<form action="Ejercicio" method="post">
 <input type="number" id="numero" name="numero" placeholders="Inserta un numero"/>
 <input type="submit" value="Enviar"/>
</form>

 
</body>
</html>
