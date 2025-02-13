<?php

/**
 * Página de gestión de "Planes de Suscripción".
 * 
 * Este script permite la administración de los planes de suscripción, 
 * ofreciendo opciones para agregar nuevos registros y visualizar los existentes.
 * 
 * Proceso:
 * 1. Se incluye la lógica centralizada del sistema.
 * 2. Se carga la configuración específica para la sección "planes_suscripcion".
 * 3. Se convierte la configuración en variables accesibles.
 * 4. Se genera una interfaz con un botón para agregar registros y una tabla dinámica.
 * 5. Se incluyen el header y el footer para mantener la estructura del sitio.
 */

// Incluir la lógica centralizada
include "../util/logica.php";

// Cargar la lógica para la sección "planes_suscripcion"
$config = cargarLogica("planes_suscripcion", "planes_suscripcion");
extract($config); // Convierte el array en variables ($conexion, $tabla, $seccion, $message, $registros)

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📑 Gestión de Planes de Suscripción</title>

    <!-- Estilos globales -->
    <link rel="stylesheet" href="../css/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/secciones.css?v=<?php echo time(); ?>">
</head>

<body class="seccion-page">
    <?php include "../includes/header.php"; ?> <!-- Incluir el sidebar -->

    <!-- 🌟 CONTENIDO PRINCIPAL -->
    <main>
        <div class="seccion-container">
            <h2>📑 Gestión de Planes de Suscripción</h2>

            <!-- 📢 Mensaje de confirmación o error -->
            <?php if (!empty($message)) : ?>
                <div class="message <?= strpos($message, 'Error') !== false ? 'error' : 'success' ?>">
                    <?= htmlspecialchars($message) ?>
                </div>
            <?php endif; ?>

            <!-- ➕ Botón para crear un nuevo registro -->
            <a href="../crud/create.php?tabla=<?= htmlspecialchars($tabla) ?>&seccion=<?= htmlspecialchars($seccion) ?>" class="seccion-btn">
                ➕ Añadir Plan
            </a>

            <!-- 📊 Lista de Planes -->
            <h3 class="seccion-subtitle">💳 Planes Disponibles</h3>

            <?php
            include "../util/tabla_dinamica.php";  // Incluir la lógica de la tabla dinámica
            mostrarTablaDinamica($conexion, $tabla, $seccion);  // Mostrar la tabla de registros
            ?>
        </div>
    </main>

    <?php include "../includes/footer.php"; ?> <!-- Incluir el pie de página -->
</body>

</html>