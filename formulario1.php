<html>

<head>
    <title>Ejercicio de formulario 1</title>
</head>

<body>
    <form action="" method="get">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value=""><br>
    
        <label for="autor">Autor:</label>
        <input type="text" name="autor" value=""><br>

        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" value=""><br>

        <label for="paginas">Páginas:</label>
        <input type="text" name="paginas" value=""><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php
    echo "Detalles del libro<br>";

    if (isset($_GET['titulo'])){
        $titulo = $_GET['titulo'];
        echo "Título: " . $titulo . "<br>";
    }

    if (isset($_GET['autor'])){
        $autor = $_GET['autor'];
        echo "Autor: " . $autor . "<br>";
    }

    if (isset($_GET['editorial'])){
        $editorial = $_GET['editorial'];
        echo "Editorial: " . $editorial . "<br>";
    }

    if (isset($_GET['paginas'])){
        $paginas = $_GET['paginas'];
        echo "Páginas: " . $paginas . "<br>";
    }
?>