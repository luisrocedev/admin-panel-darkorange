<?php

/**
 * Script para el inicio de sesión de administradores.
 * 
 * Este script permite a los administradores iniciar sesión en el panel de control.
 * 
 * Proceso:
 * 1. Se inicia la sesión del usuario.
 * 2. Se incluye la conexión a la base de datos.
 * 3. Se procesa el formulario cuando se envía.
 * 4. Se verifica si el usuario existe y si la contraseña es correcta.
 * 5. Si las credenciales son correctas, se inicia sesión y se redirige al dashboard.
 */

session_start();                                  // Iniciar la sesión
include 'backend/config/db_connect.php';         // Incluir la conexión a la base de datos

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];              // Obtener el nombre de usuario
    $password = $_POST['password'];              // Obtener la contraseña

    // Consulta SQL para obtener el usuario
    $sql = "SELECT * FROM usuarios_admin WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);          // Asociar el valor del nombre de usuario
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró el usuario
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verificar si la contraseña es correcta (Usar `password_verify` si está encriptada)
        if ($password === $user['password']) {
            $_SESSION['user_id'] = $user['id'];        // Guardar el ID del usuario en la sesión
            $_SESSION['username'] = $user['username']; // Guardar el nombre de usuario en la sesión
            header("Location: dashboard.php");        // Redirigir al panel de control
            exit();
        } else {
            $error = "Contraseña incorrecta.";        // Mensaje de error
        }
    } else {
        $error = "Usuario no encontrado.";           // Mensaje de error
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