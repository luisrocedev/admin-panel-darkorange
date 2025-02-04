<?php

/**
 * Crear un nuevo registro en la base de datos de forma dinámica.
 * 
 * Este script permite generar un formulario dinámico basado en la estructura de una tabla
 * y guardar un nuevo registro en la base de datos.
 * 
 * Proceso:
 * 1. Se inicia la sesión y se incluye el header del administrador.
 * 2. Se verifica si el usuario está autenticado.
 * 3. Se incluyen la conexión a la base de datos y las funciones auxiliares.
 * 4. Se validan los parámetros `tabla` y `seccion`.
 * 5. Se obtiene la estructura de la tabla desde la base de datos.
 * 6. Se procesa el formulario y se inserta el nuevo registro en la base de datos.
 * 7. Se redirige a la página de gestión con un mensaje de éxito o error.
 */

session_start();
include "../../admin/includes/header.php";

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../login.php");  // Redirigir al login si no está autenticado
    exit();
}

// Incluir la conexión a la base de datos y funciones necesarias
include "../config/db_connect.php";
include "../util/funciones.php";

// Verificar si se han proporcionado los parámetros necesarios
if (!isset($_GET['tabla']) || !isset($_GET['seccion'])) {
    die("Error: Parámetros incompletos.");
}

$tabla = $_GET['tabla'];
$seccion = $_GET['seccion'];

// Obtener la estructura de la tabla desde la base de datos
$estructura = obtenerEstructuraTabla($conexion, $tabla);

// Procesar el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $campos = [];
    $valores = [];

    foreach ($estructura as $columna) {
        $nombre = $columna['Field'];

        // Omitir campos autoincrementales y timestamps automáticos
        if ($columna['Extra'] === 'auto_increment' || ($columna['Type'] === 'timestamp' && $columna['Default'] === 'CURRENT_TIMESTAMP')) {
            continue;
        }

        // Procesar y escapar los valores del formulario
        if (isset($_POST[$nombre])) {
            $valor = $conexion->real_escape_string($_POST[$nombre]);
            $campos[] = $nombre;
            $valores[] = "'$valor'";
        }
    }

    // Construcción de la consulta SQL
    $camposStr = implode(", ", $campos);
    $valoresStr = implode(", ", $valores);
    $peticion = "INSERT INTO $tabla ($camposStr) VALUES ($valoresStr)";

    // Ejecutar la consulta e informar el resultado
    if ($conexion->query($peticion)) {
        $message = "Registro creado con éxito.";
    } else {
        $message = "Error al crear el registro: " . $conexion->error;
    }

    // Redirigir a la gestión de la sección con el mensaje
    header("Location: ../../admin/$seccion/index.php?message=" . urlencode($message));
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Registro</title>
    <link rel="stylesheet" href="../../admin/css/global.css"> <!-- Estilos globales -->
    <link rel="stylesheet" href="../../admin/css/crud.css"> <!-- Estilos del CRUD -->
</head>

<body class="crud-page">
    <div class="crud-container">
        <h2>Crear Nuevo Registro</h2>

        <form class="crud-form" action="create.php?tabla=<?= htmlspecialchars($tabla) ?>&seccion=<?= htmlspecialchars($seccion) ?>" method="post">
            <div class="crud-fields">
                <?= generarFormulario($estructura) ?> <!-- Generar los campos dinámicamente -->
            </div>
            <button type="submit" class="btn-primary">Crear</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
    </footer>
</body>

</html>