# Estructura del Proyecto

- **🗀  darkorange/**
    - 🗋  README.md
    - **🗀  001-darkorange/**
        - 🗋  dashboard.php
        - 🗋  index.php
        - 🗋  login.php
        - 🗋  logout.php
        - **🗀  admin/**
            - **🗀  blog/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  config/**
                - 🗋  db_connect.php
            - **🗀  contacto/**
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
            - **🗀  crud/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  css/**
                - 🗋  blog.css
                - 🗋  contacto.css
                - 🗋  dashboard.css
                - 🗋  header.css
                - 🗋  login.css
                - 🗋  style.css
            - **🗀  fisioterapia/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  nuestro_equipo/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  precios/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  quienes_somos/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  workouts/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
        - **🗀  backend/**
            - 🗋  backend.php
            - 🗋  script.js
            - **🗀  config/**
                - 🗋  db_connect.php
        - **🗀  database/**
            - 🗋  taronjaboxvalencia (1).sql
        - **🗀  util/**
            - 🗋  generador.php
            - 🗋  index.php
            - **🗀  documentacion/**
                - **🗀  docs/**
                    - **🗀  admin/**
                        - 🗋  dashboard.txt
                        - 🗋  login.txt
                        - 🗋  logout.txt
                        - **🗀  blog/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  config/**
                            - 🗋  db_connect.txt
                        - **🗀  contacto/**
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                        - **🗀  crud/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  css/**
                        - **🗀  fisioterapia/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  nuestro_equipo/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  precios/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  quienes_somos/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  workouts/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt

# Documentación de Archivos

## 001-darkorange\index.php

*
 * Inicia una sesión de usuario y verifica la autenticación.
 *
 * Este script comprueba si existe una sesión de usuario activa.
 * Si el usuario ya ha iniciado sesión, se redirige al panel de control (dashboard).
 * De lo contrario, se redirige a la página de inicio de sesión.

## 001-darkorange\login.php

*
 * Login de administrador.

 * Este script maneja el proceso de inicio de sesión para administradores.
 * Recibe las credenciales de usuario y contraseña enviadas por el formulario,
 * verifica su validez en la base de datos y, si son correctas,
 * inicia una sesión de usuario y redirige al panel de control.

 * @author [Luis Rodriguez]
 * @version 1.0
 * @since 2023-11-20

## 001-darkorange\admin\blog\create.php

*
 * Crea una nueva entrada en el blog y la inserta en la base de datos.
 *
 * Este archivo maneja la creación de una nueva entrada de blog a través de un formulario.
 * El formulario recopila el título y el contenido de la entrada, los cuales se insertan en
 * la tabla `blog_posts` de la base de datos. Si la inserción es exitosa, se muestra un
 * mensaje de éxito, de lo contrario, se muestra un mensaje de error.
 *
 * La operación se realiza con seguridad utilizando sentencias preparadas para evitar
 * inyecciones SQL.
 *
 * @param string $title   Título de la entrada del blog.
 * @param string $content Contenido de la entrada del blog.
 *
 * @return void

## 001-darkorange\admin\crud\create.php

*
 * Crear un nuevo usuario en la base de datos.
 * 
 * Este script maneja la creación de un nuevo usuario administrado en la base de datos. 
 * Cuando el formulario se envía, se recoge el nombre de usuario y la contraseña,
 * y luego se insertan en la tabla `usuarios_admin` de la base de datos.
 * Si la creación es exitosa, se muestra un mensaje de éxito. Si ocurre un error, 
 * se muestra un mensaje de error.
 *
 * @param string $username Nombre del nuevo usuario.
 * @param string $password Contraseña del nuevo usuario.
 * 
 * @return string Mensaje de éxito o error según el resultado de la operación.

## 001-darkorange\admin\css\blog.css

Estilos para el panel de administración

## 001-darkorange\admin\css\contacto.css

Estilos específicos para la sección de contacto

## 001-darkorange\admin\css\dashboard.css

Reset básico

## 001-darkorange\admin\css\header.css

Estilos para el encabezado del panel de administración

## 001-darkorange\admin\css\login.css

Reset básico

## 001-darkorange\admin\css\style.css

Reset básico

## 001-darkorange\backend\script.js

Hacemos la petición fetch al archivo backend.php

## 001-darkorange\util\generador.php

Función para recorrer las carpetas del proyecto y generar archivos .txt con los docstrings


# Código de Archivos

## README.md

```
# Estructura del Proyecto

- **🗀  darkorange/**
    - 🗋  README.md
    - **🗀  001-darkorange/**
        - 🗋  dashboard.php
        - 🗋  index.php
        - 🗋  login.php
        - 🗋  logout.php
        - **🗀  admin/**
            - **🗀  blog/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  config/**
                - 🗋  db_connect.php
            - **🗀  contacto/**
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
            - **🗀  crud/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  css/**
                - 🗋  blog.css
                - 🗋  contacto.css
                - 🗋  dashboard.css
                - 🗋  header.css
                - 🗋  login.css
                - 🗋  style.css
            - **🗀  fisioterapia/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  nuestro_equipo/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  precios/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  quienes_somos/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
            - **🗀  workouts/**
                - 🗋  create.php
                - 🗋  delete.php
                - 🗋  index.php
                - 🗋  read.php
                - 🗋  update.php
        - **🗀  backend/**
            - 🗋  backend.php
            - 🗋  script.js
            - **🗀  config/**
                - 🗋  db_connect.php
        - **🗀  database/**
            - 🗋  taronjaboxvalencia (1).sql
        - **🗀  util/**
            - 🗋  generador.php
            - 🗋  index.php
            - **🗀  documentacion/**
                - **🗀  docs/**
                    - **🗀  admin/**
                        - 🗋  dashboard.txt
                        - 🗋  login.txt
                        - 🗋  logout.txt
                        - **🗀  blog/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  config/**
                            - 🗋  db_connect.txt
                        - **🗀  contacto/**
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                        - **🗀  crud/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  css/**
                        - **🗀  fisioterapia/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  nuestro_equipo/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  precios/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  quienes_somos/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt
                        - **🗀  workouts/**
                            - 🗋  create.txt
                            - 🗋  delete.txt
                            - 🗋  index.txt
                            - 🗋  read.txt
                            - 🗋  update.txt

# Documentación de Archivos

## 001-darkorange\index.php

*
 * Inicia una sesión de usuario y verifica la autenticación.
 *
 * Este script comprueba si existe una sesión de usuario activa.
 * Si el usuario ya ha iniciado sesión, se redirige al panel de control (dashboard).
 * De lo contrario, se redirige a la página de inicio de sesión.

## 001-darkorange\login.php

*
 * Login de administrador.

 * Este script maneja el proceso de inicio de sesión para administradores.
 * Recibe las credenciales de usuario y contraseña enviadas por el formulario,
 * verifica su validez en la base de datos y, si son correctas,
 * inicia una sesión de usuario y redirige al panel de control.

 * @author [Luis Rodriguez]
 * @version 1.0
 * @since 2023-11-20

## 001-darkorange\admin\blog\create.php

*
 * Crea una nueva entrada en el blog y la inserta en la base de datos.
 *
 * Este archivo maneja la creación de una nueva entrada de blog a través de un formulario.
 * El formulario recopila el título y el contenido de la entrada, los cuales se insertan en
 * la tabla `blog_posts` de la base de datos. Si la inserción es exitosa, se muestra un
 * mensaje de éxito, de lo contrario, se muestra un mensaje de error.
 *
 * La operación se realiza con seguridad utilizando sentencias preparadas para evitar
 * inyecciones SQL.
 *
 * @param string $title   Título de la entrada del blog.
 * @param string $content Contenido de la entrada del blog.
 *
 * @return void

## 001-darkorange\admin\crud\create.php

*
 * Crear un nuevo usuario en la base de datos.
 * 
 * Este script maneja la creación de un nuevo usuario administrado en la base de datos. 
 * Cuando el formulario se envía, se recoge el nombre de usuario y la contraseña,
 * y luego se insertan en la tabla `usuarios_admin` de la base de datos.
 * Si la creación es exitosa, se muestra un mensaje de éxito. Si ocurre un error, 
 * se muestra un mensaje de error.
 *
 * @param string $username Nombre del nuevo usuario.
 * @param string $password Contraseña del nuevo usuario.
 * 
 * @return string Mensaje de éxito o error según el resultado de la operación.

## 001-darkorange\admin\css\blog.css

Estilos para el panel de administración

## 001-darkorange\admin\css\contacto.css

Estilos específicos para la sección de contacto

## 001-darkorange\admin\css\dashboard.css

Reset básico

## 001-darkorange\admin\css\header.css

Estilos para el encabezado del panel de administración

## 001-darkorange\admin\css\login.css

Reset básico

## 001-darkorange\admin\css\style.css

Reset básico

## 001-darkorange\backend\script.js

Hacemos la petición fetch al archivo backend.php

## 001-darkorange\util\generador.php

Función para recorrer las carpetas del proyecto y generar archivos .txt con los docstrings


```

## 001-darkorange\dashboard.php

```php
<?php
session_start();  // Inicia la sesión para acceder a las variables de sesión

/**
 * Verifica si el usuario está autenticado.
 * Si no está autenticado, redirige al login. Si está autenticado, permite el acceso al dashboard.
 */
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();  // Detiene la ejecución para asegurar que no se cargue el resto del código
}
?>

