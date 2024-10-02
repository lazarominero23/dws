<?php
    $paises = [
        "Peru" => ["Moneda" => "Soles", "Habitantes" => 7293493],
        "España" => ["Moneda" => "Pesetas", "Habitantes" => 12894753],
        "Portugal" => ["Moneda" => "Euros", "Habitantes" => 4273123],
        "Argentina" => ["Moneda" => "Pesos argentinos", "Habitantes" => 21898741],
    ];

    foreach($paises as $pais => $info){
        echo "País: " . $pais . ", Moneda: " . $info["Moneda"] . ", Habitantes: " . $info["Habitantes"] . "." . "<br>";
    }
?>