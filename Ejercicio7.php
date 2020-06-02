<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>
<?php
header ("Content-type: text/html;charset=\"utf-8\"");

$num= 22;

if ($num % 2 != 0) {
        
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) {
            return False;

            echo "<br>El número ".$num." NO es primo";
        }
    }
    return True;
    echo "<br>El número ".$num." es primo";
}
}
return False;

 

?>

</body>
</html>