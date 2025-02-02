<?php

/**
 * Carga la lógica necesaria para una sección específica.
 * Incluye la verificación de sesión, conexión a la base de datos y obtención de registros.
 */
function cargarLogica($tabla, $seccion)
{
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../../login.php");
        exit();
    }

    include __DIR__ . "/../config/db_connect.php";

    $message = "";
    if (isset($_GET['message'])) {
        $message = htmlspecialchars($_GET['message']);
    }

    $peticion = $conexion->query("SELECT * FROM $tabla");
    $registros = [];

    if ($peticion) {
        while ($fila = $peticion->fetch_assoc()) {
            $registros[] = $fila;
        }
    } else {
        die("Error al obtener los registros: " . $conexion->error);
    }

    return [
        'conexion' => $conexion,
        'tabla' => $tabla,
        'seccion' => $seccion,
        'message' => $message,
        'registros' => $registros
    ];
}
