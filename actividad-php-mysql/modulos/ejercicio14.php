<?php
$claves_usuarios = array(
    "usuario1" => "clave123",
    "usuario2" => "abc456",
    "Fabri" => "pass789",
    "usuario3" => "contraseña321",
    "usuario4" => "secreto987"
);

// Acceder a una componente específica del vector asociativo
echo "<p>La clave del usuario 'Fabri' es: " . $claves_usuarios["Fabri"] . "</p>";

// Mostrar todas las claves de acceso con sus respectivos usuarios
echo "<h3>Lista completa de usuarios y sus claves:</h3>";
echo "<ul>";
foreach ($claves_usuarios as $usuario => $clave) {
    echo "<li>Usuario: $usuario, Clave: $clave</li>";
}
echo "</ul>";
?>