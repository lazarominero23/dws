<?php
    $equipo = [];
    $equipo["Alero"] = "Juan";
    $equipo["Base"] = "Isra";
    $equipo["Pivot"] = "Javier";
    $equipo["Escolta"] = "Pau";
    $equipo["Alapivot"] = "Marc";

    foreach($equipo as $jugador){
        echo $jugador."<br>";
    }

    foreach($equipo as $numero => $jugador){
        echo $numero . " " . $jugador . "<br>";
    }
?>