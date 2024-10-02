<?php
function resolverEcuacion2Grado($a, $b, $c){
    if($a == 0){
        return FALSE;
    }

    $discriminante = $b * $b - 4 * $a * $c;

    if($discriminante < 0){
        return FALSE;
    } elseif($discriminante == 0){
        $solucion = -$b / (2 * $a);
        return array($solucion);
    } else {
        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
        return array($solucion1, $solucion2);
    }
}
?>