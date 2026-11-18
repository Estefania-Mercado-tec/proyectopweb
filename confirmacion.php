<?php
$titulo_pagina = 'Consulta enviada | Mely Nails';
$pagina_actual = 'confirmacion';
$descripcion_pagina = 'Confirmación de consulta en Mely Nails. Gracias por comunicarte con nosotros.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container text-center py-5">
    <h1>¡Gracias por comunicarte con Mely Nails!</h1>

    <p class="lead mt-3">Tu consulta fue enviada correctamente.</p>

    <p>Nos pondremos en contacto contigo para brindarte más información.</p>

    <a href="index.php" class="btn btn-rosa mt-3">Volver al inicio</a>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
