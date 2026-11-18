<?php
$titulo_pagina = 'Uñas esculpidas | Mely Nails';
$pagina_actual = 'unas-esculpidas';
$descripcion_pagina = 'Conocé los diseños y servicios de uñas esculpidas de Mely Nails.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main class="container py-5">
    <section class="row align-items-center g-4">
        <div class="col-md-6">
            <h2>Uñas esculpidas</h2>

            <p>Diseños personalizados para darle estilo y belleza a tus manos.</p>

            <p>
                Las uñas esculpidas permiten crear diferentes largos, formas y
                estilos, adaptados a tus gustos.
            </p>

            <a href="contacto.php" class="btn btn-rosa">Reservá tu turno</a>
        </div>

        <div class="col-md-6">
            <img
                src="img/esculpidas.jpeg"
                alt="Ejemplo de uñas esculpidas con diseño personalizado"
                class="img-fluid rounded-4"
            />
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
