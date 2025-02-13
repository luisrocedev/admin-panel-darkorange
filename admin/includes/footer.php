<?php

/**
 * Pie de página dinámico para el panel de administración.
 * 
 * Muestra un footer simple y moderno adaptado al diseño del panel de administración.
 */

$base_url = "http://" . $_SERVER['HTTP_HOST'];
$footer_css_path = $base_url . "/admin/css/footer.css";

?>
<link rel="stylesheet" href="<?= $footer_css_path ?>?v=<?= time(); ?>">

<footer class="admin-footer">
    <div class="footer-content">
        <p>&copy; 2025 TaronjaBox | Panel de Administración</p>
    </div>
</footer>