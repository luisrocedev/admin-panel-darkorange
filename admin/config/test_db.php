<?php
$servername = "localhost";
$username = "taronjaboxvalencia";
$password = "taronjaboxvalencia";
$database = "taronjaboxvalencia";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("❌ Error en la conexión a MySQL: " . $conn->connect_error);
}

// PRUEBA: Mostrar si la conexión está definida
echo "✅ Conexión establecida en `db_connect.php`. <br>";
