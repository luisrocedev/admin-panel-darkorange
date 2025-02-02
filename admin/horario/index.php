<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}
?>

<link rel="stylesheet" href="../css/header.css"> <!-- Incluir los estilos del panel de administración -->
<link rel="stylesheet" href="../css/style.css"> <!-- Incluir los estilos del panel de administración -->

<header>
    <nav>
        <ul>
            <li><a href="../../dashboard.php">Inicio</a></li>
            <li><a href="create.php">Crear Entrenamiento</a></li> <!-- Enlace para crear nuevo entrenamiento -->
            <li><a href="read.php">Ver Entrenamientos</a></li> <!-- Enlace para ver entrenamientos -->
        </ul>
    </nav>
</header>

<main>
    <h2>Gestión de Entrenamientos</h2>
    <p>Desde aquí podrás gestionar todos los entrenamientos:</p>
    <ul>
        <li><a href="create.php">Crear Nuevo Entrenamiento</a></li> <!-- Enlace para crear un nuevo entrenamiento -->
        <li><a href="read.php">Ver Entrenamientos Existentes</a></li> <!-- Enlace para leer los entrenamientos existentes -->
    </ul>
</main>

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>