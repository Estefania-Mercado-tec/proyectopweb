<?php
$titulo_pagina = 'Promociones | Mely Nails';
$pagina_actual = 'promociones';
$descripcion_pagina = 'Descubrí las promociones especiales de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">

    <section class="text-center mb-5">
        <h2>Promociones especiales</h2>
        <p>
            Descubrí nuestras propuestas para disfrutar de tus servicios
            favoritos.
        </p>
    </section>

    <section class="row g-4">

        <div class="col-md-4">
            <article class="card h-100 text-center">
                <div class="card-body">
                    <h3 class="h5">Promo especial</h3>
                    <p>Consultá por nuestras promociones de manicura.</p>
                    <a href="contacto.php" class="btn btn-rosa">Consultar</a>
                </div>
            </article>
        </div>

        <div class="col-md-4">
            <article class="card h-100 text-center">
                <div class="card-body">
                    <h3 class="h5">Diseños personalizados</h3>
                    <p>Elegí el estilo que más te guste para tus uñas.</p>
                    <a href="contacto.php" class="btn btn-rosa">Consultar</a>
                </div>
            </article>
        </div>

        <div class="col-md-4">
            <article class="card h-100 text-center">
                <div class="card-body">
                    <h3 class="h5">Beneficios especiales</h3>
                    <p>Contactanos para conocer nuestras ofertas vigentes.</p>
                    <a href="contacto.php" class="btn btn-rosa">Consultar</a>
                </div>
            </article>
        </div>

    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
