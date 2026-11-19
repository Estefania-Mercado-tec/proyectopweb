<?php

$rol_requerido = 'Administrador';

require_once '../includes/auth_guard.php';
require_once '../config/conexion.php';

// Permitir únicamente solicitudes POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Validar ID
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    http_response_code(400);
    exit('ID de servicio inválido.');
}

try {

    $sql = "DELETE FROM servicios WHERE id_servicio = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([':id' => $id]);

    header('Location: index.php');
    exit;

} catch (PDOException $e) {

    http_response_code(409);

    echo "No se puede eliminar este servicio porque tiene turnos asociados.";

}

?>
