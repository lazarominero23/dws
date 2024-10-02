<?php
    $equipo = ["Juan", "Isra", "Javier", "Pau", "Marc"];

    foreach($equipo as $jugador){
        echo $jugador."<br>";
    }

    foreach($equipo as $numero => $jugador){
        echo $numero . " " . $jugador . "<br>";
    }
?>