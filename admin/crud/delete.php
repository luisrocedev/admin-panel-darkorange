<?php

session_start();

/**
 * Eliminar un registro de la base de datos de forma segura.
 * 
 * Este script verifica si el usuario está autenticado y luego procede a eliminar 
 * un registro específico de una tabla en la base de datos utilizando una consulta preparada.
 * 
 * Proceso:
 * 1. Se inicia la sesión y se verifica la autenticación del usuario.
 * 2. Se incluye la conexión a la base de datos.
 * 3. Se validan los parámetros `tabla`, `id` y `seccion`.
 * 4. Se prepara y ejecuta una consulta SQL segura para eliminar el registro.
 * 5. Se redirige a la sección correspondiente con un mensaje de éxito o error.
 */

// Verificar si el usuario está autenticado
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

// Preparar la consulta SQL para eliminar el registro de manera segura
$peticion = $conexion->prepare("DELETE FROM $tabla WHERE id = ?");

if (!$peticion) {
    die("Error en la preparación de la consulta: " . $conexion->error);  // Error en la preparación
}

// Vincular el parámetro (ID del registro)
$peticion->bind_param("i", $id);  // "i" indica que el parámetro es un entero

// Ejecutar la consulta
if ($peticion->execute()) {
    $message = "Registro eliminado con éxito.";  // Mensaje de éxito
} else {
    $message = "Error al eliminar el registro: " . $peticion->error;  // Mensaje de error
}

// Cerrar la consulta preparada
$peticion->close();

// Redirigir a la sección correspondiente con el mensaje
header("Location: ../../admin/$seccion/index.php?message=" . urlencode($message));
exit();
