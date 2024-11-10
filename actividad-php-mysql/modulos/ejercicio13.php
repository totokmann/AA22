<?php
$archivo = "pedidos_pizza.txt";

// Verificamos si el archivo existe
if (file_exists($archivo)) {
    // Leemos el contenido del archivo
    $contenido = file_get_contents($archivo);

    // Mostramos el contenido del archivo en el navegador
    if ($contenido) {
        echo nl2br(htmlspecialchars($contenido)); // nl2br convierte saltos de línea en <br> para HTML
    } else {
        echo "El archivo está vacío.";
    }
} else {
    echo "El archivo no existe.";
}
?>