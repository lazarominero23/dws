<?php
include 'matematicas.php';

$a = 1;
$b = -3;
$c = 2;

$soluciones = resolverEcuacion2Grado($a, $b, $c);
    if($soluciones == FALSE){
        echo "No hay soluciones reales.\n";
    } else {
        echo "Las soluciones son:\n";
        foreach($soluciones as $solucion){
            echo $solucion . "\n" ;
        }
    }
?>