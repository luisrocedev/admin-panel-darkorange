<?php
// admin/fisioterapia/index.php

// Incluir la lógica centralizada
include "../util/logica.php";

/**
 * Cargar la lógica específica para la sección "fisioterapia".
 * La función `cargarLogica` devuelve un array con:
 * - $conexion: conexión a la base de datos.
 * - $tabla: nombre de la tabla asociada.
 * - $seccion: nombre de la sección actual.
 * - $message: mensaje de confirmación o error, si existe.
 * - $registros: array con los registros de la base de datos.
 */
$config = cargarLogica("fisioterapia", "fisioterapia");
extract($config); // Convierte el array en variables
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🩺 Gestión de Fisioterapia</title>

    <!-- Estilos globales -->
    <link rel="stylesheet" href="../css/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/secciones.css?v=<?php echo time(); ?>">
</head>

<body class="seccion-page">
    <?php include "../includes/header.php"; ?> <!-- Incluir el sidebar -->

    <!-- 🌟 CONTENIDO PRINCIPAL -->
    <main>
        <div class="seccion-container">
            <h2>🩺 Gestión de Fisioterapia</h2>

            <!-- 📢 Mensaje de confirmación o error -->
            <?php if (!empty($message)) : ?>
                <div class="message <?= strpos($message, 'Error') !== false ? 'error' : 'success' ?>">
                    <?= htmlspecialchars($message) ?>
                </div>
            <?php endif; ?>

            <!-- ➕ Botón para crear un nuevo registro -->
            <a href="../crud/create.php?tabla=<?= htmlspecialchars($tabla) ?>&seccion=<?= htmlspecialchars($seccion) ?>" class="seccion-btn">
                ➕ Añadir Registro
            </a>

            <!-- 🗂️ Lista de registros -->
            <h3 class="seccion-subtitle">💆‍♂️ Registro de Sesiones</h3>

            <?php
            include "../util/tabla_dinamica.php";
            mostrarTablaDinamica($conexion, $tabla, $seccion);
            ?>
        </div>
    </main>

    <?php include "../includes/footer.php"; ?> <!-- Incluir el pie de página -->
</body>

</html>