<html>

<head>
    <title>Ejercicio de formulario 4</title>
</head>

<body>
    <form action="" method="get">
        <label for="operador1">Operador 1:</label>
        <input type="text" name="operador1" value=""><br>
    
        <label for="operador2">Operador 2:</label>
        <input type="text" name="operador2" value=""><br>

        <label for="operacion">Operación:</label>
        <select name="operacion">
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="x">Multiplicación</option>
            <option value="/">División</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php
    if (isset($_GET['operador1']) && isset($_GET['operador2']) && isset($_GET['operacion'])){
        $operador1 = $_GET['operador1'];
        $operador2 = $_GET['operador2'];
        $operacion = $_GET['operacion'];

        switch($operacion){
            case '+':
                $result = $operador1 + $operador2;
                break;
            case '-':
                $result = $operador1 - $operador2;
                break;
            case 'x':
                $result = $operador1 * $operador2;
                break;
            case '/':
                if($operador2 != 0){
                    $result = $operador1 / $operador2;  
                } else {
                    echo "Error: No se puede dividir entre cero.";
                }
                break;
        }
        echo "El resultado es: " . $result;
    }
?>