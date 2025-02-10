# 🛠️ DarkOrange - Panel de Administración

## 📌 Descripción del Proyecto

**DarkOrange** es el **panel de administración** diseñado para gestionar el contenido de **TaronjaBoxValencia** de manera dinámica y eficiente.  

Permite a los administradores modificar información sin necesidad de editar código, facilitando la gestión de secciones como el **blog, equipo, fisioterapia, precios y más**.  

Además, **DarkOrange está diseñado para ser escalable**, lo que significa que **podría adaptarse a cualquier otro proyecto web** con ligeras modificaciones.

---

## 🏗️ Estructura del Proyecto

📂 **database/** → Contiene el archivo SQL con la estructura de la base de datos.  

📂 **admin/** → Carpeta principal del panel de administración.  
  - 📂 `config/` → Archivo de conexión a la base de datos.  
  - 📂 `css/` → Estilos CSS personalizados para la interfaz.  
  - 📂 `includes/` → Archivos reutilizables (`header.php`, `footer.php`).  
  - 📂 `crud/` → Módulo CRUD dinámico para la gestión de datos.  
  - 📂 `blog/` → Gestión de publicaciones del blog.  
  - 📂 `equipo/` → Gestión de entrenadores y staff del centro.  
  - 📂 `fisioterapia/` → Administración de los servicios de fisioterapia.  
  - 📂 `planes_suscripcion/` → Gestión de precios y planes.  
  - 📂 `quienes_somos/` → Edición de la sección "Sobre Nosotros".  

📂 **backend/** → Contiene la lógica del servidor y la conexión a la base de datos.  

📜 **log.txt** → Archivo de registro con cambios y actualizaciones del sistema.  

---

## 🔧 Tecnologías Utilizadas

✅ **Backend:** PHP puro.  
✅ **Frontend:** HTML, CSS, JavaScript.  
✅ **Base de Datos:** MySQL.  
✅ **Metodología:** CRUD global para todas las secciones.  
✅ **Entorno:** VPS en IONOS.  

---

## ⚙️ Funcionamiento del Proyecto

1️⃣ **Acceso de Administradores:**  
   - Los usuarios administradores pueden acceder con credenciales desde la página de login.  
   - La autenticación se gestiona con la tabla `usuarios_admin` en la base de datos.  

2️⃣ **Gestión de Contenido Dinámico:**  
   - Cada sección de **TaronjaBoxValencia** tiene un módulo en DarkOrange.  
   - Se puede **crear, editar y eliminar contenido** desde el panel.  
   - Los cambios se reflejan automáticamente en la web pública.  

3️⃣ **Módulo CRUD Dinámico:**  
   - El CRUD está diseñado para funcionar con **cualquier tabla de la base de datos**.  
   - Se basa en un identificador de tabla y un sistema de **generación automática de formularios**.  

---

## 📡 Integración con TaronjaBoxValencia

DarkOrange es el **panel de administración principal** de TaronjaBoxValencia y permite modificar:

- 🔹 **El Header y las secciones dinámicas** en la web pública.  
- 🔹 **Las publicaciones del blog.**  
- 🔹 **Los entrenadores y servicios de fisioterapia.**  
- 🔹 **Los planes de suscripción y tarifas.**  

**Al estar alojado en la misma VPS, todos los cambios se reflejan en TaronjaBoxValencia en tiempo real.**  

---

## 📜 Documentación del Proyecto

Si deseas revisar el código fuente o contribuir al desarrollo:

📌 **Repositorio del Proyecto DarkOrange:** [https://github.com/luisrocedev/darkorange](https://github.com/luisrocedev/darkorange)  
📌 **Repositorio del Proyecto Taronjaboxvalencia:** [[https://github.com/luisrocedev/taronjaboxvalencia](https://github.com/luisrocedev/taronjaboxvalencia)]

---

## 👨‍💻 Contacto

Si tienes preguntas o sugerencias, ¡contáctame en **LinkedIn** o revisa mi **GitHub**! 🚀
