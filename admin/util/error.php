<?php

/**
 * Configuración para mostrar errores en el entorno de desarrollo.
 * Habilita la visualización de errores, incluyendo errores de arranque y todo tipo de errores.
 */
ini_set('display_errors', 1);                    // Si hay error, dimelo
ini_set('display_startup_errors', 1);        // Sacame los errores de arranque
error_reporting(E_ALL);                            // Sacame todo tipo de errores