<?php

/**
 * Pie de página dinámico para el panel de administración.
 * 
 * Proceso:
 * 1. Incluye el `footer.css` dinámicamente.
 * 2. Muestra el footer con un diseño moderno y enlaces útiles.
 */

// Obtener la ruta base para el archivo CSS
$base_url = "http://" . $_SERVER['HTTP_HOST'];
$footer_css_path = $base_url . "/admin/css/footer.css";

?>
<link rel="stylesheet" href="<?= $footer_css_path ?>?v=<?= time(); ?>"> <!-- Forzar actualización del cache -->

<footer class="admin-footer">
    <div class="footer-content">
        <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
    </div>
</footer>