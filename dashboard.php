<?php

/**
 * Panel de Administración.
 * 
 * Este script verifica si el usuario está autenticado y carga el panel de administración.
 * 
 * Proceso:
 * 1. Se inicia la sesión del usuario.
 * 2. Se verifica si el usuario está autenticado.
 * 3. Si no está autenticado, se redirige a la página de inicio de sesión.
 * 4. Se incluye la conexión a la base de datos.
 * 5. Se carga el header y el footer dinámico.
 */

session_start();  // Iniciar la sesión

// Verificar autenticación del usuario
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Redirigir al login si no está autenticado
    exit();
}

// Incluir conexión a la base de datos
include "admin/config/db_connect.php";

// Incluir el header dinámico (evitando duplicaciones)
include "admin/includes/header.php";
include "admin/includes/footer.php";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="admin/css/global.css"> <!-- Carga de estilos globales -->
    <link rel="stylesheet" href="admin/css/dashboard.css?v=<?php echo time(); ?>"> <!-- Carga el dashboard -->
</head>

<body class="dashboard-page">

    <main class="main-content">
        <div class="dashboard-container">
            <h1 class="dashboard-title">Bienvenido, <?php echo $_SESSION['username']; ?></h1>
            <p>Selecciona una opción en el menú para administrar el sitio.</p>
        </div>
    </main>

</body>

</html>