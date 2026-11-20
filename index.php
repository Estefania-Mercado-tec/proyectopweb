
<?php
$titulo_pagina = 'Inicio | Mely Nails';
$pagina_actual = 'index';
$descripcion_pagina = 'Mely Nails: servicios de manicura, uñas esculpidas y diseños personalizados.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main>

<!-- PRESENTACIÓN PRINCIPAL -->
<section class="container text-center py-5">
    <h2>Realzá tu belleza con Mely Nails</h2>
    <p class="lead">
        Manicura, diseños personalizados y belleza para tus uñas.
    </p>
    <a href="contacto.php" class="btn btn-rosa">Reservá tu turno</a>
</section>

<!-- SERVICIOS -->
<section class="container py-5">
    <h2 class="text-center mb-4">Nuestros servicios</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <article class="card h-100">
                <img src="img/manicura.jpeg" alt="Trabajo de manicura clásica">
                <div class="card-body text-center">
                    <h3 class="h5">Manicura clásica</h3>
                    <p>Cuidado y belleza para tus manos.</p>
                    <a href="manicura.php" class="btn btn-rosa">Ver servicio</a>
                </div>
            </article>
        </div>

        <div class="col-md-4">
            <article class="card h-100">
                <img src="img/esmaltado.jpeg" alt="Trabajo de esmaltado semipermanente">
                <div class="card-body text-center">
                    <h3 class="h5">Semipermanente</h3>
                    <p>Color y brillo para tus uñas por más tiempo.</p>
                    <a href="semipermanente.php" class="btn btn-rosa">Ver servicio</a>
                </div>
            </article>
        </div>

        <div class="col-md-4">
            <article class="card h-100">
                <img src="img/esculpidas.jpeg" alt="Diseño de uñas esculpidas">
                <div class="card-body text-center">
                    <h3 class="h5">Uñas esculpidas</h3>
                    <p>Diseños y extensiones para lucir uñas increíbles.</p>
                    <a href="unas-esculpidas.php" class="btn btn-rosa">Ver servicio</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- BUSCADOR DINÁMICO TP9 -->
<section class="container py-5">
    <h2 class="text-center mb-3">Buscá nuestros servicios</h2>

    <p class="text-center mb-4">
        Escribí el nombre de un servicio y encontrá sus detalles y precios.
    </p>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <input
                type="search"
                id="inputBusqueda"
                class="form-control"
                placeholder="Ejemplo: manicura o semipermanente..."
                autocomplete="off"
            >

            <div id="resultados" class="mt-4" aria-live="polite">
                <p class="text-muted text-center">
                    Escribí para buscar nuestros servicios.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- GALERÍA -->
<section class="container text-center py-5">
    <h2>Conocé nuestros trabajos</h2>
    <p>Descubrí diseños únicos y personalizados.</p>
    <a href="galeria.php" class="btn btn-rosa">Ver galería</a>
</section>

<!-- PRECIOS -->
<section class="container text-center py-5">
    <h2>Nuestros precios</h2>
    <p>Consultá los valores de nuestros servicios.</p>
    <a href="precios.php" class="btn btn-rosa">Ver precios</a>
</section>

<!-- PROMOCIONES -->
<section class="container text-center py-5">
    <h2>Promociones</h2>
    <p>Conocé nuestras promociones y propuestas especiales.</p>
    <a href="promociones.php" class="btn btn-rosa">Ver promociones</a>
</section>

<!-- SOBRE NOSOTROS -->
<section class="container text-center py-5">
    <h2>Sobre Mely Nails</h2>
    <p>Conocé nuestro emprendimiento y nuestra pasión por el cuidado de las uñas.</p>
    <a href="sobre-nosotros.php" class="btn btn-rosa">Conocenos</a>
</section>

<!-- OPINIONES -->
<section class="container text-center py-5">
    <h2>Opiniones de nuestras clientas</h2>
    <p>Conocé las opiniones y experiencias de nuestras clientas.</p>
    <a href="opiniones.php" class="btn btn-rosa">Ver opiniones</a>
</section>

<!-- PREGUNTAS FRECUENTES -->
<section class="container text-center py-5">
    <h2>Preguntas frecuentes</h2>
    <p>Encontrá respuestas a las consultas más habituales.</p>
    <a href="preguntas-frecuentes.php" class="btn btn-rosa">Ver preguntas frecuentes</a>
</section>

<!-- CONTACTO -->
<section class="container text-center py-5">
    <h2>¿Querés reservar tu turno?</h2>
    <p>Comunicate con nosotros y consultá por nuestros servicios.</p>
    <a href="contacto.php" class="btn btn-rosa">Contactanos</a>
</section>

</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
