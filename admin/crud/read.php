<?php

session_start();
include "../../admin/includes/header.php";

/**
 * Listar registros de una tabla en la base de datos.
 * 
 * Este script permite listar todos los registros de una tabla específica,
 * proporcionando opciones para editar o eliminar cada registro.
 * 
 * Proceso:
 * 1. Se inicia la sesión y se verifica la autenticación del usuario.
 * 2. Se incluye la conexión a la base de datos.
 * 3. Se validan los parámetros `tabla` y `seccion`.
 * 4. Se obtiene la lista de registros de la tabla desde la base de datos.
 * 5. Se genera una tabla con los registros, incluyendo enlaces para editar y eliminar.
 */

/**
 * Verificar si el usuario está autenticado.
 * Si no lo está, redirigir al login.
 */
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../login.php");  // Redirigir al login si no está autenticado
    exit();
}

// Incluir la conexión a la base de datos
include "../config/db_connect.php";

/**
 * Verificar si se han proporcionado los parámetros necesarios:
 * - tabla: nombre de la tabla.
 * - seccion: sección actual.
 */
if (!isset($_GET['tabla'], $_GET['seccion'])) {
    die("Error: Parámetros incompletos.");
}

$tabla = $_GET['tabla'];       // Nombre de la tabla
$seccion = $_GET['seccion'];   // Sección para redirigir

// Obtener todos los registros de la tabla
$peticion = $conexion->query("SELECT * FROM $tabla");  // Ejecutar la consulta
$registros = $peticion->fetchAll(PDO::FETCH_ASSOC);    // Obtener los registros como array asociativo

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Registros</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Estilos generales -->
</head>

<body>
    <main>
        <h2>Listar Registros</h2>

        <!-- Enlace para crear un nuevo registro -->
        <a href="create.php?tabla=<?= htmlspecialchars($tabla) ?>&seccion=<?= htmlspecialchars($seccion) ?>">Crear Nuevo Registro</a>
        <br><br>

        <!-- Tabla que lista los registros -->
        <table>
            <thead>
                <tr>
                    <?php foreach ($registros[0] as $columna => $valor) : ?>
                        <th><?= ucfirst($columna) ?></th> <!-- Encabezados de las columnas -->
                    <?php endforeach; ?>
                    <th>Acciones</th> <!-- Columna de acciones -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro) : ?>
                    <tr>
                        <?php foreach ($registro as $valor) : ?>
                            <td><?= htmlspecialchars($valor) ?></td> <!-- Mostrar los valores de las columnas -->
                        <?php endforeach; ?>
                        <td>
                            <!-- Enlace para editar -->
                            <a href="update.php?tabla=<?= htmlspecialchars($tabla) ?>&id=<?= $registro['id'] ?>&seccion=<?= htmlspecialchars($seccion) ?>">Editar</a>
                            <!-- Enlace para eliminar -->
                            <a href="delete.php?tabla=<?= htmlspecialchars($tabla) ?>&id=<?= $registro['id'] ?>&seccion=<?= htmlspecialchars($seccion) ?>" onclick="return confirm('¿Estás seguro de eliminar este registro?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
    </footer>
</body>

</html>