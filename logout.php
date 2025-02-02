<?php

/**
 * Cierra la sesión del usuario.
 * 
 * Destruye la sesión actual y redirige al usuario a la página de inicio de sesión.
 */

session_start();  // Iniciar la sesión
session_unset();  // Eliminar todas las variables de sesión
session_destroy();  // Destruir la sesión
header("Location: login.php");  // Redirigir al login
exit();  // Detener la ejecución