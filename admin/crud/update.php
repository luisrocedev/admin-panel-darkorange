<?php
session_start();
include "../../admin/includes/header.php";

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
	header("Location: ../../login.php");
	exit();
}

// Incluir la conexión a la base de datos y funciones necesarias
include "../config/db_connect.php";
include "../util/funciones.php";

// Verificar si los parámetros están presentes
if (!isset($_GET['tabla'], $_GET['id'], $_GET['seccion'])) {
	die("Error: Parámetros incompletos.");
}

$tabla = $_GET['tabla'];
$id = $_GET['id'];
$seccion = $_GET['seccion'];

// Obtener la estructura de la tabla
$estructura = obtenerEstructuraTabla($conexion, $tabla);

// Obtener el registro a editar
$peticion = $conexion->prepare("SELECT * FROM $tabla WHERE id = ?");
$peticion->bind_param("i", $id);
$peticion->execute();
$resultado = $peticion->get_result();
$registro = $resultado->fetch_assoc();

if (!$registro) {
	die("Error: Registro no encontrado.");
}

// Procesar el formulario al enviarse
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$actualizaciones = [];

	foreach ($estructura as $columna) {
		$nombre = $columna['Field'];

		if ($columna['Extra'] === 'auto_increment' || ($columna['Type'] === 'timestamp' && $columna['Default'] === 'CURRENT_TIMESTAMP')) {
			continue;
		}

		if (isset($_POST[$nombre])) {
			$valor = $conexion->real_escape_string($_POST[$nombre]);
			$actualizaciones[] = "$nombre = '$valor'";
		}
	}

	$actualizacionesStr = implode(", ", $actualizaciones);
	$peticion = "UPDATE $tabla SET $actualizacionesStr WHERE id = $id";

	if ($conexion->query($peticion)) {
		$message = "Registro actualizado con éxito.";
	} else {
		$message = "Error al actualizar el registro: " . $conexion->error;
	}

	header("Location: ../../admin/$seccion/index.php?message=" . urlencode($message));
	exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar Registro</title>
	<link rel="stylesheet" href="../../admin/css/global.css">
	<link rel="stylesheet" href="../../admin/css/crud.css">
</head>

<body class="crud-page">
	<div class="crud-container">
		<h2>Editar Registro</h2>

		<form class="crud-form" action="update.php?tabla=<?= htmlspecialchars($tabla) ?>&id=<?= htmlspecialchars($id) ?>&seccion=<?= htmlspecialchars($seccion) ?>" method="post">
			<div class="crud-fields">
				<?= generarFormulario($estructura, $registro) ?> <!-- Generar los campos dinámicamente -->
			</div>
			<button type="submit" class="btn-primary">Actualizar</button>
		</form>
	</div>

	<footer>
		<p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
	</footer>
</body>

</html>