<html>

<head>
    <title>Ejercicio de formulario 2</title>
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
    if (empty($_GET['nombre'])){
        echo "Inserta un nombre.";
    } else {
        $nombre = $_GET['nombre'];
        echo "Hola " . $nombre . ".";
    }
?>