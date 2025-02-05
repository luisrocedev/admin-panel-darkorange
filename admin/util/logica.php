<?php

/**
 * Carga la lógica necesaria para una sección específica.
 * 
 * Esta función verifica la sesión del usuario, establece la conexión con la base de datos 
 * y obtiene los registros de la tabla correspondiente.
 */

function cargarLogica($tabla, $seccion)
{
    session_start();  // Iniciar la sesión

    // Verificar si el usuario está autenticado
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../../login.php");  // Redirigir al login si no hay sesión activa
        exit();
    }

    include __DIR__ . "/../config/db_connect.php";  // Incluir la conexión a la base de datos

    $message = "";  // Inicializar el mensaje de notificación
    if (isset($_GET['message'])) {
        $message = htmlspecialchars($_GET['message']);  // Sanitizar el mensaje si existe
    }

    $peticion = $conexion->query("SELECT * FROM $tabla");  // Obtener todos los registros de la tabla
    $registros = [];  // Inicializar el array de registros

    if ($peticion) {
        while ($fila = $peticion->fetch_assoc()) {
            $registros[] = $fila;  // Guardar cada registro en el array
        }
    } else {
        die("Error al obtener los registros: " . $conexion->error);  // Mostrar error si la consulta falla
    }

    return [
        'conexion' => $conexion,  // Objeto de conexión a la base de datos
        'tabla' => $tabla,  // Nombre de la tabla
        'seccion' => $seccion,  // Nombre de la sección
        'message' => $message,  // Mensaje de notificación
        'registros' => $registros  // Array con los registros obtenidos
    ];
}
