<?php

$numero1 = 0;
$numero2 = 1;

echo $numero1 . " " . $numero2 . " ";
for($i = 2; $i <= 10; $i++) {
    $numero3 = $numero1 + $numero2;
    echo $numero3 . " ";
    $numero1 = $numero2;
    $numero2 = $numero3;
}
?>