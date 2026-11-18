<?php
$titulo_pagina = 'Opiniones | Mely Nails';
$pagina_actual = 'opiniones';
$descripcion_pagina = 'Conocé las opiniones y experiencias de clientes de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">

    <section class="text-center mb-5">
        <h2>Opiniones de nuestras clientas</h2>
        <p>Conocé las experiencias de quienes eligieron Mely Nails.</p>
    </section>

    <section class="row g-4">

        <div class="col-md-4">
            <article class="card h-100">
                <div class="card-body text-center">
                    <p class="fs-4" aria-label="5 de 5 estrellas">★★★★★</p>
                    <h3 class="h5">Clienta 1</h3>
                    <p>
                        Me encantó el resultado. Los diseños son delicados y la atención
                        es muy buena.
                    </p>
                </div>
            </article>
        </div>

        <div class="col-md-4">
            <article class="card h-100">
                <div class="card-body text-center">
                    <p class="fs-4" aria-label="5 de 5 estrellas">★★★★★</p>
                    <h3 class="h5">Clienta 2</h3>
                    <p>Excelente trabajo, mucha dedicación y hermosos detalles.</p>
                </div>
            </article>
        </div>

        <div class="col-md-4">
            <article class="card h-100">
                <div class="card-body text-center">
                    <p class="fs-4" aria-label="5 de 5 estrellas">★★★★★</p>
                    <h3 class="h5">Clienta 3</h3>
                    <p>
                        Quedé muy conforme con mis uñas. ¡Volvería a elegir Mely Nails!
                    </p>
                </div>
            </article>
        </div>

    </section>

    <section class="text-center mt-5">
        <h2>¿Querés vivir la experiencia?</h2>
        <p>Consultá por nuestros servicios y reservá tu turno.</p>
        <a href="contacto.php" class="btn btn-rosa">Reservar turno</a>
    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
