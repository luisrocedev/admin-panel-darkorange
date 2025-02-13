<?php

session_start();
include "../../admin/includes/header.php";

/**
 * Editar un registro en la base de datos de forma dinámica.
 * 
 * Este script permite obtener un registro de una tabla específica y actualizar sus valores 
 * a través de un formulario generado dinámicamente basado en la estructura de la tabla.
 * 
 * Proceso:
 * 1. Se inicia la sesión y se verifica la autenticación del usuario.
 * 2. Se incluye la conexión a la base de datos y las funciones auxiliares.
 * 3. Se validan los parámetros `tabla`, `id` y `seccion`.
 * 4. Se obtiene la estructura de la tabla y el registro a editar.
 * 5. Se genera un formulario con los datos actuales del registro.
 * 6. Se procesa la actualización de los datos en la base de datos.
 * 7. Se redirige a la sección correspondiente con un mensaje de éxito o error.
 */

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
	header("Location: ../../login.php");  // Redirigir al login si no está autenticado
	exit();
}

// Incluir la conexión a la base de datos y funciones necesarias
include "../config/db_connect.php";
include "../util/funciones.php";

// Verificar si los parámetros están presentes
if (!isset($_GET['tabla'], $_GET['id'], $_GET['seccion'])) {
	die("Error: Parámetros incompletos.");
}

$tabla = $_GET['tabla'];       // Nombre de la tabla
$id = $_GET['id'];             // ID del registro
$seccion = $_GET['seccion'];   // Sección para redirigir

// Obtener la estructura de la tabla
$estructura = obtenerEstructuraTabla($conexion, $tabla);

// Obtener el registro a editar
$peticion = $conexion->prepare("SELECT * FROM $tabla WHERE id = ?");
$peticion->bind_param("i", $id);
$peticion->execute();
$resultado = $peticion->get_result();
$registro = $resultado->fetch_assoc();

if (!$registro) {
	die("Error: Registro no encontrado.");  // Verificar si el registro existe
}

// Procesar el formulario al enviarse
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$actualizaciones = [];

	foreach ($estructura as $columna) {
		$nombre = $columna['Field'];

		// Omitir campos autoincrementales y timestamps automáticos
		if ($columna['Extra'] === 'auto_increment' || ($columna['Type'] === 'timestamp' && $columna['Default'] === 'CURRENT_TIMESTAMP')) {
			continue;
		}

		// Procesar y escapar los valores del formulario
		if (isset($_POST[$nombre])) {
			$valor = $conexion->real_escape_string($_POST[$nombre]);
			$actualizaciones[] = "$nombre = '$valor'";
		}
	}

	// Construcción de la consulta SQL
	$actualizacionesStr = implode(", ", $actualizaciones);
	$peticion = "UPDATE $tabla SET $actualizacionesStr WHERE id = $id";

	// Ejecutar la consulta e informar el resultado
	if ($conexion->query($peticion)) {
		$message = "Registro actualizado con éxito.";
	} else {
		$message = "Error al actualizar el registro: " . $conexion->error;
	}

	// Redirigir a la gestión de la sección con el mensaje
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
	<link rel="stylesheet" href="../../admin/css/global.css"> <!-- Estilos globales -->
	<link rel="stylesheet" href="../../admin/css/crud.css"> <!-- Estilos del CRUD -->
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
	<?php include "../../admin/includes/footer.php"; ?>
</body>

</html>