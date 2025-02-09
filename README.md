# 🛠️ DarkOrange - Panel de Administración

## 📌 Descripción del Proyecto

DarkOrange es el **panel de administración** diseñado para gestionar el contenido de [TaronjaBoxValencia](https://github.com/luisrocedev/taronjabox). Su propósito es permitir a los administradores modificar las secciones visibles en la web sin necesidad de tocar el código.

Este panel está construido de manera **escalable y modular**, lo que permite adaptarlo fácilmente a otros proyectos con algunas modificaciones.

---

## 🏗️ Estructura del Proyecto

📂 **database/** → Contiene el archivo SQL con la estructura de la base de datos compartida con TaronjaBoxValencia.  

📂 **admin/** → Panel de administración con las diferentes secciones:  
  - 📂 `horario/` → Gestión de horarios.  
  - 📂 `fisioterapia/` → Administración de servicios de fisioterapia.  
  - 📂 `equipo/` → Información sobre entrenadores y staff.  
  - 📂 `quienes_somos/` → Información institucional.  
  - 📂 `contacto/` → Gestión de mensajes de contacto.  
  - 📂 `blog/` → Publicaciones del blog.  
  - 📂 `planes_suscripcion/` → Configuración de planes de suscripción.  

📂 **admin/util/** → Código auxiliar del panel de administración:  
  - `funciones.php` → Funciones generales del sistema.  
  - `logica.php` → Lógica central de procesamiento.  
  - `tabla_dinamica.php` → Generación automática de tablas y formularios.  

📂 **admin/css/** → Hojas de estilo personalizadas para el panel de administración.  

📂 **admin/config/** → Archivos de configuración:  
  - `db_connect.php` → Conexión con la base de datos.  
  - `test_db.php` → Pruebas de conexión.  

📂 **backend/** → Configuración del servidor y conexión con la base de datos.  

📜 **log.txt** → Archivo de logs del sistema.  

---

## 🔧 Tecnologías Utilizadas

✅ **Backend:** PHP puro (sin frameworks).  
✅ **Base de Datos:** MySQL (compartida con TaronjaBoxValencia).  
✅ **Estilos:** CSS personalizado.  
✅ **Despliegue:** Servidor VPS en IONOS.  

---

## ⚙️ Funcionalidades del Panel

DarkOrange permite a los administradores **gestionar y modificar** todas las secciones visibles en **TaronjaBoxValencia**:

- 🔹 **Editar, eliminar o agregar contenido** en cualquier sección.  
- 🔹 **Automatización de CRUDs** mediante la tabla dinámica (`tabla_dinamica.php`).  
- 🔹 **Gestión centralizada de datos** sin modificar el código manualmente.  

Actualmente, el sistema solo permite **un superusuario** con acceso completo al panel de administración.  

En futuras versiones, se podrá ampliar la funcionalidad para **crear nuevos módulos** directamente desde la interfaz de administración.  

---

## 📡 APIs Implementadas

DarkOrange utiliza **APIs internas** para conectar el panel de administración con la base de datos de **TaronjaBoxValencia**.  

Algunas de las principales APIs incluyen:  

- **`api_header.php`** → Modificación dinámica del menú de navegación.  
- **`api_blog.php`** → Administración de publicaciones del blog.  
- **`api_contacto.php`** → Gestión de mensajes enviados desde el formulario de contacto.  

🔹 **Tabla Dinámica** (`tabla_dinamica.php`):  
Esta función **automatiza la creación de formularios** basados en la estructura de cada tabla en la base de datos, generando los campos automáticamente sin necesidad de programarlos manualmente.  

---

## 🗄️ Base de Datos

DarkOrange **comparte la base de datos** con TaronjaBoxValencia. Las principales tablas incluyen:

| Tabla          | Descripción |
|---------------|-------------|
| **header**    | Secciones dinámicas del menú. |
| **blog_posts** | Artículos del blog. |
| **usuarios_admin** | Gestión de acceso al panel de administración. |
| **equipo** | Información sobre los entrenadores y staff. |
| **fisioterapia** | Servicios de fisioterapia disponibles. |
| **workouts** | Programación de entrenamientos. |
| **precios** | Planes de suscripción y tarifas. |

---

## 🔗 Integración con TaronjaBoxValencia

DarkOrange está diseñado para trabajar en conjunto con **TaronjaBoxValencia**.  

- 🔹 **Modificaciones en DarkOrange** → Se reflejan automáticamente en TaronjaBoxValencia.  
- 🔹 **Base de datos compartida** → Ambos proyectos leen y escriben en la misma estructura de datos.  
- 🔹 **Conexión en tiempo real** → Los cambios realizados desde el panel de administración impactan inmediatamente en la web pública.  

---

## 📜 Documentación del Proyecto

Si deseas ver la documentación completa del código, puedes hacerlo de dos maneras:

1. **Repositorio del script de documentación**, donde se generan explicaciones automáticas mediante **docstrings en PHP**.  
2. **Revisando el código fuente en el repositorio de DarkOrange**, donde cada función está comentada para facilitar su comprensión.  

📌 **Repositorio del script:** [scriptdocumentacion](https://github.com/luisrocedev/scriptdocumentacion)  
📌 **Repositorio del código:** [darkorange](https://github.com/luisrocedev/darkorange)  

---

## 👨‍💻 Contacto

Si tienes preguntas o sugerencias, ¡contáctame en **LinkedIn** o revisa mi **GitHub**! 🚀
