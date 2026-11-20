
<?php

require_once __DIR__ . '/config/conexion.php';
require_once __DIR__ . '/app/Controllers/ServicioController.php';

$controlador = new ServicioController($pdo);
$controlador->index();

?>
