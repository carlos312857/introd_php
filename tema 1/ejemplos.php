<?php
 // Esto es un comentario de una linea 
 # Esto tambien es un comentario

  /*
    Este es un bloque 
    de multiples lineas 
 */
?>


<?php
    $nombre = "Juan";
    $edad = 20;

    echo $nombre; // Imprime: Juan
?>

<?php
    define("PI", 3.1416);
    const SALUDO = "Hola";
    echo PI; // Imprime: 3.1416
?>

<?php
    $frutas = ["Manzana", "Bnano", "Uva"];

    echo $frutas[0]; // Imprime: Manzana
    echo $frutas[2]; // Imprime: Uva
?>

<?php
    $persona = ["nombre" => "Ana", "edad" => 25, "ciudad" => "Bogota"
];

echo $persona["nombre"]; // Imprime: Ana
?>

<?php
$a = 12;
$b = 4;

echo "Suma: " . ($a + $b) . "\n";
echo "Resta: " . ($a - $b) . "\n";
echo "Multiplicación: " . ($a * $b) . "\n";
echo "División: " . ($a / $b) . "\n";
?>

<?php
$x = 20;

$x += 10;
echo "Después de sumar 10: $x\n";

$x -= 5;
echo "Después de restar 5: $x\n";

$x *= 2;
echo "Después de multiplicar por 2: $x\n";
?>


<?php
$a = 8;
$b = 10;

if ($a == $b) {
    echo "Son iguales\n";
} else {
    echo "Son diferentes\n";
}

if ($a > $b) {
    echo "a es mayor\n";
} else {
    echo "b es mayor\n";
}
?>

<?php
$cond1 = true;
$cond2 = false;

if ($cond1 && $cond2) {
    echo "Ambas son verdaderas\n";
} else {
    echo "No ambas son verdaderas\n";
}

if ($cond1 || $cond2) {
    echo "Al menos una es verdadera\n";
} else {
    echo "Ninguna es verdadera\n";
}
?>

<?php
$x = 5;

echo "Valor inicial: $x\n";

$x++;
echo "Después de x++: $x\n";

++$x;
echo "Después de ++x: $x\n";
?>

<?php
$y = 10;

echo "Valor inicial: $y\n";

$y--;
echo "Después de y--: $y\n";

--$y;
echo "Después de --y: $y\n";
?>

