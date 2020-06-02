<!DOCTYPE html>
<html>
<body>

<?php

$num = $_GET['Campo1'];
$i=2;
$primo= true;
while ($primo && $i<$num){
    $primo= ($num %$i)!=0;
    $i++;
}
if ($primo){
   echo "el numero $num es primo"; 
}else{
    echo "el numero $num no es primo";  
}

?>

 <form action="Ejercicio.php" method="get">
 <input type="number" id="campo1" name="campo1" placeholders="Inserta un numero"/>
 <input type="submit" value="Enviar"/>
</form>


</body>
</html>
