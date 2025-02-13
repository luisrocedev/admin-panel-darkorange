<?php

/**
 * Página de gestión de "Quiénes Somos".
 * 
 * Este script permite la administración de la sección "Quiénes Somos",
 * proporcionando opciones para agregar nuevos registros y visualizar los existentes.
 * 
 * Proceso:
 * 1. Se incluye la lógica centralizada del sistema.
 * 2. Se carga la configuración específica para la sección "quienes_somos".
 * 3. Se convierte la configuración en variables accesibles.
 * 4. Se genera una interfaz con un botón para agregar registros y una tabla dinámica.
 * 5. Se incluyen el header y el footer para mantener la estructura del sitio.
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
    <title>Quiénes Somos - Administración</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="../css/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/secciones.css?v=<?php echo time(); ?>">
</head>

<body class="seccion-page">
    <?php include "../includes/header.php"; ?> <!-- Incluir el sidebar -->

    <!-- ======= 🌟 CONTENIDO PRINCIPAL ======= -->
    <main>
        <div class="seccion-container">
            <h2>⚙️ Gestión de "Quiénes Somos"</h2>

            <!-- 📢 Mensaje de confirmación o error -->
            <?php if (!empty($message)) : ?>
                <div class="message <?= strpos($message, 'Error') !== false ? 'error' : 'success' ?>">
                    <?= htmlspecialchars($message) ?>
                </div>
            <?php endif; ?>

            <!-- ➕ Botón para crear un nuevo registro -->
            <a href="../crud/create.php?tabla=<?= htmlspecialchars($tabla) ?>&seccion=<?= htmlspecialchars($seccion) ?>" class="seccion-btn">
                ➕ Crear Nuevo Registro
            </a>

            <!-- 📋 Lista de registros -->
            <h3 class="seccion-subtitle">🗂️ Lista de Registros</h3>
            <?php
            include "../util/tabla_dinamica.php";  // Incluir la lógica de la tabla dinámica
            mostrarTablaDinamica($conexion, $tabla, $seccion);  // Mostrar la tabla de registros
            ?>
        </div>
    </main>

    <?php include "../includes/footer.php"; ?> <!-- Incluir el pie de página -->
</body>

</html>