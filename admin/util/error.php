<?php

/**
 * Configuración para mostrar errores en el entorno de desarrollo.
 * 
 * Este script habilita la visualización de errores, incluyendo:
 * - Errores generales (`display_errors`).
 * - Errores de arranque (`display_startup_errors`).
 * - Reporte de todos los errores (`error_reporting`).
 * 
 * ⚠️ NOTA: No habilitar esta configuración en producción, ya que podría exponer información sensible.
 */

ini_set('display_errors', 1);               // Mostrar errores generales en pantalla
ini_set('display_startup_errors', 1);       // Mostrar errores ocurridos durante el arranque de PHP
error_reporting(E_ALL);                      // Reportar todo tipo de errores
