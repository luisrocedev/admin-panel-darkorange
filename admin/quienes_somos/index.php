<?php

/**
 * Página de gestión de "Quiénes Somos".
 * Incluye la lógica centralizada, muestra un formulario para crear nuevos registros
 * y una tabla dinámica con los registros existentes.
 */

// Incluir la lógica centralizada
include "../util/logica.php";

// Cargar la lógica para la sección "quienes_somos"
$config = cargarLogica("quienes_somos", "quienes_somos");
extract($config); // Convierte el array en variables ($conexion, $tabla, $seccion, $message, $registros)
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/secciones.css"> <!-- Ahora usa secciones.css -->
</head>

<body class="seccion-page">
    <?php include "../includes/header.php"; ?> <!-- Incluir el sidebar -->

    <main>
        <div class="seccion-container">
            <h2>Quiénes Somos</h2>

            <!-- Mensaje de confirmación o error -->
            <?php if (!empty($message)) : ?>
                <p class="message <?= strpos($message, 'Error') !== false ? 'error' : 'success' ?>">
                    <?= htmlspecialchars($message) ?>
                </p>
            <?php endif; ?>

            <!-- Botón para crear un nuevo registro -->
            <a href="../crud/create.php?tabla=<?= htmlspecialchars($tabla) ?>&seccion=<?= htmlspecialchars($seccion) ?>" class="seccion-btn">
                Crear Nuevo Registro
            </a>

            <!-- Lista de registros -->
            <h3>Lista de Registros</h3>
            <?php
            include "../util/tabla_dinamica.php";
            mostrarTablaDinamica($conexion, $tabla, $seccion);
            ?>
        </div>
    </main>

    <?php include "../includes/footer.php"; ?> <!-- Incluir el pie de página -->
</body>

</html>