<!-- Incluir el archivo de estilo del panel de administración -->
<link rel="stylesheet" href="admin/css/dashboard.css"> <!-- Asegúrate de que la ruta sea correcta -->
<link rel="stylesheet" href="admin/css/header.css"> <!-- Incluir el estilo del encabezado -->

<header>
    <nav>
        <ul>
            <!-- Enlaces de navegación para acceder a diferentes secciones -->
            <li><a href="dashboard.php">Inicio</a></li> <!-- Enlace al panel de administración -->
            <li><a href="admin/blog/index.php">Blog</a></li> <!-- Enlace a la página del blog -->
            <li><a href="admin/nuestro_equipo/index.php">Nuestro equipo</a></li> <!-- Enlace a la página de nuestro equipo -->
            <li><a href="admin/quienes_somos/index.php">Quienes somos</a></li> <!-- Enlace a la página "quienes somos" -->
            <li><a href="admin/fisioterapia/index.php">Fisioterapia</a></li> <!-- Enlace a la página de fisioterapia -->
            <li><a href="admin/precios/index.php">Precios</a></li> <!-- Enlace a la página de precios -->
            <li><a href="admin/contacto/index.php">Contacto</a></li> <!-- Enlace a la página de contacto -->
            <li><a href="logout.php">Cerrar sesión</a></li> <!-- Enlace para cerrar sesión -->
        </ul>
    </nav>
</header>

<main class="main-content">
    <h1>Bienvenido al Panel de Administración, <?php echo $_SESSION['username']; ?></h1> <!-- Muestra el nombre del usuario -->
    <p>En este panel puedes gestionar las entradas del blog y otros contenidos.</p> <!-- Descripción general del panel -->
    <a href="logout.php">Cerrar sesión</a> <!-- Enlace para cerrar sesión -->
</main>

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p> <!-- Pie de página con derechos reservados -->
</footer>
```

## 001-darkorange\index.php

```php
<?php

/**
 * Inicia una sesión de usuario y verifica la autenticación.
 *
 * Este script comprueba si existe una sesión de usuario activa.
 * Si el usuario ya ha iniciado sesión, se redirige al panel de control (dashboard).
 * De lo contrario, se redirige a la página de inicio de sesión.
 */

// Inicia una sesión de usuario
session_start();

// Verifica si el usuario está autenticado
if (isset($_SESSION['user_id'])) {
    /**
     * Si la variable de sesión 'user_id' está definida,
     * significa que el usuario ha iniciado sesión previamente.
     *
     * Redirige al usuario al panel de control (dashboard.php).
     */
    header("Location: dashboard.php");
    exit();
} else {
    /**
     * Si la variable de sesión 'user_id' no está definida,
     * significa que el usuario aún no ha iniciado sesión.
     *
     * Redirige al usuario a la página de inicio de sesión (login.php).
     */
    header("Location: login.php");
    exit();
}

```

## 001-darkorange\login.php

```php
<?php

/**
 * Login de administrador.

 * Este script maneja el proceso de inicio de sesión para administradores.
 * Recibe las credenciales de usuario y contraseña enviadas por el formulario,
 * verifica su validez en la base de datos y, si son correctas,
 * inicia una sesión de usuario y redirige al panel de control.

 * @author [Luis Rodriguez]
 * @version 1.0
 * @since 2023-11-20
 */
session_start();
include 'backend/config/db_connect.php';  // Incluir la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Realizar la consulta para obtener el usuario
    $sql = "SELECT * FROM usuarios_admin WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);  // Asociar el valor del username
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verificar si la contraseña es correcta (sin cifrado por ahora, ya que es 'admin')
        if ($password === $user['password']) {
            // Si las credenciales son correctas, guardar en sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");  // Redirigir al dashboard
            exit();
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
}
?>

<!-- Incluir el archivo de estilo para el login -->

<head>
    <link rel="stylesheet" href="admin/css/login.css"> <!-- Incluir los estilos del login -->
</head>

<!-- Formulario de login -->
<form method="POST" action="login.php">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Iniciar sesión</button>
</form>

<?php if (isset($error)) {
    echo "<p>$error</p>";
} ?>
```

## 001-darkorange\logout.php

```php
<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();

```

## 001-darkorange\admin\blog\create.php

```php
<?php

/**
 * Crea una nueva entrada en el blog y la inserta en la base de datos.
 *
 * Este archivo maneja la creación de una nueva entrada de blog a través de un formulario.
 * El formulario recopila el título y el contenido de la entrada, los cuales se insertan en
 * la tabla `blog_posts` de la base de datos. Si la inserción es exitosa, se muestra un
 * mensaje de éxito, de lo contrario, se muestra un mensaje de error.
 *
 * La operación se realiza con seguridad utilizando sentencias preparadas para evitar
 * inyecciones SQL.
 *
 * @param string $title   Título de la entrada del blog.
 * @param string $content Contenido de la entrada del blog.
 *
 * @return void
 */

// Inicia la sesión para asegurar que se pueda verificar si el usuario está autenticado.
session_start();

