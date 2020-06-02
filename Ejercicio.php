<!DOCTYPE html>
<html>
<body>

<?php

$CampoTexto = $_POST['Campo1'];
echo $CampoTexto;



?>


<form action="Ejercicio.php" method="post">
 <input type="number" id="campo1" name="campo1" placeholders="Inserta un dato"/>
 <input type="submit" value="Enviar"/>
</form>


 
</body>
</html>
