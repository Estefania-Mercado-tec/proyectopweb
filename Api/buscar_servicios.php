<?php

header('Content-Type: application/json; charset=utf-8');

// Solo se permiten solicitudes GET
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);

    echo json_encode([
        'status' => 'error',
        'message' => 'Método no permitido.'
    ]);

    exit;
}

require_once '../config/conexion.php';

// Obtener el texto de búsqueda
$busqueda = isset($_GET['q']) ? trim($_GET['q']) : '';

try {

    if ($busqueda !== '') {

        $sql = "SELECT id_servicio, nombre, descripcion, precio
                FROM servicios
                WHERE nombre LIKE :query
                ORDER BY nombre";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':query' => '%' . $busqueda . '%'
        ]);

    } else {

        $sql = "SELECT id_servicio, nombre, descripcion, precio
                FROM servicios
                ORDER BY nombre
                LIMIT 10";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    $servicios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    http_response_code(200);

    echo json_encode([
        'status' => 'success',
        'data' => $servicios
    ]);

} catch (PDOException $e) {

    http_response_code(500);

    echo json_encode([
        'status' => 'error',
        'message' => 'Error al consultar los servicios.'
    ]);

}

?>
