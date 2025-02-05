<?php

/**
 * Muestra una tabla dinámica con los registros de una tabla específica.
 * 
 * Esta función genera automáticamente una tabla HTML con los registros obtenidos de la base de datos.
 * También incluye opciones para editar y eliminar registros.
 */

function mostrarTablaDinamica($conexion, $tabla, $seccion)
{
    $peticion = $conexion->query("SELECT * FROM $tabla");  // Obtener todos los registros de la tabla

    if (!$peticion) {
        die("<p class='error-message'>Error al obtener los registros: " . $conexion->error . "</p>");  // Mostrar error si la consulta falla
    }

    $registros = [];  // Inicializar el array de registros
    while ($fila = $peticion->fetch_assoc()) {
        $registros[] = $fila;  // Guardar cada registro en el array
    }

    $columnas = !empty($registros) ? array_keys($registros[0]) : [];  // Obtener las columnas si hay registros

    if (!empty($registros)) : ?>
        <table class="seccion-table">
            <colgroup>
                <col style="width: 5%;"> <!-- ID -->
                <?php for ($i = 1; $i < count($columnas); $i++) : ?>
                    <col style="width: auto;">
                <?php endfor; ?>
                <col style="width: 20%;"> <!-- Acciones -->
            </colgroup>
            <thead>
                <tr>
                    <?php foreach ($columnas as $columna) : ?>
                        <th><?= ucwords(str_replace('_', ' ', $columna)) ?></th> <!-- Formato de nombre de columna -->
                    <?php endforeach; ?>
                    <th>Acciones</th> <!-- Columna para botones de acción -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro) : ?>
                    <tr>
                        <?php foreach ($columnas as $columna) : ?>
                            <td <?= $columna === 'id' ? "class='id-columna'" : ""; ?>> <!-- Destacar la columna ID -->
                                <?= htmlspecialchars($registro[$columna]) ?>
                            </td>
                        <?php endforeach; ?>
                        <td class="acciones">
                            <a href="../crud/update.php?tabla=<?= htmlspecialchars($tabla) ?>&id=<?= $registro['id'] ?>&seccion=<?= htmlspecialchars($seccion) ?>" class="btn-edit">
                                Editar
                            </a>
                            <a href="../crud/delete.php?tabla=<?= htmlspecialchars($tabla) ?>&id=<?= $registro['id'] ?>&seccion=<?= htmlspecialchars($seccion) ?>"
                                class="btn-delete" onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p class="no-registros">No hay registros en la tabla.</p> <!-- Mensaje si la tabla está vacía -->
<?php endif;
}
?>