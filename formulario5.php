<html>

<head>
    <title>Ejercicio de formulario 5</title>
</head>

<body>
    <form action="/primer_proyecto/formulario5.php" method="get">
        <label for="nombres1">Nombre 1:</label>
        <input type="text" name="nombres[]" value=""><br>
    
        <label for="nombres2">Nombre 2:</label>
        <input type="text" name="nombres[]" value=""><br>

        <label for="nombres3">Nombre 3:</label>
        <input type="text" name="nombres[]" value=""><br>
    
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php
    if (isset($_GET['nombres'])){
        $nombres = $_GET['nombres'];
    }

    echo "Los nombres son: " . implode(", ", $nombres);
?>