<?php

/**
 * Verifica si el usuario está autenticado y lo redirige según su estado.
 * 
 * Proceso:
 * 1. Inicia la sesión si no está iniciada.
 * 2. Verifica si existe la variable de sesión `user_id`.
 * 3. Si el usuario está autenticado, lo redirige al panel de control.
 * 4. Si no está autenticado, lo redirige a la página de inicio de sesión.
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
