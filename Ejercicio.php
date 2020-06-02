<!DOCTYPE html>
<html>
<body>

<?php

$CampoTexto = $_GET['Campo1'];
echo $CampoTexto;

if ($CampoTexto % 2 != 0) {
    echo "Es impar!";
  } else {
    echo "Es par";
  }


?>


<form action="Ejercicio.php" method="get">
 <input type="number" id="campo1" name="campo1" placeholders="Inserta un numero"/>
 <input type="submit" value="Enviar"/>
</form>


 
</body>
</html>
