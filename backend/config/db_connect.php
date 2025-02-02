<?php

/**
 * Configuración y conexión a la base de datos MySQL.
 */

// Parámetros de conexión
$servername = "localhost";  // Servidor de la base de datos
$username = "taronjaboxvalencia";  // Usuario de la base de datos
$password = "taronjaboxvalencia";  // Contraseña de la base de datos
$dbname = "taronjaboxvalencia";  // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);  // Detener si hay error
}
