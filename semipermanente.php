<?php
$titulo_pagina = 'Esmaltado semipermanente | Mely Nails';
$pagina_actual = 'semipermanente';
$descripcion_pagina = 'Descubrí el servicio de esmaltado semipermanente de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">
    <section class="row align-items-center g-4">
        <div class="col-md-6">
            <h2>Esmaltado semipermanente</h2>

            <p>
                Un acabado brillante y duradero para lucir tus uñas siempre lindas.
            </p>

            <p>
                Este servicio permite disfrutar de diferentes colores y diseños, con
                un resultado prolijo y personalizado.
            </p>

            <a href="contacto.php" class="btn btn-rosa">Reservá tu turno</a>
        </div>

        <div class="col-md-6">
            <img
                src="img/esmaltado.jpeg"
                alt="Ejemplo de uñas con esmaltado semipermanente"
                class="img-fluid rounded-4"
            />
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
