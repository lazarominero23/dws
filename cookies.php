<?php
if(!isset($_COOKIE["visitas"])){
    // El usuario se ha metido por primera vez a la página.
    setcookie("visitas", "1", time()+3600*24);
    echo "Página visitada por primera vez";
} else {
    if(isset($_GET["reset"])){
        if($_GET["reset"] == true){
            setcookie("visitas", "", time()-1);
            echo "Página reseteada.";
        }
    } else {
        // El usuario se ha metido varias veces a la página.
        $visitas = (int)$_COOKIE["visitas"];
        $visitas++;
        setcookie("visitas", $visitas, time()+3600*24);
        echo "Página visitada ".$visitas." veces.";
    } 
}

?>

<html>
<head>

</head>
<body>
    <a href="?reset=true"><br>Resetear contador de visitas</a>
</body>
</html>