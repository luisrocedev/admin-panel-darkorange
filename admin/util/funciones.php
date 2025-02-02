<?php

/**
 * Obtiene la estructura de una tabla (columnas y tipos de datos).
 */
function obtenerEstructuraTabla($conexion, $tabla)
{
    $peticion = $conexion->prepare("DESCRIBE $tabla");
    if (!$peticion) {
        die("Error en la preparación de la consulta: " . $conexion->error);
    }

    $peticion->execute();
    $resultado = $peticion->get_result();

    $estructura = [];
    while ($fila = $resultado->fetch_assoc()) {
        $estructura[] = $fila;
    }

    $peticion->close();
    return $estructura;
}

/**
 * Genera un formulario dinámico basado en la estructura de la tabla.
 */
function generarFormulario($estructura, $valores = [])
{
    $formulario = '';
    foreach ($estructura as $columna) {
        $nombre = $columna['Field'];
        $tipo = $columna['Type'];
        $valor = $valores[$nombre] ?? '';

        if ($columna['Extra'] === 'auto_increment' || ($tipo === 'timestamp' && $columna['Default'] === 'CURRENT_TIMESTAMP')) {
            continue;
        }

        $formulario .= "<label for='$nombre'>" . ucfirst($nombre) . ":</label>";

        if (strpos($tipo, 'text') !== false) {
            $formulario .= "<textarea name='$nombre' id='$nombre' required>$valor</textarea>";
        } elseif (strpos($tipo, 'decimal') !== false || strpos($tipo, 'int') !== false) {
            $formulario .= "<input type='number' step='0.01' name='$nombre' id='$nombre' value='$valor' required>";
        } else {
            $formulario .= "<input type='text' name='$nombre' id='$nombre' value='$valor' required>";
        }

        $formulario .= "<br><br>";
    }
    return $formulario;
}
