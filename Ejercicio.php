<!DOCTYPE html>
<html>
<body>

<?php

$num = $_GET['Campo1'];  

if ($num == 2 || $num == 3 || $num == 5 || $num == 7 ) 
{
  echo $num."  : es un numero primo";
  
} elseif ($num % 2 != 0 && $num % 3 !=0 && $num % 5 !=0 && $num % 7 !=0)
{
  echo $num."  : es un numero primo";
  
} else {


  echo $num."  : no es un numero primo";
}
?>




</body>
</html>
