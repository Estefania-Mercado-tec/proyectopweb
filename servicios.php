<?php
$titulo_pagina = 'Servicios | Mely Nails';
$pagina_actual = 'servicios';
$descripcion_pagina = 'Conocé los servicios de manicura, uñas esculpidas y diseños personalizados de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main>
    <section class="container text-center py-5">
        <h2>Realzá tu belleza con Mely Nails</h2>
        <p>Manicura, diseños personalizados y belleza para tus uñas.</p>
        <a href="contacto.php" class="btn btn-rosa">Reservá tu turno</a>
    </section>

    <section class="container py-5">
        <h2 class="text-center mb-4">Nuestros servicios</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <article class="card h-100">
                    <div class="card-body text-center">
                        <h3 class="h5">Uñas esculpidas</h3>
                        <p>Diseños y extensiones para lucir uñas increíbles.</p>
                    </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="card h-100">
                    <div class="card-body text-center">
                        <h3 class="h5">Semipermanente</h3>
                        <p>Color y brillo para tus uñas por más tiempo.</p>
                    </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="card h-100">
                    <div class="card-body text-center">
                        <h3 class="h5">Manicura clásica</h3>
                        <p>Cuidado y belleza para tus manos.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="text-center py-5">
        <h2>Conocé nuestros trabajos</h2>
        <p>Descubrí diseños únicos y personalizados.</p>
        <a href="servicios.php" class="btn btn-rosa">Ver servicios</a>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
