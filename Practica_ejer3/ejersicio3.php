<?php
$dias = [
    "lunes" => "Lunes",
    "martes" => "Martes",
    "miercoles" => "Miércoles",
    "jueves" => "Jueves",
    "viernes" => "Viernes",
    "sabado" => "Sábado",
    "domingo" => "Domingo"
];

$valores = array_values($dias);

for ($i = 0; $i < count($valores); $i++) {
    echo substr($valores[$i], 0, 2) . "<br>";
}
?>