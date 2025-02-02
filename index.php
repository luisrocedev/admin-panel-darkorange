<?php

/**
 * Verifica si el usuario está autenticado y redirige según su estado.
 */

session_start();  // Iniciar la sesión

// Verificar si el usuario está autenticado
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");  // Redirigir al panel de control
    exit();
} else {
    header("Location: login.php");  // Redirigir a la página de inicio de sesión
    exit();
}
