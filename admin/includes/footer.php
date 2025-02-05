<?php

/**
 * Pie de página dinámico.
 * 
 * Este script incluye la hoja de estilos del footer y genera el contenido del pie de página.
 * 
 * Proceso:
 * 1. Detecta si la ubicación actual es dentro del panel de administración (`admin`).
 * 2. Ajusta dinámicamente la ruta de la hoja de estilos (`footer.css`).
 * 3. Incluye la hoja de estilos con un parámetro `?v=time()` para evitar problemas de caché.
 * 4. Muestra el contenido del footer con derechos reservados.
 */

// Obtener la ruta base dependiendo de la ubicación actual
$base_path = (strpos($_SERVER['PHP_SELF'], 'admin') !== false) ? "../css/footer.css" : "admin/css/footer.css";

?>
<link rel="stylesheet" href="<?= $base_path ?>?v=<?= time(); ?>"> <!-- Incluir estilos dinámicamente -->

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>