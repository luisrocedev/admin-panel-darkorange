<?php

/**
 * Generación dinámica del menú de navegación (sidebar).
 * 
 * Proceso:
 * 1. Incluye la conexión a la base de datos.
 * 2. Consulta las secciones del menú desde la tabla `admin_menu`.
 * 3. Genera el menú lateral de forma dinámica.
 */

// Obtener la URL base correctamente
$base_url = "http://" . $_SERVER['HTTP_HOST'];

// Determinar la ruta del archivo de conexión
$basePath = __DIR__ . "/../config/db_connect.php";

// Verificar si el archivo existe antes de incluirlo
if (file_exists($basePath)) {
    include_once $basePath;
} else {
    die("Error: No se pudo encontrar el archivo de conexión.");
}

// Verificar si la conexión está disponible
if (!isset($conexion)) {
    die("Error: La conexión a la base de datos no está disponible.");
}

// Obtener las secciones del menú
$sql = "SELECT * FROM admin_menu ORDER BY orden ASC";
$result = $conexion->query($sql);

?>

<head>
    <!-- Estilos del menú lateral -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/admin/css/header.css?v=<?php echo time(); ?>">
</head>

<!-- ========== MENÚ LATERAL ========== -->
<aside class="sidebar">
    <div class="logo">
        <img src="<?php echo $base_url; ?>/admin/img/logo.png" alt="TaronjaBox Admin">
        <h3>TaronjaBox Admin</h3>
    </div>

    <nav class="menu">
        <ul>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <a href="<?php echo $base_url . '/' . ltrim($row['enlace'], '/'); ?>">
                        <i class="fas fa-<?php echo htmlspecialchars($row['icono']); ?>"></i>
                        <span><?php echo htmlspecialchars($row['titulo']); ?></span>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </nav>
</aside>