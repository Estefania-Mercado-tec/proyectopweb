<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario inició sesión
if (!isset($_SESSION['usuario_id'])) {

    $ruta_actual = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));

    if (basename($ruta_actual) === 'admin') {
        $ruta_actual = dirname($ruta_actual);
    }

    header('Location: ' . rtrim($ruta_actual, '/') . '/login.php?error=acceso_denegado');
    exit;
}

// Verificar si se requiere el rol Administrador
if (
    isset($rol_requerido) &&
    $_SESSION['rol'] !== $rol_requerido
) {
    http_response_code(403);
    exit('No tenés permisos para acceder a esta página.');
}

?>