// Incluir el archivo de conexión a la base de datos.
include '../config/db_connect.php';

// Verifica si el formulario ha sido enviado (cuando el método de la solicitud es POST).
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe el título y el contenido del formulario.
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Prepara la consulta SQL para insertar la nueva entrada en la base de datos.
    $sql = "INSERT INTO blog_posts (title, content) VALUES (?, ?)";

    // Prepara la consulta utilizando parámetros seguros para evitar SQL injection.
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $title, $content);  // Asocia los parámetros de entrada con las variables $title y $content.

    // Ejecuta la consulta SQL. Si la ejecución es exitosa, muestra un mensaje de éxito.
    if ($stmt->execute()) {
        // Mensaje si la entrada de blog se ha creado correctamente.
        $message = "Entrada de blog creada exitosamente.";
    } else {
        // Mensaje si hubo un error al crear la entrada en la base de datos.
        $message = "Error al crear la entrada de blog.";
    }
}
?>

<!-- Formulario para crear una nueva entrada de blog -->
<form method="POST" action="create.php">
    <label for="title">Título:</label>
    <!-- Campo de entrada para el título del blog -->
    <input type="text" id="title" name="title" required>

    <label for="content">Contenido:</label>
    <!-- Área de texto para ingresar el contenido del blog -->
    <textarea id="content" name="content" required></textarea>

    <!-- Botón para enviar el formulario y crear la entrada de blog -->
    <button type="submit">Crear Entrada de Blog</button>
</form>

<?php
// Si hay un mensaje (es decir, si se ha creado o fallado la entrada), lo mostramos al usuario.
if (isset($message)) {
    echo "<p>$message</p>";
}
?>
```

## 001-darkorange\admin\blog\delete.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM blog_posts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        $message = "Entrada de blog eliminada exitosamente.";
    } else {
        $message = "Error al eliminar la entrada de blog.";
    }
}
?>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>

```

## 001-darkorange\admin\blog\index.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}
?>

<link rel="stylesheet" href="../css/header.css"> <!-- Incluir los estilos del panel de administración -->
<link rel="stylesheet" href="../css/style.css"> <!-- Incluir los estilos del panel de administración -->
<header>
    <nav>
        <ul>
            <li><a href="../../dashboard.php">Inicio</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Gestión del Blog</h2>
    <a href="create.php">Crear Nueva Entrada</a> <!-- Enlace para crear una nueva entrada -->
    <br><br>
    <a href="read.php">Ver Entradas Existentes</a> <!-- Enlace para leer las entradas existentes -->
</main>

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>
```

## 001-darkorange\admin\blog\read.php

```php
<?php
session_start();
include '../config/db_connect.php';

$sql = "SELECT * FROM blog_posts";
$result = $conn->query($sql);

echo "<h2>Entradas de Blog</h2>";
echo "<table>";
echo "<tr><th>ID</th><th>Título</th><th>Acciones</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td><a href='update.php?id=" . $row['id'] . "'>Editar</a> | <a href='delete.php?id=" . $row['id'] . "'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";

```

## 001-darkorange\admin\blog\update.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM blog_posts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $post = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $update_sql = "UPDATE blog_posts SET title = ?, content = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('ssi', $title, $content, $id);

        if ($update_stmt->execute()) {
            $message = "Entrada de blog actualizada exitosamente.";
        } else {
            $message = "Error al actualizar la entrada de blog.";
        }
    }
}
?>

<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <label for="title">Título:</label>
    <input type="text" id="title" name="title" value="<?php echo $post['title']; ?>" required>
    <label for="content">Contenido:</label>
    <textarea id="content" name="content" required><?php echo $post['content']; ?></textarea>
    <button type="submit">Actualizar Entrada de Blog</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\config\db_connect.php

```php
<?php
$servername = "localhost";  // O el servidor adecuado si no es localhost
$username = "taronjaboxvalencia";         // Tu nombre de usuario para la base de datos
$password = "taronjaboxvalencia";             // La contraseña de la base de datos (vacío si usas MAMP o XAMPP)
$dbname = "taronjaboxvalencia";     // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

```

## 001-darkorange\admin\contacto\delete.php

```php
<?php
session_start();
include '../../backend/config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el mensaje de contacto
    $sql = "DELETE FROM contacto WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        $message = "Mensaje eliminado exitosamente.";
    } else {
        $message = "Error al eliminar el mensaje.";
    }
}
?>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>

```

## 001-darkorange\admin\contacto\index.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}
?>

<link rel="stylesheet" href="../css/header.css"> <!-- Incluir los estilos del panel de administración -->
<link rel="stylesheet" href="../css/style.css"> <!-- Incluir los estilos generales -->

<header>
    <nav>
        <ul>
            <li><a href="../../dashboard.php">Inicio</a></li>
            <li><a href="read.php">Ver Mensajes</a></li> <!-- Enlace para ver los mensajes -->
        </ul>
    </nav>
</header>

<main>
    <h2>Gestión de Mensajes de Contacto</h2>
    <a href="read.php">Ver Mensajes Existentes</a>
</main>

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>
```

## 001-darkorange\admin\contacto\read.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}

include '../../backend/config/db_connect.php';  // Conexión a la base de datos

// Obtener todos los mensajes de contacto
$sql = "SELECT * FROM contacto";
$result = $conn->query($sql);

echo "<h2>Mensajes de Contacto</h2>";
echo "<table>";
echo "<tr><th>Nombre</th><th>Correo Electrónico</th><th>Mensaje</th><th>Fecha</th><th>Acciones</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['mensaje'] . "</td>";
    echo "<td>" . $row['fecha_envio'] . "</td>";
    echo "<td><a href='delete.php?id=" . $row['id'] . "'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";

```

## 001-darkorange\admin\crud\create.php

```php
<?php

/**
 * Crear un nuevo usuario en la base de datos.
 * 
 * Este script maneja la creación de un nuevo usuario administrado en la base de datos. 
 * Cuando el formulario se envía, se recoge el nombre de usuario y la contraseña,
 * y luego se insertan en la tabla `usuarios_admin` de la base de datos.
 * Si la creación es exitosa, se muestra un mensaje de éxito. Si ocurre un error, 
 * se muestra un mensaje de error.
 *
 * @param string $username Nombre del nuevo usuario.
 * @param string $password Contraseña del nuevo usuario.
 * 
 * @return string Mensaje de éxito o error según el resultado de la operación.
 */
session_start();
include '../config/db_connect.php'; // Conexión a la base de datos

// Verificar si el formulario fue enviado con el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Preparar la consulta SQL para insertar el nuevo usuario
    $sql = "INSERT INTO usuarios_admin (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql); // Preparar la consulta
    $stmt->bind_param('ss', $username, $password); // Vincular los parámetros a la consulta SQL

    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        $message = "Usuario creado exitosamente."; // Si el usuario fue creado con éxito
    } else {
        $message = "Error al crear el usuario."; // Si ocurrió un error
    }
}
?>

<!-- Formulario para crear un nuevo usuario -->
<form method="POST" action="create.php">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Crear Usuario</button>
</form>

