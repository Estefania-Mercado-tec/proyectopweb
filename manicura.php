<?php
$titulo_pagina = 'Manicura clásica | Mely Nails';
$pagina_actual = 'manicura';
$descripcion_pagina = 'Conocé el servicio de manicura clásica de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">
    <section class="row align-items-center g-4">
        <div class="col-md-6">
            <h2>Manicura clásica</h2>

            <p>Un servicio pensado para cuidar y embellecer tus manos.</p>

            <p>
                Incluye limado, cuidado de cutículas y esmaltado tradicional para
                lograr un acabado prolijo y delicado.
            </p>

            <a href="contacto.php" class="btn btn-rosa">Reservá tu turno</a>
        </div>

        <div class="col-md-6">
            <img
                src="img/manicura.jpeg"
                alt="Ejemplo de manicura clásica con uñas prolijas y esmaltadas"
                class="img-fluid rounded-4"
            />
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
