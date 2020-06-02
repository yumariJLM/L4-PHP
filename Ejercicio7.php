<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>
<?php


header ("Content-type: text/html;charset=\"utf-8\"");


 
$num= 14;
function primo($num)
{
    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
        return True;
    } else {
        
        if ($num % 2 != 0) {
        
            for ($i = 3; $i <= sqrt($num); $i += 2) {
                if ($num % $i == 0) {
                    return False;
                    echo "<br>El número ".$num." NO es primo";
                }
            }
            return True;echo
             "<br>El número ".$num." es primo";
        }
    }
    return False;
}
?>

</body>
</html>