<?php
// Mostrar el mensaje de éxito o error después de la ejecución del formulario
if (isset($message)) {
    echo "<p>$message</p>";
}
?>
```

## 001-darkorange\admin\crud\delete.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios_admin WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        $message = "Usuario eliminado exitosamente.";
    } else {
        $message = "Error al eliminar el usuario.";
    }
}
?>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>

```

## 001-darkorange\admin\crud\read.php

```php
<?php
session_start();
include '../config/db_connect.php';

$sql = "SELECT * FROM usuarios_admin";
$result = $conn->query($sql);

echo "<h2>Lista de Usuarios</h2>";
echo "<table>";
echo "<tr><th>ID</th><th>Username</th><th>Acciones</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td><a href='update.php?id=" . $row['id'] . "'>Editar</a> | <a href='delete.php?id=" . $row['id'] . "'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";

```

## 001-darkorange\admin\crud\update.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios_admin WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $update_sql = "UPDATE usuarios_admin SET username = ?, password = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('ssi', $username, $password, $id);

        if ($update_stmt->execute()) {
            $message = "Usuario actualizado exitosamente.";
        } else {
            $message = "Error al actualizar el usuario.";
        }
    }
}
?>

<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" value="<?php echo $user['password']; ?>" required>
    <button type="submit">Actualizar Usuario</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\css\blog.css

```css
/* Estilos para el panel de administración */

/* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilos globales */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    color: #333;
}

/* Encabezado del panel de administración */
header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

header nav ul {
    list-style: none;
    padding: 0;
}

header nav ul li {
    display: inline-block;
    margin-right: 20px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
}

/* Contenedor principal del panel */
main {
    padding: 20px;
    background-color: #fff;
    margin: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Estilos de formularios */
input[type="text"], input[type="password"], textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Tabla para mostrar entradas de blog */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

table th {
    background-color: #f4f4f4;
}

/* Pie de página */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

```

## 001-darkorange\admin\css\contacto.css

```css
/* Estilos específicos para la sección de contacto */
form {
    margin: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

label {
    font-weight: bold;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
}

button:hover {
    background-color: #45a049;
}

```

## 001-darkorange\admin\css\dashboard.css

```css
/* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilos globales */
body {
    font-family: 'Arial', sans-serif; /* Usamos una fuente limpia y moderna */
    background-color: #f4f4f4; /* Fondo claro para el panel */
    color: #333; /* Color de texto oscuro para mayor contraste */
}

/* Contenedor principal */
.main-content {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff; /* Fondo blanco para las secciones */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave para dar profundidad */
}

/* Estilo para el encabezado */
header {
    background-color: #ff7f32; /* Color darkorange */
    padding: 10px 0;
}

header nav ul {
    display: flex;
    justify-content: center;
    list-style: none;
}

header nav ul li {
    margin: 0 15px;
}

header nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    transition: color 0.3s ease;
}

header nav ul li a:hover {
    color: #333; /* Color oscuro al pasar el mouse por encima */
}

/* Estilo para el contenido principal */
main h1 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 10px;
}

main p {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 20px;
}

main a {
    color: #ff7f32; /* Color darkorange */
    font-weight: bold;
    text-decoration: none;
}

main a:hover {
    color: #333;
}

/* Estilo del pie de página */
footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
    font-size: 14px;
    position: absolute;
    width: 100%;
    bottom: 0;
}

/* Estilos adicionales */
ul {
    list-style-type: none;
}

li {
    margin: 10px 0;
}

li a {
    font-size: 18px;
    color: #333;
    text-decoration: none;
}

li a:hover {
    color: #ff7f32; /* Color darkorange al pasar el mouse */
}

/* Diseño responsivo */
@media (max-width: 768px) {
    header nav ul {
        flex-direction: column;
    }

    header nav ul li {
        margin: 10px 0;
    }

    .main-content {
        padding: 10px;
    }
}

```

## 001-darkorange\admin\css\header.css

```css
/* Estilos para el encabezado del panel de administración */

header {
    background-color: #333;
    color: white;
    padding: 15px;
    text-align: center;
}

header nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

header nav ul li {
    display: inline-block;
    margin-right: 20px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
}

header nav ul li a:hover {
    background-color: #575757;
}

```

## 001-darkorange\admin\css\login.css

```css
/* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilos globales */
body {
    font-family: 'Arial', sans-serif; /* Fuente limpia y moderna */
    background-color: #f4f4f4; /* Fondo claro */
    color: #333; /* Texto oscuro para el contraste */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Centrar verticalmente */
    margin: 0;
}

/* Contenedor principal del formulario */
.login-container {
    width: 100%;
    max-width: 400px;
    background-color: #fff; /* Fondo blanco para el formulario */
    border-radius: 8px;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
    text-align: center;
}

/* Títulos del formulario */
h1 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
}

/* Estilo para las etiquetas del formulario */
label {
    display: block;
    font-size: 1rem;
    margin-bottom: 8px;
    color: #333;
}

/* Campos de entrada */
input[type="text"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

/* Botón de submit */
button {
    width: 100%;
    padding: 12px;
    background-color: #ff7f32; /* Color darkorange */
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #e66624; /* Un tono más oscuro de darkorange */
}

/* Mensajes de error */
p {
    color: red;
    font-size: 0.9rem;
    margin-top: 10px;
}

/* Enlaces */
a {
    color: #ff7f32; /* Color darkorange */
    text-decoration: none;
    font-size: 1rem;
}

a:hover {
    text-decoration: underline;
}

/* Diseño responsivo */
@media (max-width: 768px) {
    .login-container {
        padding: 20px;
        width: 90%;
    }
}

```

## 001-darkorange\admin\css\style.css

```css
/* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilos globales */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    color: #333;
}

/* Contenedor principal del panel */
main {
    padding: 20px;
    background-color: #fff;
    margin: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Estilos de formularios */
input[type="text"], input[type="password"], textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Tabla para mostrar entradas de blog */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

table th {
    background-color: #f4f4f4;
}

/* Pie de página */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

```

## 001-darkorange\admin\fisioterapia\create.php

```php
<?php
session_start();
include '../config/db_connect.php';  // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $costo = $_POST['costo'];

    // Insertar un nuevo servicio de fisioterapia en la base de datos
    $sql = "INSERT INTO fisioterapia (nombre, descripcion, costo) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssd', $nombre, $descripcion, $costo);

    if ($stmt->execute()) {
        $message = "Servicio de fisioterapia creado exitosamente.";
    } else {
        $message = "Error al crear el servicio de fisioterapia.";
    }
}
?>

<!-- Formulario para crear un nuevo servicio de fisioterapia -->
<form method="POST" action="create.php">
    <label for="nombre">Nombre del Servicio:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea>

    <label for="costo">Costo:</label>
    <input type="number" step="0.01" id="costo" name="costo" required>

    <button type="submit">Crear Servicio de Fisioterapia</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\fisioterapia\delete.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el servicio de fisioterapia
    $sql = "DELETE FROM fisioterapia WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        $message = "Servicio de fisioterapia eliminado exitosamente.";
    } else {
        $message = "Error al eliminar el servicio de fisioterapia.";
    }
}
?>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>

```

## 001-darkorange\admin\fisioterapia\index.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}
?>

<link rel="stylesheet" href="../css/header.css"> <!-- Incluir los estilos del panel de administración -->
<link rel="stylesheet" href="../css/style.css"> <!-- Incluir los estilos generales -->

