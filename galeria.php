<?php
$titulo_pagina = 'Galería | Mely Nails';
$pagina_actual = 'galeria';
$descripcion_pagina = 'Explorá la galería de diseños y trabajos de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">

    <section class="text-center mb-5">
        <h2>Nuestra galería</h2>
        <p>Inspirate con algunos diseños y estilos para tus uñas.</p>
    </section>

    <section class="row g-4">

        <div class="col-sm-6 col-lg-4">
            <article class="card h-100">
                <img
                    src="img/manicura.jpeg"
                    class="card-img-top"
                    alt="Diseño de manicura clásica"
                />
                <div class="card-body text-center">
                    <h3 class="h5">Manicura clásica</h3>
                </div>
            </article>
        </div>

        <div class="col-sm-6 col-lg-4">
            <article class="card h-100">
                <img
                    src="img/esmaltado.jpeg"
                    class="card-img-top"
                    alt="Diseño de esmaltado semipermanente"
                />
                <div class="card-body text-center">
                    <h3 class="h5">Esmaltado semipermanente</h3>
                </div>
            </article>
        </div>

        <div class="col-sm-6 col-lg-4">
            <article class="card h-100">
                <img
                    src="img/esculpidas.jpeg"
                    class="card-img-top"
                    alt="Diseño de uñas esculpidas"
                />
                <div class="card-body text-center">
                    <h3 class="h5">Uñas esculpidas</h3>
                </div>
            </article>
        </div>

    </section>

    <div class="text-center mt-5">
        <a href="contacto.php" class="btn btn-rosa">Consultá por tu diseño</a>
    </div>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
