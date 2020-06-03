<!DOCTYPE html>
<html>
<body>

<?php

$num = $_GET['Campo1'];

if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
    echo "Es un numero primo";
} else {
    // comprobamos si es par
    if ($num % 2 != 0) {
        // comprobamos solo por los impares
        for ($i = 3; $i <= sqrt($num); $i += 2) {
            if ($num % $i == 0) {
                echo "No es un numero primo";
            }
        }
        echo "Es un numero primo";
    }
}
echo "No es un numero primo";
}

?>




</body>
</html>