<header>
    <nav>
        <ul>
            <li><a href="../../dashboard.php">Inicio</a></li>
            <li><a href="create.php">Crear Servicio</a></li>
            <li><a href="read.php">Ver Servicios</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Gestión de Servicios de Fisioterapia</h2>
    <a href="create.php">Crear Nuevo Servicio</a><br><br>
    <a href="read.php">Ver Servicios Existentes</a>
</main>

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>
```

## 001-darkorange\admin\fisioterapia\read.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}

include '../config/db_connect.php';  // Conexión a la base de datos

// Obtener todos los servicios de fisioterapia
$sql = "SELECT * FROM fisioterapia";
$result = $conn->query($sql);

echo "<h2>Servicios de Fisioterapia</h2>";
echo "<table>";
echo "<tr><th>Nombre</th><th>Descripción</th><th>Costo</th><th>Acciones</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['descripcion'] . "</td>";
    echo "<td>" . $row['costo'] . "</td>";
    echo "<td><a href='update.php?id=" . $row['id'] . "'>Editar</a> | <a href='delete.php?id=" . $row['id'] . "'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";

```

## 001-darkorange\admin\fisioterapia\update.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del servicio de fisioterapia
    $sql = "SELECT * FROM fisioterapia WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $service = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $costo = $_POST['costo'];

        // Actualizar los datos del servicio de fisioterapia
        $update_sql = "UPDATE fisioterapia SET nombre = ?, descripcion = ?, costo = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('ssdi', $nombre, $descripcion, $costo, $id);

        if ($update_stmt->execute()) {
            $message = "Servicio de fisioterapia actualizado exitosamente.";
        } else {
            $message = "Error al actualizar el servicio de fisioterapia.";
        }
    }
}
?>

<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <label for="nombre">Nombre del Servicio:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $service['nombre']; ?>" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required><?php echo $service['descripcion']; ?></textarea>

    <label for="costo">Costo:</label>
    <input type="number" step="0.01" id="costo" name="costo" value="<?php echo $service['costo']; ?>" required>

    <button type="submit">Actualizar Servicio</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\nuestro_equipo\create.php

```php
<?php
session_start();
include '../config/db_connect.php';  // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $puesto = $_POST['puesto'];
    $descripcion = $_POST['descripcion'];

    // Insertar un nuevo miembro del equipo en la base de datos
    $sql = "INSERT INTO nuestro_equipo (nombre, puesto, descripcion) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $nombre, $puesto, $descripcion);

    if ($stmt->execute()) {
        $message = "Miembro del equipo creado exitosamente.";
    } else {
        $message = "Error al crear el miembro del equipo.";
    }
}
?>

<!-- Formulario para crear un nuevo miembro del equipo -->
<form method="POST" action="create.php">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="puesto">Puesto:</label>
    <input type="text" id="puesto" name="puesto" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea>

    <button type="submit">Crear Miembro del Equipo</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\nuestro_equipo\delete.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar al miembro del equipo
    $sql = "DELETE FROM nuestro_equipo WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        $message = "Miembro del equipo eliminado exitosamente.";
    } else {
        $message = "Error al eliminar el miembro del equipo.";
    }
}
?>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>

```

## 001-darkorange\admin\nuestro_equipo\index.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}
?>

<link rel="stylesheet" href="../css/header.css"> <!-- Incluir los estilos del panel de administración -->
<link rel="stylesheet" href="../css/style.css"> <!-- Incluir los estilos generales -->

<header>
    <nav>
        <ul>
            <li><a href="../../dashboard.php">Inicio</a></li>
            <li><a href="create.php">Crear Miembro</a></li>
            <li><a href="read.php">Ver Miembros</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Gestión de "Nuestro Equipo"</h2>
    <a href="create.php">Crear Nuevo Miembro</a><br><br>
    <a href="read.php">Ver Miembros Existentes</a>
</main>

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>
```

## 001-darkorange\admin\nuestro_equipo\read.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}

include '../config/db_connect.php';  // Conexión a la base de datos

// Obtener todos los miembros del equipo
$sql = "SELECT * FROM nuestro_equipo";
$result = $conn->query($sql);

echo "<h2>Miembros del Equipo</h2>";
echo "<table>";
echo "<tr><th>Nombre</th><th>Puesto</th><th>Descripción</th><th>Acciones</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['puesto'] . "</td>";
    echo "<td>" . $row['descripcion'] . "</td>";
    echo "<td><a href='update.php?id=" . $row['id'] . "'>Editar</a> | <a href='delete.php?id=" . $row['id'] . "'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";

```

## 001-darkorange\admin\nuestro_equipo\update.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del miembro del equipo
    $sql = "SELECT * FROM nuestro_equipo WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $member = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $puesto = $_POST['puesto'];
        $descripcion = $_POST['descripcion'];

        // Actualizar los datos del miembro del equipo
        $update_sql = "UPDATE nuestro_equipo SET nombre = ?, puesto = ?, descripcion = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('sssi', $nombre, $puesto, $descripcion, $id);

        if ($update_stmt->execute()) {
            $message = "Miembro del equipo actualizado exitosamente.";
        } else {
            $message = "Error al actualizar el miembro del equipo.";
        }
    }
}
?>

<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $member['nombre']; ?>" required>

    <label for="puesto">Puesto:</label>
    <input type="text" id="puesto" name="puesto" value="<?php echo $member['puesto']; ?>" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required><?php echo $member['descripcion']; ?></textarea>

    <button type="submit">Actualizar Miembro del Equipo</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\precios\create.php

```php
<?php
session_start();
include '../config/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insertar la nueva entrada en la base de datos
    $sql = "INSERT INTO blog_posts (title, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $title, $content);

    if ($stmt->execute()) {
        $message = "Entrada de blog creada exitosamente.";
    } else {
        $message = "Error al crear la entrada de blog.";
    }
}
?>

<form method="POST" action="create.php">
    <label for="title">Título:</label>
    <input type="text" id="title" name="title" required>
    <label for="content">Contenido:</label>
    <textarea id="content" name="content" required></textarea>
    <button type="submit">Crear Entrada de Blog</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\precios\delete.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM blog_posts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        $message = "Entrada de blog eliminada exitosamente.";
    } else {
        $message = "Error al eliminar la entrada de blog.";
    }
}
?>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>

```

## 001-darkorange\admin\precios\index.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}
?>

<link rel="stylesheet" href="../css/header.css"> <!-- Incluir los estilos del panel de administración -->
<link rel="stylesheet" href="../css/style.css"> <!-- Incluir los estilos del panel de administración -->
<header>
    <nav>
        <ul>
            <li><a href="../../dashboard.php">Inicio</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Gestión del Blog</h2>
    <a href="create.php">Crear Nueva Entrada</a> <!-- Enlace para crear una nueva entrada -->
    <br><br>
    <a href="read.php">Ver Entradas Existentes</a> <!-- Enlace para leer las entradas existentes -->
</main>

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>
```

## 001-darkorange\admin\precios\read.php

```php
<?php
session_start();
include '../config/db_connect.php';

$sql = "SELECT * FROM blog_posts";
$result = $conn->query($sql);

