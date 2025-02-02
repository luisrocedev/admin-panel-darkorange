<?php
// Obtener la ruta base dependiendo de la ubicación actual
$base_path = (strpos($_SERVER['PHP_SELF'], 'admin') !== false) ? "../css/footer.css" : "admin/css/footer.css";
?>
<link rel="stylesheet" href="<?= $base_path ?>?v=<?php echo time(); ?>">
<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>