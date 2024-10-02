<?php
const numero = 8;

echo "<h2>Tabla de multiplicar del " . numero . "</h2>";
echo "<table border = '1'>";
echo "<tr><th>8 x :</th><th>Resultado</th></tr>";

for($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>" . $i * numero . "</td>";
    echo "</tr>";
}

echo "</table>";
?>