echo "<h2>Entradas de Blog</h2>";
echo "<table>";
echo "<tr><th>ID</th><th>Título</th><th>Acciones</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td><a href='update.php?id=" . $row['id'] . "'>Editar</a> | <a href='delete.php?id=" . $row['id'] . "'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";

```

## 001-darkorange\admin\precios\update.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM blog_posts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $post = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $update_sql = "UPDATE blog_posts SET title = ?, content = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('ssi', $title, $content, $id);

        if ($update_stmt->execute()) {
            $message = "Entrada de blog actualizada exitosamente.";
        } else {
            $message = "Error al actualizar la entrada de blog.";
        }
    }
}
?>

<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <label for="title">Título:</label>
    <input type="text" id="title" name="title" value="<?php echo $post['title']; ?>" required>
    <label for="content">Contenido:</label>
    <textarea id="content" name="content" required><?php echo $post['content']; ?></textarea>
    <button type="submit">Actualizar Entrada de Blog</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\quienes_somos\create.php

```php
<?php
session_start();
include '../config/db_connect.php';  // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insertar el nuevo contenido de "Quiénes Somos" en la base de datos
    $sql = "INSERT INTO quienes_somos (title, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $title, $content);

    if ($stmt->execute()) {
        $message = "Sección 'Quiénes Somos' creada exitosamente.";
    } else {
        $message = "Error al crear la sección 'Quiénes Somos'.";
    }
}
?>

<!-- Formulario para crear la sección "Quiénes Somos" -->
<form method="POST" action="create.php">
    <label for="title">Título:</label>
    <input type="text" id="title" name="title" required>

    <label for="content">Contenido:</label>
    <textarea id="content" name="content" required></textarea>

    <button type="submit">Crear Sección</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\quienes_somos\delete.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar la sección "Quiénes Somos"
    $sql = "DELETE FROM quienes_somos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        $message = "Sección 'Quiénes Somos' eliminada exitosamente.";
    } else {
        $message = "Error al eliminar la sección 'Quiénes Somos'.";
    }
}
?>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>

```

## 001-darkorange\admin\quienes_somos\index.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}
?>

<link rel="stylesheet" href="../css/header.css"> <!-- Incluir los estilos del panel de administración -->
<link rel="stylesheet" href="../css/style.css"> <!-- Incluir los estilos generales -->

<header>
    <nav>
        <ul>
            <li><a href="../../dashboard.php">Inicio</a></li>
            <li><a href="create.php">Crear Sección</a></li>
            <li><a href="read.php">Ver Sección</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Gestión de la sección "Quiénes Somos"</h2>
    <a href="create.php">Crear Nueva Sección</a><br><br>
    <a href="read.php">Ver Sección Existente</a>
</main>

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>
```

## 001-darkorange\admin\quienes_somos\read.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}

include '../config/db_connect.php';  // Conexión a la base de datos

// Obtener el contenido de "Quiénes Somos"
$sql = "SELECT * FROM quienes_somos LIMIT 1";
$result = $conn->query($sql);
$who_we_are = $result->fetch_assoc();

echo "<h2>" . $who_we_are['title'] . "</h2>";
echo "<p>" . $who_we_are['content'] . "</p>";

```

## 001-darkorange\admin\quienes_somos\update.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos de la sección "Quiénes Somos"
    $sql = "SELECT * FROM quienes_somos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $who_we_are = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Actualizar la sección "Quiénes Somos"
        $update_sql = "UPDATE quienes_somos SET title = ?, content = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('ssi', $title, $content, $id);

        if ($update_stmt->execute()) {
            $message = "Sección 'Quiénes Somos' actualizada exitosamente.";
        } else {
            $message = "Error al actualizar la sección 'Quiénes Somos'.";
        }
    }
}
?>

<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <label for="title">Título:</label>
    <input type="text" id="title" name="title" value="<?php echo $who_we_are['title']; ?>" required>

    <label for="content">Contenido:</label>
    <textarea id="content" name="content" required><?php echo $who_we_are['content']; ?></textarea>

    <button type="submit">Actualizar Sección</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\workouts\create.php

```php
<?php
session_start();
include '../config/db_connect.php';  // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];

    // Insertar el nuevo entrenamiento en la base de datos
    $sql = "INSERT INTO workouts (name, description, duration) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $name, $description, $duration);

    if ($stmt->execute()) {
        $message = "Entrenamiento creado exitosamente.";
    } else {
        $message = "Error al crear el entrenamiento.";
    }
}
?>

<!-- Formulario para crear un nuevo entrenamiento -->
<form method="POST" action="create.php">
    <label for="name">Nombre del Entrenamiento:</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Descripción:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="duration">Duración (en minutos):</label>
    <input type="number" id="duration" name="duration" required>

    <button type="submit">Crear Entrenamiento</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\admin\workouts\delete.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el entrenamiento
    $sql = "DELETE FROM workouts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        $message = "Entrenamiento eliminado exitosamente.";
    } else {
        $message = "Error al eliminar el entrenamiento.";
    }
}
?>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>

```

## 001-darkorange\admin\workouts\index.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}
?>

<link rel="stylesheet" href="../css/header.css"> <!-- Incluir los estilos del panel de administración -->
<link rel="stylesheet" href="../css/style.css"> <!-- Incluir los estilos del panel de administración -->

<header>
    <nav>
        <ul>
            <li><a href="../../dashboard.php">Inicio</a></li>
            <li><a href="create.php">Crear Entrenamiento</a></li> <!-- Enlace para crear nuevo entrenamiento -->
            <li><a href="read.php">Ver Entrenamientos</a></li> <!-- Enlace para ver entrenamientos -->
        </ul>
    </nav>
</header>

<main>
    <h2>Gestión de Entrenamientos</h2>
    <p>Desde aquí podrás gestionar todos los entrenamientos:</p>
    <ul>
        <li><a href="create.php">Crear Nuevo Entrenamiento</a></li> <!-- Enlace para crear un nuevo entrenamiento -->
        <li><a href="read.php">Ver Entrenamientos Existentes</a></li> <!-- Enlace para leer los entrenamientos existentes -->
    </ul>
</main>

<footer>
    <p>&copy; 2025 TaronjaBox. Todos los derechos reservados.</p>
</footer>
```

## 001-darkorange\admin\workouts\read.php

```php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Si no está autenticado, redirigir al login
    exit();
}

include '../config/db_connect.php';  // Conexión a la base de datos

// Obtener todos los entrenamientos
$sql = "SELECT * FROM workouts";
$result = $conn->query($sql);

echo "<h2>Entrenamientos</h2>";
echo "<table>";
echo "<tr><th>Nombre</th><th>Descripción</th><th>Duración</th><th>Acciones</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['duration'] . " minutos</td>";
    echo "<td><a href='update.php?id=" . $row['id'] . "'>Editar</a> | <a href='delete.php?id=" . $row['id'] . "'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";

```

## 001-darkorange\admin\workouts\update.php

