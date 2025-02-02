/**
 * Realiza una petición fetch al archivo backend.php para obtener datos.
 * Los datos se procesan como JSON y se muestran en la consola.
 */

// Hacemos la petición fetch al archivo backend.php
fetch('backend/backend.php')
    .then(response => response.json())  // Procesamos la respuesta como JSON
    .then(data => {
        console.log('Datos recibidos:', data);  // Mostramos los datos en la consola
    })
    .catch(error => {
        console.error('Error:', error);  // En caso de error
    });