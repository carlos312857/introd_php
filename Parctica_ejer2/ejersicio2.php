<?php
$numeros = [];

// Llenar el array
for ($i = 1; $i <= 100; $i++) {
    $numeros[] = $i;
}

// Mostrar los números
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . " ";
}
?>