```php
<?php
session_start();
include '../config/db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del entrenamiento
    $sql = "SELECT * FROM workouts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $workout = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $duration = $_POST['duration'];

        // Actualizar los datos del entrenamiento
        $update_sql = "UPDATE workouts SET name = ?, description = ?, duration = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('ssii', $name, $description, $duration, $id);

        if ($update_stmt->execute()) {
            $message = "Entrenamiento actualizado exitosamente.";
        } else {
            $message = "Error al actualizar el entrenamiento.";
        }
    }
}
?>

<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <label for="name">Nombre del Entrenamiento:</label>
    <input type="text" id="name" name="name" value="<?php echo $workout['name']; ?>" required>

    <label for="description">Descripción:</label>
    <textarea id="description" name="description" required><?php echo $workout['description']; ?></textarea>

    <label for="duration">Duración (en minutos):</label>
    <input type="number" id="duration" name="duration" value="<?php echo $workout['duration']; ?>" required>

    <button type="submit">Actualizar Entrenamiento</button>
</form>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
```

## 001-darkorange\backend\backend.php

```php
<?php
include 'config/db_connect.php'; // Incluir la conexión a la base de datos

// Verificamos que la solicitud sea de tipo GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Consulta SQL para obtener todas las entradas del blog
    $sql = "SELECT * FROM blog_posts";
    $result = $conn->query($sql);

    // Verificamos si se encontraron entradas
    if ($result->num_rows > 0) {
        // Creamos un array para almacenar las entradas
        $posts = [];
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }

        // Devolvemos los datos como JSON
        echo json_encode($posts);
    } else {
        // Si no hay entradas en la base de datos
        echo json_encode(["message" => "No posts found"]);
    }
} else {
    echo json_encode(["message" => "Invalid request"]);
}

```

## 001-darkorange\backend\script.js

```javascript
// Hacemos la petición fetch al archivo backend.php
fetch('backend/backend.php')
    .then(response => response.json())  // Procesamos la respuesta como JSON
    .then(data => {
        console.log('Datos recibidos:', data);  // Mostramos los datos en la consola
    })
    .catch(error => {
        console.error('Error:', error);  // En caso de error
    });

```

## 001-darkorange\backend\config\db_connect.php

```php
<?php
$servername = "localhost";  // El servidor donde se encuentra la base de datos
$username = "taronjaboxvalencia";         // El usuario de la base de datos (usualmente 'root' en local)
$password = "taronjaboxvalencia";             // Contraseña de la base de datos (vacío en local por defecto)
$dbname = "taronjaboxvalencia";     // El nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

```

## 001-darkorange\database\taronjaboxvalencia (1).sql

```
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 23-01-2025 a las 13:36:20
-- Versión del servidor: 5.7.44
-- Versión de PHP: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taronjaboxvalencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'nuevo bloj', 'muchas cosas', '2025-01-20 14:34:08'),
(3, 'gggffg', 'gffggffg', '2025-01-22 00:27:51'),
(4, 'fdf', 'fdsfds', '2025-01-22 00:44:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `mensaje`, `fecha_envio`) VALUES
(1, 'fds', 'taronjabox@gmail.com', 'fsdfds', '2025-01-20 15:57:22'),
(2, 'Luis Jahir Rodríguez Cedeño', 'taronjabox@gmail.com', 'fggggf', '2025-01-20 16:23:29'),
(3, 'Luis Jahir Rodríguez Cedeño', 'taronjabox@gmail.com', '  cv dfdfffg', '2025-01-20 16:25:53'),
(4, 'Luis Jahir Rodríguez Cedeño', 'taronjabox@gmail.com', '  cv dfdfffg', '2025-01-20 16:26:34'),
(5, 'Luis Jahir Rodríguez Cedeño', 'taronjabox@gmail.com', '  sasacv dfdfffg', '2025-01-20 16:26:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisioterapia`
--

CREATE TABLE `fisioterapia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `costo` decimal(10,2) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fisioterapia`
--

