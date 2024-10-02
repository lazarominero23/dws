<html>

<head>
    <title>Ejercicio de formulario 3</title>
</head>

<body>
    <form action="" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value=""><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php
    if (isset($_GET['nombre']) && strlen($nombre) >= 3){
        $nombre = $_GET['nombre'];
        echo "Hola " . $nombre . ".";
    } else {
        echo "Inserta un nombre válido (3 caracteres mínimo).";
    }
?>