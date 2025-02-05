<?php

/**
 * Obtiene la estructura de una tabla en la base de datos.
 */

function obtenerEstructuraTabla($conexion, $tabla)
{
    $peticion = $conexion->prepare("DESCRIBE $tabla");  // Preparar la consulta para obtener la estructura de la tabla

    if (!$peticion) {
        die("Error en la preparación de la consulta: " . $conexion->error);  // Mostrar error si la consulta falla
    }

    $peticion->execute();  // Ejecutar la consulta
    $resultado = $peticion->get_result();  // Obtener el resultado de la consulta

    $estructura = [];  // Inicializar el array donde se almacenará la estructura de la tabla
    while ($fila = $resultado->fetch_assoc()) {
        $estructura[] = $fila;  // Almacenar cada fila en el array de estructura
    }

    $peticion->close();  // Cerrar la consulta
    return $estructura;  // Retornar la estructura obtenida
}

/**
 * Genera un formulario dinámico basado en la estructura de la tabla.
 */

function generarFormulario($estructura, $valores = [])
{
    $formulario = '';  // Inicializar el formulario

    foreach ($estructura as $columna) {
        $nombre = $columna['Field'];  // Nombre del campo
        $tipo = $columna['Type'];  // Tipo de dato en la base de datos
        $valor = $valores[$nombre] ?? '';  // Valor actual del campo si existe

        // Ignorar campos auto_increment y timestamps automáticos
        if ($columna['Extra'] === 'auto_increment' || ($tipo === 'timestamp' && $columna['Default'] === 'CURRENT_TIMESTAMP')) {
            continue;
        }

        $formulario .= "<label for='$nombre'>" . ucfirst($nombre) . ":</label>";  // Generar la etiqueta del campo

        // Verificar el tipo de dato y generar el input adecuado
        if (strpos($tipo, 'text') !== false) {
            $formulario .= "<textarea name='$nombre' id='$nombre' required>$valor</textarea>";  // Campo tipo TEXT
        } elseif (strpos($tipo, 'decimal') !== false || strpos($tipo, 'int') !== false) {
            $formulario .= "<input type='number' step='0.01' name='$nombre' id='$nombre' value='$valor' required>";  // Campo numérico
        } else {
            $formulario .= "<input type='text' name='$nombre' id='$nombre' value='$valor' required>";  // Campo de texto genérico
        }

        $formulario .= "<br><br>";  // Salto de línea para mejorar la apariencia
    }

    return $formulario;  // Retornar el formulario generado
}
