<?php
$titulo_pagina = 'Sobre nosotros | Mely Nails';
$pagina_actual = 'sobre-nosotros';
$descripcion_pagina = 'Conocé la historia y la dedicación detrás de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">

    <section class="row align-items-center g-4">

        <div class="col-md-6">
            <h2>Sobre Mely Nails</h2>

            <p>
                Mely Nails es un emprendimiento dedicado al cuidado y la belleza de
                las uñas.
            </p>

            <p>
                Nos apasiona crear diseños personalizados y ofrecer una atención
                cercana, cuidando cada detalle para que cada persona disfrute de una
                experiencia especial.
            </p>

            <p>
                Nuestro objetivo es que cada clienta se sienta cómoda, cuidada y
                feliz con el resultado.
            </p>

            <a href="contacto.php" class="btn btn-rosa">
                Conocé nuestros servicios
            </a>
        </div>

        <div class="col-md-6">
            <img
                src="img/mely-nails.jpeg"
                alt="Emprendimiento Mely Nails"
                class="img-fluid"
            />
        </div>

    </section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
