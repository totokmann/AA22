<?php
$num = rand(1, 100);

// Mostrar el número generado
echo "El número generado es: " . $num, "<br>"; // Salto de línea HTML

// Comparar el número
if ($num < 50) {
    echo "El número es menor a 50";
} elseif ($num == 50) {
    echo "El número es igual a 50";
} else {
    echo "El número es mayor a 50";
}
?>