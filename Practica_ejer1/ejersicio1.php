<?php
$duracion = 5; // minutos

if ($duracion <= 3) {
    $costo = 300;
} else {
    $minutosExtra = $duracion - 3;
    $costo = 300 + ($minutosExtra * 50);
}

echo "Duración: $duracion minutos<br>";
echo "Costo a pagar: $$costo";
?>