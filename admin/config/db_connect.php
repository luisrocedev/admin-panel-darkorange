<?php
$servername = "82.165.43.137";  // Servidor de la base de datos (ajusta si usas otro)
$username = "taronjaboxvalencia";         // Usuario de MySQL
$password = "taronjaboxvalencia";             // Contraseña de MySQL (déjala vacía si no tiene)
$database = "taronjaboxvalencia"; // Nombre de la BD (verifica que sea correcto)

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("❌ Error en la conexión a MySQL: " . $conexion->connect_error);
}
