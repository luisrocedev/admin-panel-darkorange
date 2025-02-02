<?php
session_start();  // Iniciar la sesión
include 'backend/config/db_connect.php';  // Incluir la conexión a la base de datos

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];  // Obtener el nombre de usuario
    $password = $_POST['password'];  // Obtener la contraseña

    // Consulta SQL para obtener el usuario
    $sql = "SELECT * FROM usuarios_admin WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);  // Asociar el valor del nombre de usuario
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró el usuario
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verificar si la contraseña es correcta (¡Asegúrate de usar `password_verify` si las contraseñas están encriptadas!)
        if ($password === $user['password']) {
            // Guardar datos en la sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");  // Redirigir al panel de control
            exit();
        } else {
            $error = "Contraseña incorrecta.";  // Mensaje de error
        }
    } else {
        $error = "Usuario no encontrado.";  // Mensaje de error
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="admin/css/login.css?v=<?php echo time(); ?>"> <!-- Estilos del login -->
</head>

<body>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>

        <!-- Formulario de login -->
        <form method="POST" action="login.php">
            <input type="text" id="username" name="username" placeholder="Usuario" required>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>

        <!-- Mensaje de error -->
        <?php if (isset($error)) : ?>
            <p class="error-message"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
    </div>

</body>

</html>