<?php

/**
 * Muestra una tabla dinámica con los registros de una tabla específica.
 * Incluye opciones para editar y eliminar registros.
 */
function mostrarTablaDinamica($conexion, $tabla, $seccion)
{
    $peticion = $conexion->query("SELECT * FROM $tabla");

    if (!$peticion) {
        die("<p class='error-message'>Error al obtener los registros: " . $conexion->error . "</p>");
    }

    $registros = [];
    while ($fila = $peticion->fetch_assoc()) {
        $registros[] = $fila;
    }

    // Obtener las columnas si hay registros
    $columnas = !empty($registros) ? array_keys($registros[0]) : [];

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
                        <th><?= ucwords(str_replace('_', ' ', $columna)) ?></th>
                    <?php endforeach; ?>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro) : ?>
                    <tr>
                        <?php foreach ($columnas as $columna) : ?>
                            <td <?= $columna === 'id' ? "class='id-columna'" : ""; ?>>
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
        <p class="no-registros">No hay registros en la tabla.</p>
<?php endif;
}
?>