<?php

/**
 * Configuración de la conexión a la base de datos.
 * 
 * Este script establece una conexión con la base de datos MySQL y verifica si la conexión es exitosa.
 * 
 * Proceso:
 * 1. Define los parámetros de conexión (servidor, usuario, contraseña, base de datos).
 * 2. Crea una conexión con la base de datos utilizando `mysqli`.
 * 3. Verifica si la conexión fue exitosa o muestra un mensaje de error.
 * 4. (Prueba) Muestra un mensaje de confirmación si la conexión es correcta.
 */

$servername = "localhost";             // Servidor de la base de datos
$username = "taronjaboxvalencia";      // Usuario de MySQL
$password = "taronjaboxvalencia";      // Contraseña de MySQL
$database = "taronjaboxvalencia";      // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("❌ Error en la conexión a MySQL: " . $conn->connect_error);
}

// PRUEBA: Mostrar si la conexión está definida
echo "✅ Conexión establecida en `db_connect.php`. <br>";
