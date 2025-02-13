<?php

/**
 * Pie de página dinámico.
 * 
 * Este script incluye dinámicamente el footer del panel de administración.
 * 
 * Proceso:
 * 1. Detecta si estamos en el panel de administración.
 * 2. Incluye el `footer.css` dinámicamente para evitar problemas de caché.
 * 3. Muestra el footer con diseño moderno y adaptativo.
 */

// Detectar si estamos en el admin
$base_path = (strpos($_SERVER['PHP_SELF'], 'admin') !== false) ? "../css/footer.css" : "admin/css/footer.css";

?>
<link rel="stylesheet" href="<?= $base_path ?>?v=<?= time(); ?>"> <!-- Incluir estilos dinámicamente -->

<footer class="admin-footer">
    <div class="footer-content">
        <p>&copy; <?= date('Y') ?> TaronjaBox Valencia. Todos los derechos reservados.</p>
        <div class="footer-links">
            <a href="#">Política de Privacidad</a>
            <a href="#">Términos y Condiciones</a>
            <a href="https://www.instagram.com/taronjaboxvalencia" target="_blank">Instagram</a>
        </div>
    </div>
</footer>