<?php

/**
 * Gestión de mensajes de contacto.
 * 
 * Este script muestra una interfaz para administrar los mensajes de contacto, permitiendo su visualización y eliminación.
 * 
 * Proceso:
 * 1. Se incluye la lógica centralizada del sistema.
 * 2. Se carga la configuración específica para la sección de contacto.
 * 3. Se convierte la configuración en variables accesibles.
 * 4. Se genera una interfaz con una lista de mensajes y opción para eliminarlos.
 */

// Incluir la lógica centralizada
include "../util/logica.php";

// Cargar la lógica para la sección "contacto"
$config = cargarLogica("contacto", "contacto");
extract($config);  // Convertir el array en variables ($conexion, $tabla, $seccion, $message, $registros)

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Contacto</title>

    <!-- Estilos globales -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/secciones.css">
</head>

<body class="seccion-page">
    <?php include "../includes/header.php"; ?> <!-- Incluir el sidebar -->

    <main>
        <div class="seccion-container">
            <h2>Gestión de Contacto</h2>

            <!-- Mensaje de confirmación o error -->
            <?php if (!empty($message)) : ?>
                <p class="message <?= strpos($message, 'Error') !== false ? 'error' : 'success' ?>">
                    <?= htmlspecialchars($message) ?>
                </p>
            <?php endif; ?>

            <h3>Mensajes de Contacto</h3>

            <?php if (!empty($registros)) : ?>
                <table class="seccion-table">
                    <thead>
                        <tr>
                            <?php
                            $columnas = array_keys($registros[0]);
                            foreach ($columnas as $columna) :
                            ?>
                                <th><?= ucfirst(str_replace('_', ' ', $columna)) ?></th>
                            <?php endforeach; ?>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registros as $registro) : ?>
                            <tr>
                                <?php foreach ($columnas as $columna) : ?>
                                    <td><?= htmlspecialchars($registro[$columna]) ?></td>
                                <?php endforeach; ?>
                                <td class="acciones">
                                    <a href="../crud/delete.php?tabla=<?= htmlspecialchars($tabla) ?>&id=<?= $registro['id'] ?>&seccion=<?= htmlspecialchars($seccion) ?>"
                                        class="delete"
                                        onclick="return confirm('¿Estás seguro de eliminar este mensaje?');">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p class="no-registros">No hay mensajes de contacto.</p>
            <?php endif; ?>
        </div>
    </main>

    <?php include "../includes/footer.php"; ?> <!-- Incluir el pie de página -->

</body>

</html>