INSERT INTO `fisioterapia` (`id`, `nombre`, `descripcion`, `costo`, `fecha_creacion`) VALUES
(1, 'fisioterapiago', 'fodio', 50.00, '2025-01-20 15:44:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha_subida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `titulo`, `imagen`, `fecha_subida`) VALUES
(4, 'esto es una prueba sd', '1280369.png', '2025-01-18 19:43:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuestro_equipo`
--

CREATE TABLE `nuestro_equipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuestro_equipo`
--

INSERT INTO `nuestro_equipo` (`id`, `nombre`, `puesto`, `descripcion`, `fecha_creacion`) VALUES
(1, 'Juan Pérez', 'Entrenador Principal', 'Experto en entrenamientos funcionales con más de 10 años de experiencia en Crossfit.', '2025-01-20 15:39:55'),
(2, 'Ana López', 'Nutricionista', 'Especialista en nutrición deportiva, ayudando a los atletas a optimizar su rendimiento mediante una dieta adecuada.', '2025-01-20 15:39:55'),
(3, 'Carlos Sánchez', 'Entrenador de Cardio', 'Entrenador enfocado en mejorar la resistencia cardiovascular y la capacidad aeróbica.', '2025-01-20 15:39:55'),
(4, 'María García', 'Coordinadora de Clases', 'Responsable de la programación de las clases y del contacto con los miembros del gimnasio.', '2025-01-20 15:39:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienes_somos`
--

CREATE TABLE `quienes_somos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `quienes_somos`
--

INSERT INTO `quienes_somos` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'quienes somos', 'somos crossfitvalencia', '2025-01-20 15:36:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_admin`
--

CREATE TABLE `usuarios_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_admin`
--

INSERT INTO `usuarios_admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', '2025-01-19 00:42:27'),
(2, 'nuevo_usuario', 'contraseña123', '2025-01-19 01:00:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workouts`
--

CREATE TABLE `workouts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `workouts`
--

INSERT INTO `workouts` (`id`, `name`, `description`, `duration`, `created_at`) VALUES
(1, 'Entrenamiento de Fuerza', 'Entrenamiento para mejorar la fuerza general, incluye pesas y ejercicios funcionales.', 60, '2025-01-20 15:30:48'),
(2, 'Cardio Intensivo', 'Sesión de cardio de alta intensidad para mejorar resistencia y quemar calorías.', 45, '2025-01-20 15:30:48'),
(3, 'Flexibilidad y Estiramientos', 'Rutina enfocada en mejorar la flexibilidad y prevenir lesiones.', 30, '2025-01-20 15:30:48'),
(4, 'jiujitsu', 'jiujitsu brasileño', 60, '2025-01-20 15:33:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fisioterapia`
--
ALTER TABLE `fisioterapia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nuestro_equipo`
--
ALTER TABLE `nuestro_equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quienes_somos`
--
ALTER TABLE `quienes_somos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `workouts`
--
ALTER TABLE `workouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `fisioterapia`
--
ALTER TABLE `fisioterapia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nuestro_equipo`
--
ALTER TABLE `nuestro_equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `quienes_somos`
--
ALTER TABLE `quienes_somos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `workouts`
--
ALTER TABLE `workouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```

## 001-darkorange\util\generador.php

```php
<?php

// Función para recorrer las carpetas del proyecto y generar archivos .txt con los docstrings
function processFolder($source, $target)
{
    // Asegurarse de que la carpeta de destino exista
    if (!file_exists($target)) {
        mkdir($target, 0777, true);
    }

    // Obtener los elementos dentro de la carpeta fuente
    $items = scandir($source);

    foreach ($items as $item) {
        // Omitir las referencias a los directorios especiales '.' y '..'
        if ($item === '.' || $item === '..' || $item === '.DS_Store') {
            continue;
        }

        $sourcePath = $source . DIRECTORY_SEPARATOR . $item;
        $targetPath = $target . DIRECTORY_SEPARATOR . $item;

        if (is_dir($sourcePath)) {
            // Si es un directorio, crear una carpeta correspondiente en el destino
            mkdir($targetPath, 0777, true);

            // Llamar recursivamente para procesar subcarpetas
            processFolder($sourcePath, $targetPath);
        } else if (is_file($sourcePath)) {
            // Si es un archivo PHP, procesarlo para extraer el docstring
            if (pathinfo($item, PATHINFO_EXTENSION) === 'php') {
                // Crear el archivo .txt en la carpeta de destino correspondiente
                $fileNameWithoutExtension = pathinfo($item, PATHINFO_FILENAME);
                $fileFolderPath = $target . DIRECTORY_SEPARATOR . $fileNameWithoutExtension . '.txt'; // Crear el .txt dentro de la subcarpeta

                $docstringContent = extractDocstring($sourcePath);

                // Guardar el contenido del docstring en el archivo .txt
                file_put_contents($fileFolderPath, $docstringContent);
            }
        }
    }
}

// Función para extraer el docstring de los archivos PHP
function extractDocstring($filePath)
{
    $content = file_get_contents($filePath);
    $extension = pathinfo($filePath, PATHINFO_EXTENSION);

    switch ($extension) {
        case 'php':
            // Buscar los comentarios docstring que comienzan con /** o /*
            if (
                preg_match('/<\\?php\\s*\\/\\*\\*(.*?)\\*\\//s', $content, $matches) ||
                preg_match('/<\\?php\\s*\\/\\*(.*?)\\*\\//s', $content, $matches)
            ) {
                return trim($matches[1]);
            }
            break;

        default:
            return '';
    }

    return '';
}

// Usar la función para procesar la carpeta
$sourceFolder = '../admin'; // Ruta a tu carpeta de archivos PHP (ajústala según tu estructura)
$targetFolder = 'documentacion/docs/admin';  // Ruta de destino donde se almacenarán los archivos .txt

// Ejecutar la función de procesamiento
processFolder($sourceFolder, $targetFolder);

// Mensaje de confirmación
echo "Procesamiento completado con éxito!\n";

```

## 001-darkorange\util\index.php

```php
<!doctype html>
<html>

<head>
    <style>
        /* General styling */
        body {
            font-family: 'Georgia', serif;
            line-height: 1.5;
            color: #333;
        }

        h1,
        h2,
        h3 {
            text-align: center;
            color: #111;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 2rem;
            background-color: #fafafa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul.toc {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul.toc li {
            margin: 5px 0;
        }

        pre {
            font-family: 'Courier New', monospace;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Documentación del Proyecto: TaronjaBox</h1>

        <h2>Tabla de contenido</h2>
        <ul class="toc">
            <?php
            // Ruta a la carpeta 'docs'
            $baseDir = 'documentacion/docs';

            // Función recursiva para procesar las carpetas y mostrar los archivos .txt
            function processFolderForHtml($source)
            {
                $html = "";
                $items = scandir($source);
                foreach ($items as $item) {
                    if ($item === '.' || $item === '..') {
                        continue;
                    }

                    $sourcePath = $source . DIRECTORY_SEPARATOR . $item;
                    if (is_dir($sourcePath)) {
                        $html .= "<li><strong>📁 $item</strong><ul>";
                        $html .= processFolderForHtml($sourcePath);
                        $html .= "</ul></li>";
                    } else if (is_file($sourcePath) && pathinfo($item, PATHINFO_EXTENSION) === 'txt') {
                        $fileNameWithoutExtension = pathinfo($item, PATHINFO_FILENAME);
                        // Crear enlaces dinámicos a los archivos .txt
                        $fileUrl = 'documentacion/docs/' . $item;
                        $html .= "<li><a href='$fileUrl'>$fileNameWithoutExtension</a></li>";
                    }
                }
                return $html;
            }

            echo processFolderForHtml($baseDir);
            ?>
        </ul>

        <div class="page-break"></div>
        <h2>Contenido de la documentación</h2>
        <?php
        // Mostrar el contenido de los archivos .txt
        if (isset($_GET['file'])) {
            $file = $_GET['file'];
            $filePath = $baseDir . DIRECTORY_SEPARATOR . $file;

            if (file_exists($filePath)) {
                $content = htmlspecialchars(file_get_contents($filePath));
                echo "<pre>$content</pre>";  // Mostrar el contenido en formato preformateado
            } else {
                echo "<p>El archivo no existe.</p>";
            }
        }
        ?>
    </div>
</body>

</html>
```

## 001-darkorange\util\documentacion\docs\admin\dashboard.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\login.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\logout.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\blog\create.txt

```
* Crea una nueva entrada en el blog y la inserta en la base de datos.
 *
 * Este archivo maneja la creación de una nueva entrada de blog a través de un formulario.
 * El formulario recopila el título y el contenido de la entrada, los cuales se insertan en
 * la tabla `blog_posts` de la base de datos. Si la inserción es exitosa, se muestra un
 * mensaje de éxito, de lo contrario, se muestra un mensaje de error.
 *
 * La operación se realiza con seguridad utilizando sentencias preparadas para evitar
 * inyecciones SQL.
 *
 * @param string $title   Título de la entrada del blog.
 * @param string $content Contenido de la entrada del blog.
 *
 * @return void
```

## 001-darkorange\util\documentacion\docs\admin\blog\delete.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\blog\index.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\blog\read.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\blog\update.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\config\db_connect.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\contacto\delete.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\contacto\index.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\contacto\read.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\crud\create.txt

```
* Crear un nuevo usuario en la base de datos.
 * 
 * Este script maneja la creación de un nuevo usuario administrado en la base de datos. 
 * Cuando el formulario se envía, se recoge el nombre de usuario y la contraseña,
 * y luego se insertan en la tabla `usuarios_admin` de la base de datos.
 * Si la creación es exitosa, se muestra un mensaje de éxito. Si ocurre un error, 
 * se muestra un mensaje de error.
 *
 * @param string $username Nombre del nuevo usuario.
 * @param string $password Contraseña del nuevo usuario.
 * 
 * @return string Mensaje de éxito o error según el resultado de la operación.
```

## 001-darkorange\util\documentacion\docs\admin\crud\delete.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\crud\read.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\crud\update.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\fisioterapia\create.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\fisioterapia\delete.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\fisioterapia\index.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\fisioterapia\read.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\fisioterapia\update.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\nuestro_equipo\create.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\nuestro_equipo\delete.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\nuestro_equipo\index.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\nuestro_equipo\read.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\nuestro_equipo\update.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\precios\create.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\precios\delete.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\precios\index.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\precios\read.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\precios\update.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\quienes_somos\create.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\quienes_somos\delete.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\quienes_somos\index.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\quienes_somos\read.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\quienes_somos\update.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\workouts\create.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\workouts\delete.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\workouts\index.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\workouts\read.txt

```

```

## 001-darkorange\util\documentacion\docs\admin\workouts\update.txt

```

```

