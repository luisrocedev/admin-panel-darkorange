<?php

/**
 * Configuración de la conexión a la base de datos.
 * 
 * Este script establece la conexión con la base de datos MySQL para el proyecto.
 * 
 * Proceso:
 * 1. Define los parámetros de conexión (servidor, usuario, contraseña, base de datos).
 * 2. Crea una conexión con la base de datos utilizando `mysqli`.
 * 3. Verifica si la conexión fue exitosa o muestra un mensaje de error.
 */

$servername = "localhost";             // Servidor de la base de datos (ajustar si es necesario)
$username = "taronjaboxvalencia";      // Usuario de MySQL
$password = "taronjaboxvalencia";      // Contraseña de MySQL
$database = "taronjaboxvalencia";      // Nombre de la base de datos (verificar que sea correcto)

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("❌ Error en la conexión a MySQL: " . $conexion->connect_error);
}
