<?php

// Iniciar sesión
session_start();

// Verificar autenticación
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Incluir el header (menú) y el footer
include "admin/config/db_connect.php";
include "admin/includes/header.php";
include "admin/includes/footer.php";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - TaronjaBox</title>
    <link rel="stylesheet" href="admin/css/global.css">
    <link rel="stylesheet" href="admin/css/dashboard.css?v=<?php echo time(); ?>">
</head>

<body class="dashboard-page">

    <!-- Contenido principal -->
    <main class="main-content">
        <div class="dashboard-container">
            <h1 class="dashboard-title">👋 ¡Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
            <p class="dashboard-subtitle">Utiliza el menú lateral para gestionar el contenido del sitio.</p>
        </div>
    </main>

</body>

</html>