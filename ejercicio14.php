<?php
function esPalindromo($cadena){
    $cadena = srttolower(str_replace(' ', '', $cadena));
    return $cadena === strrev($cadena);
}

$cadena = 'Ojo rojo';
    if(esPalindromo($cadena)){
        echo "$cadena es un palíndromo.";
    } else {
        echo "$cadena no es un palíndromo.";
    }
?>