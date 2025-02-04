<?php

/**
 * Script para cerrar la sesión del usuario.
 * 
 * Este script se encarga de destruir la sesión actual y redirigir al usuario a la página de inicio de sesión.
 * 
 * Proceso:
 * 1. Inicia la sesión si no está iniciada.
 * 2. Elimina todas las variables de sesión.
 * 3. Destruye la sesión completamente.
 * 4. Redirige al usuario a la página de login.
 */

session_start();                // Iniciar la sesión
session_unset();                // Eliminar todas las variables de sesión
session_destroy();              // Destruir la sesión
header("Location: login.php");  // Redirigir al usuario a la página de inicio de sesión
exit();                         // Detener la ejecución del script
