<?php
$numero = 169;
$divisores = [];

for($i = 1; $i <= $numero; $i++) {
    if($numero % $i == 0) {
        $divisores[] = $i;
    }
}

if(count($divisores) == 2){
    echo "$numero es primo.";
} else {
    echo "Divisores de $numero: ";
    foreach($divisores as $divisor) {
        echo $divisor . " ";
    }
}
?>