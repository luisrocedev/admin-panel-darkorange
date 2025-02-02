<?php
session_start();

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
 * - tabla: nombre de la tabla de la base de datos.
 * - id: identificador del registro a eliminar.
 * - seccion: sección actual para redirigir después de la operación.
 */
if (!isset($_GET['tabla'], $_GET['id'], $_GET['seccion'])) {
    die("Error: Parámetros incompletos.");
}

$tabla = $_GET['tabla'];       // Nombre de la tabla
$id = $_GET['id'];             // ID del registro
$seccion = $_GET['seccion'];   // Sección para redirigir

// Preparar la consulta SQL para eliminar el registro
$peticion = $conexion->prepare("DELETE FROM $tabla WHERE id = ?");

if (!$peticion) {
    die("Error en la preparación de la consulta: " . $conexion->error); // Error en la preparación
}

// Vincular el parámetro (ID del registro)
$peticion->bind_param("i", $id); // "i" indica que el parámetro es un entero

// Ejecutar la consulta
if ($peticion->execute()) {
    $message = "Registro eliminado con éxito."; // Mensaje de éxito
} else {
    $message = "Error al eliminar el registro: " . $peticion->error; // Mensaje de error
}

// Cerrar la consulta preparada
$peticion->close();

// Redirigir a la sección correspondiente con el mensaje
header("Location: ../../admin/$seccion/index.php?message=" . urlencode($message));
exit();
