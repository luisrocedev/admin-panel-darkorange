<?php

/**
 * Obtiene todas las entradas del blog desde la base de datos y las devuelve en formato JSON.
 */

include 'config/db_connect.php';  // Incluir la conexión a la base de datos

// Verificar que la solicitud sea de tipo GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Consulta SQL para obtener todas las entradas del blog
    $sql = "SELECT * FROM blog_posts";
    $result = $conn->query($sql);

    // Verificar si se encontraron entradas
    if ($result->num_rows > 0) {
        // Crear un array para almacenar las entradas
        $posts = [];
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }

        // Devolver los datos como JSON
        echo json_encode($posts);
    } else {
        // Si no hay entradas en la base de datos
        echo json_encode(["message" => "No posts found"]);
    }
} else {
    // Si la solicitud no es de tipo GET
    echo json_encode(["message" => "Invalid request"]);
}
