<?php
// Obtener la URL base correctamente
$base_url = "http://localhost/GitHub/Primero-de-DAM-Luis-Rodriguez/darkorange";


// Determinar la ruta absoluta del archivo
$basePath = __DIR__ . "/../config/db_connect.php";

// Verificar si el archivo existe antes de incluirlo
if (file_exists($basePath)) {
    include_once $basePath;
} else {
    die("Error: No se pudo encontrar el archivo de conexión.");
}

// Verificar si la variable $conexion está definida
if (!isset($conexion)) {
    die("Error: La conexión a la base de datos no está disponible.");
}

// Obtener las secciones del menú desde la base de datos
$sql = "SELECT * FROM admin_menu ORDER BY orden ASC";
$result = $conexion->query($sql);
?>

<head>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/admin/css/header.css"> <!-- Incluir el archivo header.css -->
</head>

<header>
    <nav class="sidebar">
        <h2>Menú</h2>
        <ul>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <a href="<?php echo $base_url . '/' . ltrim($row['enlace'], '/'); ?>">
                        <i class="fas fa-<?php echo $row['icono']; ?>"></i>
                        <?php echo $row['titulo']; ?>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </nav>
</header>